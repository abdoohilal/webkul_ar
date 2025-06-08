<?php

return [
    'title' => 'فاتورة',

    'navigation' => [
        'title' => 'الفواتير',
        'group' => 'الفواتير',
    ],

    'global-search' => [
        'number'           => 'الرقم',
        'customer'         => 'العميل',
        'invoice-date'     => 'تاريخ الفاتورة',
        'invoice-due-date' => 'تاريخ استحقاق الفاتورة',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'عام',
                'fields' => [
                    'customer-invoice' => 'مذكرة ائتمان العميل',
                    'customer'         => 'العميل',
                    'invoice-date'     => 'تاريخ الفاتورة',
                    'due-date'         => 'تاريخ الاستحقاق',
                    'payment-term'     => 'مدة الدفع',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'بنود الفاتورة',

                'repeater' => [
                    'products' => [
                        'title'       => 'المنتجات',
                        'add-product' => 'إضافة منتج',

                        'fields' => [
                            'product'             => 'المنتج',
                            'quantity'            => 'الكمية',
                            'unit'                => 'الوحدة',
                            'taxes'               => 'الضرائب',
                            'discount-percentage' => 'نسبة الخصم',
                            'unit-price'          => 'سعر الوحدة',
                            'sub-total'           => 'المجموع الفرعي',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'معلومات أخرى',
                'fieldset' => [
                    'invoice' => [
                        'title'  => 'الفاتورة',
                        'fields' => [
                            'customer-reference' => 'مرجع العميل',
                            'sales-person'       => 'مندوب المبيعات',
                            'payment-reference'  => 'مرجع الدفع',
                            'recipient-bank'     => 'بنك المستلم',
                            'delivery-date'      => 'تاريخ التسليم',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'المحاسبة',

                        'fields' => [
                            'incoterm'          => 'شروط التجارة الدولية',
                            'incoterm-location' => 'موقع شروط التجارة الدولية',
                            'payment-method'    => 'طريقة الدفع',
                            'auto-post'         => 'النشر التلقائي',
                            'checked'           => 'تم التحقق',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => 'معلومات إضافية',
                        'fields' => [
                            'company'  => 'الشركة',
                            'currency' => 'العملة',
                        ],
                    ],

                    'marketing' => [
                        'title'  => 'التسويق',
                        'fields' => [
                            'campaign' => 'الحملة',
                            'medium'   => 'الوسيلة',
                            'source'   => 'المصدر',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'الأحكام والشروط',
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'عام',
                'entries' => [
                    'customer-invoice' => 'مذكرة ائتمان العميل',
                    'customer'         => 'العميل',
                    'invoice-date'     => 'تاريخ الفاتورة',
                    'due-date'         => 'تاريخ الاستحقاق',
                    'payment-term'     => 'مدة الدفع',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'بنود الفاتورة',

                'repeater' => [
                    'products' => [
                        'entries' => [
                            'product'             => 'المنتج',
                            'quantity'            => 'الكمية',
                            'unit'                => 'وحدة القياس',
                            'taxes'               => 'الضرائب',
                            'discount-percentage' => 'نسبة الخصم',
                            'unit-price'          => 'سعر الوحدة',
                            'sub-total'           => 'المجموع الفرعي',
                            'total'               => 'الإجمالي',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'معلومات أخرى',
                'fieldset' => [
                    'invoice' => [
                        'title'   => 'الفاتورة',
                        'entries' => [
                            'customer-reference' => 'مرجع العميل',
                            'sales-person'       => 'مندوب المبيعات',
                            'payment-reference'  => 'مرجع الدفع',
                            'recipient-bank'     => 'بنك المستلم',
                            'delivery-date'      => 'تاريخ التسليم',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'المحاسبة',

                        'fieldset' => [
                            'incoterm'          => 'شروط التجارة الدولية',
                            'incoterm-location' => 'موقع شروط التجارة الدولية',
                            'payment-method'    => 'طريقة الدفع',
                            'auto-post'         => 'النشر التلقائي',
                            'checked'           => 'تم التحقق',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => 'معلومات إضافية',
                        'entries' => [
                            'company'  => 'الشركة',
                            'currency' => 'العملة',
                        ],
                    ],

                    'marketing' => [
                        'title'   => 'التسويق',
                        'entries' => [
                            'campaign' => 'الحملة',
                            'medium'   => 'الوسيلة',
                            'source'   => 'المصدر',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'الأحكام والشروط',
            ],
        ],
    ],
];
