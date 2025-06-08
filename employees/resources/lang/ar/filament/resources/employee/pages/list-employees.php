<?php

return [
    'tabs' => [
        'all'           => 'الكل',
        'active'        => 'نشط',
        'inactive'      => 'غير نشط',
        'on_leave'      => 'في إجازة',
        'terminated'    => 'منتهي',
    ],

    'header-actions' => [
        'create' => [
            'label' => 'موظف جديد',
            'notification' => [
                'title' => 'تم إنشاء الموظف',
                'body'  => 'تم إنشاء الموظف بنجاح.',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'employee_id'    => 'رقم الموظف',
            'name'          => 'الاسم',
            'department'    => 'القسم',
            'position'      => 'المنصب',
            'email'         => 'البريد الإلكتروني',
            'phone'         => 'رقم الهاتف',
            'status'        => 'الحالة',
            'join_date'     => 'تاريخ التعيين',
            'created_at'    => 'تاريخ الإنشاء',
            'updated_at'    => 'تاريخ التحديث',
        ],
    ],
]; 