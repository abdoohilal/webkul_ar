<?php

return [
    'title' => 'الوظائف',

    'navigation' => [
        'title' => 'الوظائف',
        'group' => 'التوظيف',
    ],

    'form' => [
        'sections' => [
            'employment-information' => [
                'title' => 'معلومات التوظيف',

                'fields' => [
                    'job-position-title'         => 'عنوان الوظيفة',
                    'job-position-title-tooltip' => 'أدخل العنوان الرسمي للوظيفة',
                    'department'                 => 'القسم',
                    'department-modal-title'     => 'إنشاء قسم',
                    'company-modal-title'        => 'إنشاء شركة',
                    'job-location'               => 'مكان العمل',
                    'industry'                   => 'الصناعة',
                    'company'                    => 'الشركة',
                    'employment-type'            => 'نوع التوظيف',
                    'recruiter'                  => 'المسؤول عن التوظيف',
                    'interviewer'                => 'المقابِل',
                ],
            ],

            'job-description' => [
                'title' => 'وصف الوظيفة',

                'fields' => [
                    'job-description'  => 'وصف الوظيفة',
                    'job-requirements' => 'متطلبات الوظيفة',
                ],
            ],

            'workforce-planning' => [
                'title' => 'تخطيط القوى العاملة',

                'fields' => [
                    'recruitment-target'         => 'هدف التوظيف',
                    'date-from'                  => 'التاريخ من',
                    'date-to'                    => 'التاريخ إلى',
                    'expected-skills'            => 'المهارات المتوقعة',
                    'employment-type'            => 'نوع التوظيف',
                    'status'                     => 'الحالة',
                ],
            ],

            'position-status' => [
                'title' => 'حالة الوظيفة',

                'fields' => [
                    'status' => 'الحالة',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                 => 'المعرف',
            'name'               => 'الوظيفة',
            'department'         => 'القسم',
            'job-position'       => 'الوظيفة',
            'company'            => 'الشركة',
            'expected-employees' => 'الموظفون المتوقعون',
            'current-employees'  => 'الموظفون الحاليون',
            'status'             => 'الحالة',
            'created-by'         => 'أنشئ بواسطة',
            'created-at'         => 'تاريخ الإنشاء',
            'updated-at'         => 'تاريخ التحديث',
        ],

        'filters' => [
            'department'      => 'القسم',
            'employment-type' => 'نوع التوظيف',
            'job-position'    => 'الوظيفة',
            'company'         => 'الشركة',
            'status'          => 'الحالة',
            'created-by'      => 'أنشئ بواسطة',
            'updated-at'      => 'تاريخ التحديث',
            'created-at'      => 'تاريخ الإنشاء',
        ],

        'groups' => [
            'job-position'    => 'الوظيفة',
            'company'         => 'الشركة',
            'department'      => 'القسم',
            'employment-type' => 'نوع التوظيف',
            'created-by'      => 'أنشئ بواسطة',
            'created-at'      => 'تاريخ الإنشاء',
            'updated-at'      => 'تاريخ التحديث',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الوظيفة',
                    'body'  => 'تم استعادة الوظيفة بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الوظيفة',
                    'body'  => 'تم حذف الوظيفة بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الوظائف',
                    'body'  => 'تم استعادة الوظائف بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الوظائف',
                    'body'  => 'تم حذف الوظائف بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم حذف الوظائف نهائيًا',
                    'body'  => 'تم حذف الوظائف نهائيًا بنجاح.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'الوظائف',
                    'body'  => 'تم إنشاء الوظائف بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'employment-information' => [
                'title' => 'معلومات التوظيف',

                'entries' => [
                    'job-position-title' => 'عنوان الوظيفة',
                    'department'         => 'القسم',
                    'company'            => 'الشركة',
                    'employment-type'    => 'نوع التوظيف',
                    'job-location'       => 'مكان العمل',
                    'industry'           => 'الصناعة',
                ],
            ],
            'job-description' => [
                'title' => 'وصف الوظيفة',

                'entries' => [
                    'job-description'  => 'وصف الوظيفة',
                    'job-requirements' => 'متطلبات الوظيفة',
                ],
            ],
            'work-planning' => [
                'title' => 'تخطيط القوى العاملة',

                'entries' => [
                    'expected-employees' => 'الموظفون المتوقعون',
                    'current-employees'  => 'الموظفون الحاليون',
                    'date-from'          => 'التاريخ من',
                    'date-to'            => 'التاريخ إلى',
                    'recruitment-target' => 'هدف التوظيف',
                ],
            ],
            'position-status' => [
                'title' => 'حالة الوظيفة',

                'entries' => [
                    'status' => 'الحالة',
                ],
            ],
        ],
    ],
];
