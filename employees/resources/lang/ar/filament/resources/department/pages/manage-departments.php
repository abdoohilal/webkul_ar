<?php

return [
    'title' => 'إدارة الأقسام',
    
    'form' => [
        'fields' => [
            'name'          => 'الاسم',
            'code'          => 'الرمز',
            'description'   => 'الوصف',
            'parent_id'     => 'القسم الرئيسي',
            'manager_id'    => 'مدير القسم',
            'is_active'     => 'نشط',
        ],
    ],

    'table' => [
        'description' => 'إدارة أقسام الشركة في النظام.',
        'header-actions' => [
            'create' => [
                'label' => 'إضافة قسم',
                'notification' => [
                    'title' => 'تم إنشاء القسم',
                    'body'  => 'تم إنشاء القسم بنجاح.',
                ],
            ],
        ],
        'columns' => [
            'name'          => 'الاسم',
            'code'          => 'الرمز',
            'description'   => 'الوصف',
            'parent'        => 'القسم الرئيسي',
            'manager'       => 'مدير القسم',
            'employees_count' => 'عدد الموظفين',
            'is_active'     => 'نشط',
            'created_at'    => 'تاريخ الإنشاء',
            'updated_at'    => 'تاريخ التحديث',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث القسم',
                    'body'  => 'تم تحديث القسم بنجاح.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف القسم',
                    'body'  => 'تم حذف القسم بنجاح.',
                ],
            ],
        ],
    ],
]; 