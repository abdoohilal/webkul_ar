<?php

return [
    'title' => 'الإدخال/الإخراج',

    'tabs' => [
        'todo'     => 'المهام',
        'done'     => 'تمت',
        'incoming' => 'وارد',
        'outgoing' => 'صادر',
        'internal' => 'داخلي',
    ],

    'table' => [
        'columns' => [
            'date'                 => 'التاريخ',
            'reference'            => 'المرجع',
            'product'              => 'المنتج',
            'package'              => 'الطرد',
            'lot'                  => 'رقم الدفعة / التسلسلي',
            'source-location'      => 'الموقع المصدر',
            'destination-location' => 'موقع الوجهة',
            'quantity'             => 'الكمية',
            'state'                => 'الحالة',
            'done-by'              => 'تم بواسطة',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الحركة',
                    'body'  => 'تم حذف الحركة بنجاح.',
                ],
            ],
        ],
    ],
];
