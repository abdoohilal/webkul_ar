<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'طباعة',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'تم حذف شحنة Dropship',
                    'body'  => 'تم حذف شحنة Dropship بنجاح.',
                ],

                'error' => [
                    'title' => 'تعذر حذف شحنة Dropship',
                    'body'  => 'لا يمكن حذف شحنة Dropship لأنها قيد الاستخدام حالياً.',
                ],
            ],
        ],
    ],
];
