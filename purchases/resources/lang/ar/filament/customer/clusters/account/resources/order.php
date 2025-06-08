<?php

return [
    'table' => [
        'columns' => [
            'reference'         => 'المرجع',
            'total-amount'      => 'المبلغ الإجمالي',
            'confirmation-date' => 'تاريخ التأكيد',
            'status'            => 'الحالة',
        ],
    ],

    'infolist' => [
        'settings' => [
            'entries' => [
                'buyer' => 'المشتري',
            ],

            'actions' => [
                'accept' => [
                    'label' => 'قبول',

                    'notification' => [
                        'title' => 'تم قبول عرض السعر',
                        'body'  => 'تم تأكيد طلب عرض السعر بنجاح.',
                    ],

                    'message' => [
                        'body' => 'تم تأكيد طلب عرض السعر من قبل المورد.',
                    ],
                ],

                'decline' => [
                    'label' => 'رفض',

                    'notification' => [
                        'title' => 'تم رفض عرض السعر',
                        'body'  => 'تم رفض طلب عرض السعر بنجاح.',
                    ],

                    'message' => [
                        'body' => 'تم رفض طلب عرض السعر من قبل المورد.',
                    ],
                ],

                'print' => [
                    'label' => 'تحميل/طباعة',
                ],
            ],
        ],

        'general' => [
            'entries' => [
                'purchase-order'        => 'أمر الشراء رقم :id',
                'quotation'             => 'طلب عرض السعر رقم :id',
                'order-date'            => 'تاريخ الطلب',
                'from'                  => 'من',
                'confirmation-date'     => 'تاريخ التأكيد',
                'receipt-date'          => 'تاريخ الاستلام',
                'products'              => 'المنتجات',
                'untaxed-amount'        => 'المبلغ قبل الضريبة',
                'tax-amount'            => 'مبلغ الضريبة',
                'total'                 => 'الإجمالي',
                'communication-history' => 'سجل المراسلات',
            ],
        ],
    ],
]; 