<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Banner;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Http\Resources\Admin\BannerResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BannersApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('banner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BannerResource(Banner::all());
    }

    public function store(StoreBannerRequest $request)
    {
        $banner = Banner::create($request->all());

        if ($request->input('image', false)) {
            $banner->addMedia(storage_path('tmp/uploads/' . $request->input('image')))->toMediaCollection('image');
        }

        return (new BannerResource($banner))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Banner $banner)
    {
        abort_if(Gate::denies('banner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BannerResource($banner);
    }

    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $banner->update($request->all());

        if ($request->input('image', false)) {
            if (!$banner->image || $request->input('image') !== $banner->image->file_name) {
                $banner->addMedia(storage_path('tmp/uploads/' . $request->input('image')))->toMediaCollection('image');
            }
        } elseif ($banner->image) {
            $banner->image->delete();
        }

        return (new BannerResource($banner))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Banner $banner)
    {
        abort_if(Gate::denies('banner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $banner->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
