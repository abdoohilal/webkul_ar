<?php

return [
    'title' => 'الطاقة حسب المنتجات',

    'form' => [
        'product' => 'المنتج',
        'qty'     => 'الكمية',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'إضافة طاقة المنتج',

                'notification' => [
                    'title' => 'تم إنشاء طاقة المنتج',
                    'body'  => 'تمت إضافة طاقة المنتج بنجاح.',
                ],
            ],
        ],

        'columns' => [
            'product' => 'المنتج',
            'qty'     => 'الكمية',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث طاقة المنتج',
                    'body'  => 'تم تحديث طاقة المنتج بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف طاقة المنتج',
                    'body'  => 'تم حذف طاقة المنتج بنجاح.',
                ],
            ],
        ],
    ],
];
