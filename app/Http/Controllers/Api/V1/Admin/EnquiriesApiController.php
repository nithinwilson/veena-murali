<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Enquiry;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateEnquiryRequest;
use App\Http\Resources\Admin\EnquiryResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnquiriesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('enquiry_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EnquiryResource(Enquiry::all());
    }

    public function show(Enquiry $enquiry)
    {
        abort_if(Gate::denies('enquiry_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EnquiryResource($enquiry);
    }

    public function update(UpdateEnquiryRequest $request, Enquiry $enquiry)
    {
        $enquiry->update($request->all());

        return (new EnquiryResource($enquiry))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Enquiry $enquiry)
    {
        abort_if(Gate::denies('enquiry_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enquiry->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
