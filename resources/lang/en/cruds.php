<?php

return [
    'userManagement'    => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'        => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'              => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'              => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'productManagement' => [
        'title'          => 'Product Management',
        'title_singular' => 'Product Management',
    ],
    'productCategory'   => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'name'                    => 'Name',
            'name_helper'             => '',
            'description'             => 'Description',
            'description_helper'      => '',
            'photo'                   => 'Photo',
            'photo_helper'            => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated At',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted At',
            'deleted_at_helper'       => '',
            'slug'                    => 'Slug',
            'slug_helper'             => '',
            'parent'                  => 'Parent',
            'parent_helper'           => '',
            'status'                  => 'Status',
            'status_helper'           => '',
            'meta_title'              => 'Meta Title',
            'meta_title_helper'       => '',
            'meta_keywords'           => 'Meta Keywords',
            'meta_keywords_helper'    => '',
            'meta_description'        => 'Meta Description',
            'meta_description_helper' => '',
            'bottom_content'          => 'Bottom Content',
            'bottom_content_helper'   => '',
        ],
    ],
    'productTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'product'           => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'name'                    => 'Title',
            'name_helper'             => '',
            'description'             => 'Description',
            'description_helper'      => '',
            'category'                => 'Categories',
            'category_helper'         => '',
            'photo'                   => 'Photo',
            'photo_helper'            => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated At',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted At',
            'deleted_at_helper'       => '',
            'slug'                    => 'Slug',
            'slug_helper'             => '',
            'heading'                 => 'Heading',
            'heading_helper'          => '',
            'height'                  => 'Height',
            'height_helper'           => '',
            'width'                   => 'Width',
            'width_helper'            => '',
            'weight'                  => 'Weight',
            'weight_helper'           => '',
            'stock_available'         => 'Stock Available',
            'stock_available_helper'  => '',
            'delivery_days'           => 'Delivery Days',
            'delivery_days_helper'    => '',
            'meta_title'              => 'Meta Title',
            'meta_title_helper'       => '',
            'meta_keywords'           => 'Meta Keywords',
            'meta_keywords_helper'    => '',
            'meta_description'        => 'Meta Description',
            'meta_description_helper' => '',
            'status'                  => 'Status',
            'status_helper'           => '',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Content management',
        'title_singular' => 'Content management',
    ],
    'contentCategory'   => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'contentTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'contentPage'       => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Title',
            'title_helper'            => '',
            'page_text'               => 'Content',
            'page_text_helper'        => '',
            'featured_image'          => 'Featured Image',
            'featured_image_helper'   => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated At',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted At',
            'deleted_at_helper'       => '',
            'slug'                    => 'Slug',
            'slug_helper'             => '',
            'status'                  => 'Status',
            'status_helper'           => '',
            'meta_title'              => 'Meta Title',
            'meta_title_helper'       => '',
            'meta_keywords'           => 'Meta Keywords',
            'meta_keywords_helper'    => '',
            'meta_description'        => 'Meta Description',
            'meta_description_helper' => '',
        ],
    ],
    'banner'            => [
        'title'          => 'Banners',
        'title_singular' => 'Banner',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'link_title'        => 'Link Title',
            'link_title_helper' => '',
            'link_url'          => 'Link Url',
            'link_url_helper'   => '',
            'image'             => 'Image',
            'image_helper'      => '',
            'status'            => 'Status',
            'status_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'enquiry'           => [
        'title'          => 'Enquiries',
        'title_singular' => 'Enquiry',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'name'                => 'Name',
            'name_helper'         => '',
            'phone_number'        => 'Phone Number',
            'phone_number_helper' => '',
            'email'               => 'Email',
            'email_helper'        => '',
            'message'             => 'Message',
            'message_helper'      => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
    'setting'           => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'label'             => 'Label',
            'label_helper'      => '',
            'value'             => 'Value',
            'value_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
];
