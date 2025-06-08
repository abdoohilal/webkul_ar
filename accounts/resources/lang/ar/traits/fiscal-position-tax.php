<?php

return [
    'form' => [
        'fields' => [
            'tax-source'      => 'مصدر الضريبة',
            'tax-destination' => 'وجهة الضريبة',
        ],
    ],

    'table' => [
        'columns' => [
            'tax-source'      => 'مصدر الضريبة',
            'tax-destination' => 'وجهة الضريبة',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث مدة استحقاق الدفع',
                    'body'  => 'تم تحديث مدة استحقاق الدفع بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف مدة استحقاق الدفع',
                    'body'  => 'تم حذف مدة استحقاق الدفع بنجاح.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'تم إنشاء مدة استحقاق الدفع',
                    'body'  => 'تم إنشاء مدة استحقاق الدفع بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'tax-source'      => 'مصدر الضريبة',
            'tax-destination' => 'وجهة الضريبة',
        ],
    ],
];
