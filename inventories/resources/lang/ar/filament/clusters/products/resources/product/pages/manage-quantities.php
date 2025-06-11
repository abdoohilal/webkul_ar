<?php

return [
    'title' => 'الكميات',

    'tabs' => [
        'internal-locations' => 'المواقع الداخلية',
        'transit-locations'  => 'مواقع العبور',
        'on-hand'            => 'الموجودة',
        'to-count'           => 'لعدها',
        'to-apply'           => 'لتطبيقها',
    ],

    'form' => [
        'fields' => [
            'product'          => 'المنتج',
            'location'         => 'الموقع',
            'package'          => 'الطرد',
            'lot'              => 'رقم الدفعة / التسلسلي',
            'on-hand-qty'      => 'الكمية المتاحة',
            'storage-category' => 'فئة التخزين',
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => 'المنتج',
            'location'          => 'الموقع',
            'lot'               => 'رقم الدفعة / التسلسلي',
            'storage-category'  => 'فئة التخزين',
            'quantity'          => 'الكمية',
            'package'           => 'الطرد',
            'on-hand'           => 'الكمية المتاحة',
            'reserved-quantity' => 'الكمية المحجوزة',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'تم تحديث الكمية',
                    'body'  => 'تم تحديث الكمية بنجاح.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'label' => 'إضافة كمية',

                'notification' => [
                    'title' => 'تمت إضافة الكمية',
                    'body'  => 'تمت إضافة الكمية بنجاح.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'الكمية موجودة بالفعل',
                        'body'  => 'هناك كمية موجودة بالفعل لنفس التكوين. يرجى تحديث الكمية بدلاً من ذلك.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الكمية',
                    'body'  => 'تم حذف الكمية بنجاح.',
                ],
            ],
        ],
    ],
];
