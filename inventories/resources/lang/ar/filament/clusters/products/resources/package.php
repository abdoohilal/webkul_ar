<?php

return [
    'navigation' => [
        'title' => 'الحزم',
        'group' => 'المخزون',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عام',

                'fields' => [
                    'name'             => 'الاسم',
                    'name-placeholder' => 'مثال: PACK007',
                    'package-type'     => 'نوع الحزمة',
                    'pack-date'        => 'تاريخ التعبئة',
                    'location'         => 'الموقع',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'الاسم',
            'package-type' => 'نوع الحزمة',
            'location'     => 'الموقع',
            'company'      => 'الشركة',
            'created-at'   => 'تاريخ الإنشاء',
            'updated-at'   => 'تاريخ التحديث',
        ],

        'groups' => [
            'package-type'   => 'نوع الحزمة',
            'location'       => 'الموقع',
            'created-at'     => 'تاريخ الإنشاء',
        ],

        'filters' => [
            'package-type' => 'نوع الحزمة',
            'location'     => 'الموقع',
            'creator'      => 'المنشئ',
            'company'      => 'الشركة',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم حذف الحزمة',
                        'body'  => 'تم حذف الحزمة بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف الحزمة',
                        'body'  => 'لا يمكن حذف الحزمة لأنها قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print-without-content' => [
                'label' => 'طباعة الباركود',
            ],

            'print-with-content' => [
                'label' => 'طباعة الباركود مع المحتوى',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم حذف الحزم',
                        'body'  => 'تم حذف الحزم بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف الحزم',
                        'body'  => 'لا يمكن حذف الحزم لأنها قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'تفاصيل الحزمة',

                'entries' => [
                    'name'         => 'اسم الحزمة',
                    'package-type' => 'نوع الحزمة',
                    'pack-date'    => 'تاريخ التعبئة',
                    'location'     => 'الموقع',
                    'company'      => 'الشركة',
                    'created-at'   => 'تاريخ الإنشاء',
                    'updated-at'   => 'آخر تحديث',
                ],
            ],

            'record-information' => [
                'title' => 'معلومات السجل',

                'entries' => [
                    'created-by'   => 'تم الإنشاء بواسطة',
                    'created-at'   => 'تاريخ الإنشاء',
                    'last-updated' => 'آخر تحديث',
                ],
            ],
        ],
    ],
];
