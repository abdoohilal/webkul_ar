<?php

return [
    'title' => 'الخصائص',
    'form' => [
        'attribute' => 'خاصية',
        'values'    => 'القيم',
    ],
    'table' => [
        'description' => 'تحذير: إضافة أو حذف الخصائص سيؤدي إلى حذف وإعادة إنشاء الأنواع الحالية وقد يؤدي إلى فقدان التخصيصات الممكنة.',
        'header-actions' => [
            'create' => [
                'label' => 'إضافة خاصية',
                'notification' => [
                    'title' => 'تم إنشاء الخاصية',
                    'body'  => 'تم إنشاء الخاصية بنجاح.',
                ],
            ],
        ],
        'columns' => [
            'attribute' => 'خاصية',
            'values'    => 'القيم',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث الخاصية',
                    'body'  => 'تم تحديث الخاصية بنجاح.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الخاصية',
                    'body'  => 'تم حذف الخاصية بنجاح.',
                ],
            ],
        ],
    ],
]; 