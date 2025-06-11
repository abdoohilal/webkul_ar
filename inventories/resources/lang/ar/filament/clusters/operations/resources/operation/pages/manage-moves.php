<?php

return [
    'title' => 'الحركات',

    'table' => [
        'columns' => [
            'date'                 => 'التاريخ',
            'reference'            => 'المرجع',
            'product'              => 'المنتج',
            'package'              => 'الحزمة',
            'lot'                  => 'رقم الدفعة / التسلسل',
            'source-location'      => 'موقع المصدر',
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
