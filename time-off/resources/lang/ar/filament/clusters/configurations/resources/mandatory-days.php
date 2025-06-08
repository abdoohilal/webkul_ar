<?php

return [
    'title' => 'الأيام الإلزامية',

    'model-label' => 'اليوم الإلزامي',

    'navigation' => [
        'title' => 'العطلات الإلزامية',
    ],

    'form' => [
        'fields' => [
            'name'       => 'الاسم',
            'start-date' => 'تاريخ البدء',
            'end-date'   => 'تاريخ الانتهاء',
            'color'      => 'اللون',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'الاسم',
            'company-name' => 'اسم الشركة',
            'created-by'   => 'تم الإنشاء بواسطة',
            'start-date'   => 'تاريخ البدء',
            'end-date'     => 'تاريخ الانتهاء',
        ],

        'filters' => [
            'name'         => 'الاسم',
            'company-name' => 'اسم الشركة',
            'created-by'   => 'تم الإنشاء بواسطة',
            'start-date'   => 'تاريخ البدء',
            'end-date'     => 'تاريخ الانتهاء',
        ],

        'groups' => [
            'name'         => 'الاسم',
            'company-name' => 'اسم الشركة',
            'created-by'   => 'تم الإنشاء بواسطة',
            'start-date'   => 'تاريخ البدء',
            'end-date'     => 'تاريخ الانتهاء',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث اليوم الإلزامي',
                    'body'  => 'تم تحديث اليوم الإلزامي بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف اليوم الإلزامي',
                    'body'  => 'تم حذف اليوم الإلزامي بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الأيام الإلزامية',
                    'body'  => 'تم حذف الأيام الإلزامية بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'       => 'الاسم',
            'start-date' => 'تاريخ البدء',
            'end-date'   => 'تاريخ الانتهاء',
            'color'      => 'اللون',
        ],
    ],
];
