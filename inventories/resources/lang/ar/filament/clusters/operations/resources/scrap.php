<?php

return [
    'navigation' => [
        'title' => 'الخردة',
        'group' => 'التعديلات',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عام',

                'fields' => [
                    'product'              => 'المنتج',
                    'package'              => 'العبوة',
                    'quantity'             => 'الكمية',
                    'unit'                 => 'وحدة القياس',
                    'lot'                  => 'الدفعة / الرقم التسلسلي',
                    'tags'                 => 'العلامات',
                    'name'                 => 'الاسم',
                    'color'                => 'اللون',
                    'owner'                => 'المالك',
                    'source-location'      => 'موقع المصدر',
                    'destination-location' => 'موقع الخردة',
                    'source-document'      => 'وثيقة المصدر',
                    'company'              => 'الشركة',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'date'            => 'التاريخ',
            'reference'       => 'المرجع',
            'product'         => 'المنتج',
            'package'         => 'العبوة',
            'quantity'        => 'الكمية',
            'uom'             => 'وحدة القياس',
            'source-location' => 'موقع المصدر',
            'scrap-location'  => 'موقع الخردة',
            'unit'            => 'وحدة القياس',
            'lot'             => 'الدفعة / الرقم التسلسلي',
            'tags'            => 'العلامات',
            'state'           => 'الحالة',
        ],

        'groups' => [
            'product'              => 'المنتج',
            'source-location'      => 'موقع المصدر',
            'destination-location' => 'موقع الخردة',
        ],

        'filters' => [
            'source-location'      => 'موقع المصدر',
            'destination-location' => 'موقع الخردة',
            'product'              => 'المنتج',
            'state'                => 'الحالة',
            'product-category'     => 'فئة المنتج',
            'uom'                  => 'وحدة القياس',
            'lot'                  => 'الدفعة / الرقم التسلسلي',
            'package'              => 'العبوة',
            'tags'                 => 'العلامات',
            'company'              => 'الشركة',
            'quantity'             => 'الكمية',
            'creator'              => 'المُنشئ',
            'closed-at'            => 'تاريخ الإغلاق',
            'created-at'           => 'تاريخ الإنشاء',
            'updated-at'           => 'تاريخ التحديث',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم حذف الخردة',
                        'body'  => 'تم حذف الخردة بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف الخردة',
                        'body'  => 'لا يمكن حذف الخردة لأنها قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم حذف الخردات',
                        'body'  => 'تم حذف الخردات المختارة بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف الخردات',
                        'body'  => 'لا يمكن حذف الخردات لأنها قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'تفاصيل الخردة',

                'entries' => [
                    'product'              => 'المنتج',
                    'quantity'             => 'الكمية',
                    'lot'                  => 'الدفعة',
                    'tags'                 => 'العلامات',
                    'package'              => 'العبوة',
                    'owner'                => 'المالك',
                    'source-location'      => 'موقع المصدر',
                    'destination-location' => 'موقع الوجهة',
                    'source-document'      => 'وثيقة المصدر',
                    'company'              => 'الشركة',
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
