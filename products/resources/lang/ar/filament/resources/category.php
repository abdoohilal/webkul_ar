<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عام',
                'fields' => [
                    'name'             => 'الاسم',
                    'name-placeholder' => 'مثال: مصابيح',
                    'parent'           => 'الأصل',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'الاسم',
            'full-name'   => 'الاسم الكامل',
            'parent-path' => 'مسار الأصل',
            'parent'      => 'الأصل',
            'creator'     => 'المنشئ',
            'created-at'  => 'تاريخ الإنشاء',
            'updated-at'  => 'تاريخ التحديث',
        ],
        'groups' => [
            'parent'     => 'الأصل',
            'creator'    => 'المنشئ',
            'created-at' => 'تاريخ الإنشاء',
            'updated-at' => 'تاريخ التحديث',
        ],
        'filters' => [
            'parent'  => 'الأصل',
            'creator' => 'المنشئ',
        ],
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم حذف الفئة',
                        'body'  => 'تم حذف الفئة بنجاح.',
                    ],
                    'error' => [
                        'title' => 'تعذر حذف الفئة',
                        'body'  => 'لا يمكن حذف الفئة لأنها قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم حذف الفئات',
                        'body'  => 'تم حذف الفئات بنجاح.',
                    ],
                    'error' => [
                        'title' => 'تعذر حذف الفئات',
                        'body'  => 'لا يمكن حذف الفئات لأنها قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'معلومات عامة',
                'entries' => [
                    'name'        => 'الاسم',
                    'parent'      => 'الفئة الأصلية',
                    'full_name'   => 'الاسم الكامل للفئة',
                    'parent_path' => 'مسار الفئة',
                ],
            ],
            'record-information' => [
                'title' => 'معلومات السجل',
                'entries' => [
                    'creator'    => 'تم الإنشاء بواسطة',
                    'created_at' => 'تاريخ الإنشاء',
                    'updated_at' => 'آخر تحديث',
                ],
            ],
        ],
    ],
]; 