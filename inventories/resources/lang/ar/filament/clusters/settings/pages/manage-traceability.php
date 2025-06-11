<?php

return [
    'title' => 'إدارة التتبع',

    'form' => [
        'enable-lots-serial-numbers'                              => 'الأرقام الدُفعات والأرقام التسلسلية',
        'enable-lots-serial-numbers-helper-text'                  => 'احصل على تتبع كامل من البائعين إلى العملاء',
        'configure-lots'                                          => 'تكوين الدُفعات',
        'enable-expiration-dates'                                 => 'تواريخ الانتهاء',
        'enable-expiration-dates-helper-text'                     => 'تعيين تواريخ الانتهاء على الدُفعات والأرقام التسلسلية',
        'display-on-delivery-slips'                               => 'عرض في سندات التسليم',
        'display-on-delivery-slips-helper-text'                   => 'ستظهر الدُفعات والأرقام التسلسلية في سندات التسليم',
        'display-expiration-dates-on-delivery-slips'              => 'عرض تواريخ الانتهاء في سندات التسليم',
        'display-expiration-dates-on-delivery-slips-helper-text'  => 'سيتم عرض تواريخ الانتهاء في سند التسليم',
        'enable-consignments'                                     => 'الشحنات',
        'enable-consignments-helper-text'                         => 'تعيين المالك على المنتجات المخزنة',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'لديك منتجات في المخزون يتم تتبعها باستخدام أرقام الدُفعات/التسلسلية.',
                'body'  => 'يرجى إيقاف التتبع على جميع المنتجات أولاً قبل إيقاف هذا الإعداد.',
            ],
        ],
    ],
];
