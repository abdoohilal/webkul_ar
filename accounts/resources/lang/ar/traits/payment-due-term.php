<?php

return [
    'form' => [
        'value'                  => 'القيمة',
        'due'                    => 'تاريخ الاستحقاق',
        'delay-due'              => 'تأخير الاستحقاق',
        'delay-type'             => 'نوع التأخير',
        'days-on-the-next-month' => 'أيام في الشهر التالي',
        'days'                   => 'أيام',
        'payment-term'           => 'مدة الدفع',
    ],

    'table' => [
        'columns' => [
            'due'          => 'تاريخ الاستحقاق',
            'value'        => 'القيمة',
            'value-amount' => 'مقدار القيمة',
            'after'        => 'بعد',
            'delay-type'   => 'نوع التأخير',
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
];
