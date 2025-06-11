<?php

return [
    'title' => 'العلامات',

    'navigation' => [
        'title' => 'العلامات',
        'group' => 'الموظف',
    ],

    'groups' => [
        'status'     => 'الحالة',
        'created-by' => 'أنشئ بواسطة',
        'created-at' => 'تاريخ الإنشاء',
        'updated-at' => 'تاريخ التحديث',
    ],

    'form' => [
        'fields' => [
            'name'  => 'الاسم',
            'color' => 'اللون',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'المعرف',
            'name'       => 'الاسم',
            'color'      => 'اللون',
            'created-by' => 'أنشئ بواسطة',
            'created-at' => 'تاريخ الإنشاء',
            'updated-at' => 'تاريخ التحديث',
        ],

        'filters' => [
            'name'       => 'الاسم',
            'created-by' => 'أنشئ بواسطة',
            'updated-by' => 'حُدث بواسطة',
            'updated-at' => 'تاريخ التحديث',
            'created-at' => 'تاريخ الإنشاء',
        ],

        'groups' => [
            'name'         => 'الاسم',
            'job-position' => 'المنصب الوظيفي',
            'color'        => 'اللون',
            'created-by'   => 'أنشئ بواسطة',
            'created-at'   => 'تاريخ الإنشاء',
            'updated-at'   => 'تاريخ التحديث',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث العلامة',
                    'body'  => 'تم تحديث العلامة بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف العلامة',
                    'body'  => 'تم حذف العلامة بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف العلامات',
                    'body'  => 'تم حذف العلامات بنجاح.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'تم إنشاء العلامة',
                    'body'  => 'تم إنشاء العلامة بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'  => 'الاسم',
        'color' => 'اللون',
    ],
];