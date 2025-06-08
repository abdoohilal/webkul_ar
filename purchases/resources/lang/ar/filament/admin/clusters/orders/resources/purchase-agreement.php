<?php

return [
    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عام',

                'entries' => [
                    'vendor'                => 'المورد',
                    'valid-from'            => 'ساري من',
                    'valid-to'              => 'ساري حتى',
                    'buyer'                 => 'المشتري',
                    'reference'             => 'المرجع',
                    'reference-placeholder' => 'مثال: PO/123',
                    'agreement-type'        => 'نوع الاتفاقية',
                    'company'               => 'الشركة',
                    'currency'              => 'العملة',
                ],
            ],

            'metadata' => [
                'title' => 'البيانات الوصفية',

                'entries' => [
                    'created-at' => 'تاريخ الإنشاء',
                    'created-by' => 'أنشئ بواسطة',
                    'updated-at' => 'تاريخ التحديث',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'المنتجات',

                'entries' => [
                    'product'    => 'المنتج',
                    'quantity'   => 'الكمية',
                    'ordered'    => 'المطلوب',
                    'uom'        => 'وحدة القياس',
                    'unit-price' => 'سعر الوحدة',
                ],
            ],

            'additional' => [
                'title' => 'معلومات إضافية',
            ],

            'terms' => [
                'title' => 'الشروط والأحكام',
            ],
        ],
    ],
]; 