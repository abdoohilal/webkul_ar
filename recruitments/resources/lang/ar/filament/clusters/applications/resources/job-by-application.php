<?php

return [
    'title' => 'الوظيفة',

    'navigation' => [
        'group' => 'الطلبات',
        'title' => 'الوظائف',
    ],

    'table' => [
        'columns' => [
            'name'         => 'الاسم',
            'manager-name' => 'المدير',
            'company-name' => 'الشركة',
        ],

        'actions' => [
            'applications' => [
                'new-applications' => ':count طلب جديد',
            ],

            'to-recruitment' => [
                'to-recruitment' => ':count للتوظيف',
            ],

            'total-application' => [
                'total-application' => ':count طلب',
            ],
        ],
    ],
]; 