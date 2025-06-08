<?php

return [
    'table' => [
        'columns' => [
            'partner-name'       => 'اسم الشريك',
            'applied-on'         => 'تاريخ التقديم',
            'job-position'       => 'الوظيفة',
            'stage'              => 'المرحلة',
            'candidate-name'     => 'اسم المرشح',
            'evaluation'         => 'التقييم',
            'application-status' => 'حالة الطلب',
            'tags'               => 'الوسوم',
            'refuse-reason'      => 'سبب الرفض',
            'email'              => 'البريد الإلكتروني',
            'recruiter'          => 'مسؤول التوظيف',
            'interviewer'        => 'المقابل',
            'candidate-phone'    => 'الهاتف',
            'medium'             => 'الوسيط',
            'source'             => 'المصدر',
            'salary-expected'    => 'الراتب المتوقع',
            'availability-date'  => 'تاريخ التوفر',
        ],

        'filters' => [
            'source'                  => 'المصدر',
            'medium'                  => 'الوسيط',
            'candidate'               => 'المرشح',
            'priority'                => 'الأولوية',
            'salary-proposed-extra'   => 'بدل إضافي مقترح',
            'salary-expected-extra'   => 'بدل إضافي متوقع',
            'applicant-notes'         => 'ملاحظات المتقدم',
            'create-date'             => 'تاريخ التقديم',
            'date-closed'             => 'تاريخ التعيين',
            'date-last-stage-updated' => 'تاريخ آخر تحديث للمرحلة',
            'stage'                   => 'المرحلة',
            'job-position'            => 'الوظيفة',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف المتقدم',
                    'body'  => 'تم حذف المتقدم بنجاح.',
                ],
            ],
        ],

        'groups' => [
            'stage'          => 'المرحلة',
            'job-position'   => 'الوظيفة',
            'candidate-name' => 'اسم المرشح',
            'responsible'    => 'المسؤول',
            'creation-date'  => 'تاريخ الإنشاء',
            'hired-date'     => 'تاريخ التعيين',
            'last-stage'     => 'آخر مرحلة',
            'refuse-reason'  => 'سبب الرفض',
        ],
    ],

    'infolist' => [
        'sections' => [
            'education-and-availability' => [
                'title' => 'التعليم والتوفر',

                'entries' => [
                    'degree'            => 'الدرجة العلمية',
                    'availability-date' => 'تاريخ التوفر',
                ],
            ],

            'department' => [
                'title' => 'القسم',
            ],

            'salary' => [
                'title' => 'الراتب المتوقع والمقترح',

                'entries' => [
                    'expected-salary'       => 'الراتب المتوقع',
                    'salary-proposed-extra' => 'بدل إضافي',
                    'proposed-salary'       => 'الراتب المقترح',
                    'salary-expected-extra' => 'بدل إضافي',
                ],
            ],

            'source-and-medium' => [
                'title' => 'المصدر والوسيط',

                'entries' => [
                    'source' => 'المصدر',
                    'medium' => 'الوسيط',
                ],
            ],
        ],
    ],
]; 