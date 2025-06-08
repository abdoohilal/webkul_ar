<?php

return [
    'title' => 'العطلات الرسمية',

    'model-label' => 'العطلة الرسمية',

    'navigation' => [
        'title' => 'العطلات الرسمية',
    ],

    'form' => [
        'fields' => [
            'name'             => 'الاسم',
            'name-placeholder' => 'أدخل اسم العطلة الرسمية',
            'date-from'        => 'تاريخ البدء',
            'date-to'          => 'تاريخ الانتهاء',
            'color'            => 'اللون',
            'calendar'         => 'التقويم',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'الاسم',
            'company-name' => 'اسم الشركة',
            'calendar'     => 'التقويم',
            'created-by'   => 'تم الإنشاء بواسطة',
            'date-from'    => 'تاريخ البدء',
            'date-to'      => 'تاريخ الانتهاء',
        ],

        'filters' => [
            'name'         => 'الاسم',
            'company-name' => 'اسم الشركة',
            'created-by'   => 'تم الإنشاء بواسطة',
            'date-from'    => 'تاريخ البدء',
            'date-to'      => 'تاريخ الانتهاء',
            'created-at'   => 'تاريخ الإنشاء',
            'updated-at'   => 'تاريخ التحديث',
        ],

        'groups' => [
            'name'         => 'الاسم',
            'company-name' => 'اسم الشركة',
            'created-by'   => 'تم الإنشاء بواسطة',
            'date-from'    => 'تاريخ البدء',
            'date-to'      => 'تاريخ الانتهاء',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث العطلة الرسمية',
                    'body'  => 'تم استعادة العطلة الرسمية بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف العطلة الرسمية',
                    'body'  => 'تم حذف العطلة الرسمية بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف العطلات الرسمية',
                    'body'  => 'تم حذف العطلات الرسمية بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'      => 'الاسم',
            'date-from' => 'تاريخ البدء',
            'date-to'   => 'تاريخ الانتهاء',
            'color'     => 'اللون',
        ],
    ],
];
