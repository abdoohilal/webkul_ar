<?php

return [
    'title' => 'إدارة المستودعات',

    'form' => [
        'enable-locations'                       => 'المواقع',
        'enable-locations-helper-text'           => 'تتبع موقع المنتج داخل المستودع',
        'configure-locations'                    => 'تكوين المواقع',
        'enable-multi-steps-routes'              => 'مسارات متعددة الخطوات',
        'enable-multi-steps-routes-helper-text' => 'استخدم مسارات خاصة بك لإدارة نقل المنتجات بين المستودعات',
        'configure-routes'                       => 'تكوين مسارات المستودعات',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'لديك عدة مستودعات',
                'body'  => 'لا يمكنك تعطيل التتبع متعدد المواقع إذا كان لديك أكثر من مستودع واحد.',
            ],
        ],
    ],
];
