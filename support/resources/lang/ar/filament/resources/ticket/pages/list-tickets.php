<?php

return [
    'tabs' => [
        'all'       => 'الكل',
        'open'      => 'مفتوح',
        'pending'   => 'قيد الانتظار',
        'resolved'  => 'تم الحل',
        'closed'    => 'مغلق',
    ],

    'header-actions' => [
        'create' => [
            'label' => 'تذكرة جديدة',
            'notification' => [
                'title' => 'تم إنشاء التذكرة',
                'body'  => 'تم إنشاء التذكرة بنجاح.',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'ticket_number'  => 'رقم التذكرة',
            'subject'       => 'الموضوع',
            'status'        => 'الحالة',
            'priority'      => 'الأولوية',
            'department'    => 'القسم',
            'assigned_to'   => 'تعيين إلى',
            'created_at'    => 'تاريخ الإنشاء',
            'updated_at'    => 'تاريخ التحديث',
        ],
    ],
]; 