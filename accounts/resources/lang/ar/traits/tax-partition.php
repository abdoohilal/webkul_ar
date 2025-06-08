<?php

return [
    'form' => [
        'factor-percent'    => 'نسبة العامل',
        'factor-ratio'      => 'نسبة العامل',
        'repartition-type'  => 'نوع التوزيع',
        'document-type'     => 'نوع المستند',
        'account'           => 'الحساب',
        'tax'               => 'الضريبة',
        'tax-closing-entry' => 'قيد إغلاق الضريبة',
    ],

    'table' => [
        'columns' => [
            'factor-percent'    => 'نسبة العامل (%)',
            'account'           => 'الحساب',
            'tax'               => 'الضريبة',
            'company'           => 'الشركة',
            'repartition-type'  => 'نوع التوزيع',
            'document-type'     => 'نوع المستند',
            'tax-closing-entry' => 'قيد إغلاق الضريبة',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث تقسيم الضريبة',
                    'body'  => 'تم تحديث تقسيم الضريبة بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف مدة تقسيم الضريبة',
                    'body'  => 'تم حذف مدة تقسيم الضريبة بنجاح.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'تم إنشاء مدة تقسيم الضريبة',
                    'body'  => 'تم إنشاء مدة تقسيم الضريبة بنجاح.',
                ],
            ],
        ],
    ],
];
