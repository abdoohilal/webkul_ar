<?php

return [
    'notification' => [
        'title' => 'تم تحديث سند الاستلام',
        'body'  => 'تم تحديث سند الاستلام بنجاح.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'طباعة',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'تم حذف سند الاستلام',
                    'body'  => 'تم حذف سند الاستلام بنجاح.',
                ],

                'error' => [
                    'title' => 'تعذر حذف سند الاستلام',
                    'body'  => 'لا يمكن حذف سند الاستلام لأنه قيد الاستخدام حالياً.',
                ],
            ],
        ],
    ],
];
