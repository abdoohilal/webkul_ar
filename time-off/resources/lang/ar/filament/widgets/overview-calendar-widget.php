<?php 

return [
    'modal-actions' => [
        'edit' => [
            'title' => 'تعديل',
        ],
        'delete' => [
            'title' => 'حذف',
        ],
    ],

    'view-action' => [
        'title'       => 'عرض',
        'description' => 'عرض طلب الإجازة',
    ],

    'header-actions' => [
        'create' => [
            'title'       => 'إجازة جديدة',
            'description' => 'إنشاء طلب إجازة',
            'employee-not-found' => [
                'notification' => [
                    'title' => 'الموظف غير موجود',
                    'body'  => 'الرجاء إضافة موظف إلى ملفك الشخصي قبل إنشاء طلب إجازة.',
                ],
            ],
        ],
    ],

    'form' => [
        'fields' => [
            'time-off-type'     => 'نوع الإجازة',
            'request-date-from' => 'تاريخ بداية الطلب',
            'request-date-to'   => 'تاريخ نهاية الطلب',
            'period'            => 'المدة الزمنية',
            'half-day'          => 'نصف يوم',
            'requested-days'    => 'المطلوب (أيام/ساعات)',
            'description'       => 'الوصف',
        ],
    ],
    
    'infolist' => [
        'entries' => [
            'time-off-type'           => 'نوع الإجازة',
            'request-date-from'       => 'تاريخ بداية الطلب',
            'request-date-to'         => 'تاريخ نهاية الطلب',
            'description'             => 'الوصف',
            'description-placeholder' => 'لا يوجد وصف',
            'duration'                => 'المدة',
            'status'                  => 'الحالة',
        ],
    ],
];