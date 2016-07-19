<?php

return [
    'use_package_routes' => true,
    'middleware' => ['web','admin'],

    'images_dir'         => 'public/uploaded/images/',
    'images_url'         => '/uploaded/images/',

    'files_dir'          => 'public/uploaded/files/',
    'files_url'          => '/uploaded/files/',

    'file_type_array'         => [
        "pdf"  => "Adobe Acrobat",
        "docx" => "Microsoft Word",
        "docx" => "Microsoft Word",
        "xls"  => "Microsoft Excel",
        "xls"  => "Microsoft Excel",
        "zip"  => 'Archive',
        "gif"  => 'GIF Image',
        "jpg"  => 'JPEG Image',
        "jpeg" => 'JPEG Image',
        "png"  => 'PNG Image',
        "ppt"  => 'Microsoft PowerPoint',
        "pptx" => 'Microsoft PowerPoint',
    ],

    'file_icon_array'         => [
        "pdf"  => "fa-file-pdf-o",
        "docx" => "fa-file-word-o",
        "docx" => "fa-file-word-o",
        "xls"  => "fa-file-excel-o",
        "xls"  => "fa-file-excel-o",
        "zip"  => 'fa-file-archive-o',
        "gif"  => 'fa-file-image-o',
        "jpg"  => 'fa-file-image-o',
        "jpeg" => 'fa-file-image-o',
        "png"  => 'fa-file-image-o',
        "ppt"  => 'fa-file-powerpoint-o',
        "pptx" => 'fa-file-powerpoint-o',
    ],
];
