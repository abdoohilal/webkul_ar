<?php

return [
    'title' => 'مواقع العمل',

    'navigation' => [
        'title' => 'مواقع العمل',
        'group' => 'الموظفين',
    ],

    'form' => [
        'name'            => 'Name',
        'company'         => 'الشركة',
        'location-type'   => 'نوع الموقع',
        'location-number' => 'رقم الموقع',
        'status'          => 'الحالة',
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'name'            => 'الاسم',
            'status'          => 'الحالة',
            'company'         => 'الشركة',
            'location-type'   => 'نوع الموقع',
            'location-number' => 'رقم الموقع',
            'deleted-at'      => 'تاريخ الحذف',
            'created-by'      => 'الموظف المنشئ',
            'created-at'      => 'تاريخ الإنشاء',
            'updated-at'      => 'تاريخ التحديث',
        ],

        'filters' => [
            'name'            => 'الاسم',
            'status'          => 'الحالة',
            'created-by'      => 'الموظف المنشئ',
            'company'         => 'الشركة',
            'location-number' => 'رقم الموقع',
            'location-type'   => 'نوع الموقع',
            'updated-at'      => 'تاريخ التحديث',
            'created-at'      => 'تاريخ الإنشاء',
        ],

        'groups' => [
            'name'          => 'الاسم',
            'status'        => 'الحالة',
            'location-type' => 'نوع الموقع',
            'company'       => 'الشركة',
            'created-by'    => 'الموظف المنشئ',
            'created-at'    => 'تاريخ الإنشاء',
            'updated-at'    => 'تاريخ التحديث',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث موقع العمل',
                    'body'  => 'تم تحديث موقع العمل بنجاح.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'تم استرجاع موقع العمل',
                    'body'  => 'تم استرجاع موقع العمل بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف موقع العمل',
                    'body'  => 'تم حذف موقع العمل بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم حذف موقع العمل بشكل دائم',
                    'body'  => 'تم حذف موقع العمل بشكل دائم بنجاح.',
                ],
            ],

            'empty-state' => [
                'notification' => [
                    'title' => 'تم إنشاء موقع العمل',
                    'body'  => 'تم إنشاء موقع العمل بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف مواقع العمل',
                    'body'  => 'تم حذف مواقع العمل بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم حذف مواقع العمل بشكل دائم',
                    'body'  => 'تم حذف مواقع العمل بشكل دائم بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'            => 'الاسم',
        'company'         => 'الشركة',
        'location-type'   => 'نوع الموقع',
        'location-number' => 'رقم الموقع',
        'status'          => 'الحالة',
    ],
];
