<?php

return [
    'tabs' => [
        'all'       => 'الكل',
        'pending'   => 'قيد الانتظار',
        'completed' => 'مكتمل',
        'failed'    => 'فشل',
        'refunded'  => 'مسترد',
    ],

    'header-actions' => [
        'create' => [
            'label' => 'دفعة جديدة',
            'notification' => [
                'title' => 'تم إنشاء الدفعة',
                'body'  => 'تم إنشاء الدفعة بنجاح.',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'payment_method'    => 'طريقة الدفع',
            'amount'           => 'المبلغ',
            'currency'         => 'العملة',
            'status'           => 'الحالة',
            'transaction_id'   => 'رقم المعاملة',
            'created_at'       => 'تاريخ الإنشاء',
            'updated_at'       => 'تاريخ التحديث',
        ],
    ],
]; 