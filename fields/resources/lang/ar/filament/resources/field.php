<?php

return [
    'navigation' => [
        'title' => 'الحقول المخصصة',
        'group' => 'الإعدادات',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'name'              => 'الاسم',
                    'code'              => 'الكود',
                    'code-helper-text'  => 'يجب أن يبدأ الكود بحرف أو شرطة سفلية، ويمكن أن يحتوي فقط على حروف وأرقام وشرطات سفلية.',
                ],
            ],

            'options' => [
                'title' => 'الخيارات',

                'fields' => [
                    'add-option' => 'إضافة خيار',
                ],
            ],

            'form-settings' => [
                'title' => 'إعدادات النموذج',

                'field-sets' => [
                    'validations' => [
                        'title' => 'التحققات',

                        'fields' => [
                            'validation'     => 'التحقق',
                            'field'          => 'الحقل',
                            'value'          => 'القيمة',
                            'add-validation' => 'إضافة تحقق',
                        ],
                    ],

                    'additional-settings' => [
                        'title' => 'إعدادات إضافية',

                        'fields' => [
                            'setting'     => 'الإعداد',
                            'value'       => 'القيمة',
                            'color'       => 'اللون',
                            'add-setting' => 'إضافة إعداد',

                            'color-options' => [
                                'danger'    => 'خطر',
                                'info'      => 'معلومات',
                                'primary'   => 'أساسي',
                                'secondary' => 'ثانوي',
                                'warning'   => 'تحذير',
                                'success'   => 'نجح',
                            ],

                            'grid-options' => [
                                'row'    => 'صف',
                                'column' => 'عمود',
                            ],

                            'input-modes' => [
                                'text'     => 'نص',
                                'email'    => 'بريد إلكتروني',
                                'numeric'  => 'رقمي',
                                'integer'  => 'عدد صحيح',
                                'password' => 'كلمة مرور',
                                'tel'      => 'هاتف',
                                'url'      => 'رابط',
                                'color'    => 'لون',
                                'none'     => 'لا شيء',
                                'decimal'  => 'عشري',
                                'search'   => 'بحث',
                            ],
                        ],
                    ],
                ],

                'validations' => [
                    'common' => [
                        'gt'                   => 'أكبر من',
                        'gte'                  => 'أكبر من أو يساوي',
                        'lt'                   => 'أقل من',
                        'lte'                  => 'أقل من أو يساوي',
                        'max-size'             => 'الحد الأقصى للحجم',
                        'min-size'             => 'الحد الأدنى للحجم',
                        'multiple-of'          => 'مضاعف من',
                        'nullable'             => 'يقبل القيم الفارغة',
                        'prohibited'           => 'محظور',
                        'prohibited-if'        => 'محظور إذا',
                        'prohibited-unless'    => 'محظور إلا إذا',
                        'prohibits'            => 'يحظر',
                        'required'             => 'مطلوب',
                        'required-if'          => 'مطلوب إذا',
                        'required-if-accepted' => 'مطلوب إذا تم القبول',
                        'required-unless'      => 'مطلوب إلا إذا',
                        'required-with'        => 'مطلوب مع',
                        'required-with-all'    => 'مطلوب مع جميع',
                        'required-without'     => 'مطلوب بدون',
                        'required-without-all' => 'مطلوب بدون جميع',
                        'rules'                => 'قواعد مخصصة',
                        'unique'               => 'فريد',
                    ],

                    'text' => [
                        'alpha-dash'        => 'حروف وشرطات',
                        'alpha-num'         => 'حروف وأرقام',
                        'ascii'             => 'أسكي',
                        'doesnt-end-with'   => 'لا ينتهي بـ',
                        'doesnt-start-with' => 'لا يبدأ بـ',
                        'ends-with'         => 'ينتهي بـ',
                        'filled'            => 'مملوء',
                        'ip'                => 'عنوان IP',
                        'ipv4'              => 'IPv4',
                        'ipv6'              => 'IPv6',
                        'length'            => 'الطول',
                        'mac-address'       => 'عنوان MAC',
                        'max-length'        => 'الحد الأقصى للطول',
                        'min-length'        => 'الحد الأدنى للطول',
                        'regex'             => 'تعبير نمطي',
                        'starts-with'       => 'يبدأ بـ',
                        'ulid'              => 'ULID',
                        'uuid'              => 'UUID',
                    ],

                    'textarea' => [
                        'filled'     => 'مملوء',
                        'max-length' => 'الحد الأقصى للطول',
                        'min-length' => 'الحد الأدنى للطول',
                    ],

                    'select' => [
                        'different'  => 'مختلف',
                        'exists'     => 'موجود',
                        'in'         => 'ضمن',
                        'not-in'     => 'ليس ضمن',
                        'same'       => 'نفس',
                    ],

                    'radio' => [],

                    'checkbox' => [
                        'accepted' => 'مقبول',
                        'declined' => 'مرفوض',
                    ],

                    'toggle' => [
                        'accepted' => 'مقبول',
                        'declined' => 'مرفوض',
                    ],

                    'checkbox-list' => [
                        'in'        => 'ضمن',
                        'max-items' => 'الحد الأقصى للعناصر',
                        'min-items' => 'الحد الأدنى للعناصر',
                    ],

                    'datetime' => [
                        'after'           => 'بعد',
                        'after-or-equal'  => 'بعد أو يساوي',
                        'before'          => 'قبل',
                        'before-or-equal' => 'قبل أو يساوي',
                    ],

                    'editor' => [
                        'filled'     => 'مملوء',
                        'max-length' => 'الحد الأقصى للطول',
                        'min-length' => 'الحد الأدنى للطول',
                    ],

                    'markdown' => [
                        'filled'     => 'مملوء',
                        'max-length' => 'الحد الأقصى للطول',
                        'min-length' => 'الحد الأدنى للطول',
                    ],

                    'color' => [
                        'hex-color' => 'لون سادس عشري',
                    ],
                ],

                'settings' => [
                    'text' => [
                        'autocapitalize'    => 'استخدام الأحرف الكبيرة تلقائياً',
                        'autocomplete'      => 'الإكمال التلقائي',
                        'autofocus'         => 'التركيز التلقائي',
                        'default'           => 'القيمة الافتراضية',
                        'disabled'          => 'معطل',
                        'helper-text'       => 'النص المساعد',
                        'hint'              => 'تلميح',
                        'hint-color'        => 'لون التلميح',
                        'hint-icon'         => 'أيقونة التلميح',
                        'id'                => 'المعرف',
                        'input-mode'        => 'نمط الإدخال',
                        'mask'              => 'القناع',
                        'placeholder'       => 'النص التوضيحي',
                        'prefix'            => 'البادئة',
                        'prefix-icon'       => 'أيقونة البادئة',
                        'prefix-icon-color' => 'لون أيقونة البادئة',
                        'read-only'         => 'للقراءة فقط',
                        'step'              => 'الخطوة',
                        'suffix'            => 'اللاحقة',
                        'suffix-icon'       => 'أيقونة اللاحقة',
                        'suffix-icon-color' => 'لون أيقونة اللاحقة',
                    ],

                    'textarea' => [
                        'autofocus'    => 'التركيز التلقائي',
                        'autosize'     => 'الحجم التلقائي',
                        'cols'         => 'الأعمدة',
                        'default'      => 'القيمة الافتراضية',
                        'disabled'     => 'معطل',
                        'helperText'   => 'النص المساعد',
                        'hint'         => 'تلميح',
                        'hintColor'    => 'لون التلميح',
                        'hintIcon'     => 'أيقونة التلميح',
                        'id'           => 'المعرف',
                        'placeholder'  => 'النص التوضيحي',
                        'read-only'    => 'للقراءة فقط',
                        'rows'         => 'الصفوف',
                    ],

                    'select' => [
                        'default'                   => 'القيمة الافتراضية',
                        'disabled'                  => 'معطل',
                        'helper-text'               => 'النص المساعد',
                        'hint'                      => 'تلميح',
                        'hint-color'                => 'لون التلميح',
                        'hint-icon'                 => 'أيقونة التلميح',
                        'id'                        => 'المعرف',
                        'loading-message'           => 'رسالة التحميل',
                        'no-search-results-message' => 'رسالة عدم وجود نتائج بحث',
                        'options-limit'             => 'حد الخيارات',
                        'preload'                   => 'التحميل المسبق',
                        'searchable'                => 'قابل للبحث',
                        'search-debounce'           => 'تأخير البحث',
                        'searching-message'         => 'رسالة البحث',
                        'search-prompt'             => 'مطالبة البحث',
                    ],

                    'radio' => [
                        'default'     => 'القيمة الافتراضية',
                        'disabled'    => 'معطل',
                        'helper-text' => 'النص المساعد',
                        'hint'        => 'تلميح',
                        'hint-color'  => 'لون التلميح',
                        'hint-icon'   => 'أيقونة التلميح',
                        'id'          => 'المعرف',
                    ],

                    'checkbox' => [
                        'default'     => 'القيمة الافتراضية',
                        'disabled'    => 'معطل',
                        'helper-text' => 'النص المساعد',
                        'hint'        => 'تلميح',
                        'hint-color'  => 'لون التلميح',
                        'hint-icon'   => 'أيقونة التلميح',
                        'id'          => 'المعرف',
                        'inline'      => 'في نفس السطر',
                    ],

                    'toggle' => [
                        'default'     => 'القيمة الافتراضية',
                        'disabled'    => 'معطل',
                        'helper-text' => 'النص المساعد',
                        'hint'        => 'تلميح',
                        'hint-color'  => 'لون التلميح',
                        'hint-icon'   => 'أيقونة التلميح',
                        'id'          => 'المعرف',
                        'off-color'   => 'لون الإيقاف',
                        'off-icon'    => 'أيقونة الإيقاف',
                        'on-color'    => 'لون التشغيل',
                        'on-icon'     => 'أيقونة التشغيل',
                    ],

                    'checkbox-list' => [
                        'bulk-toggleable'           => 'قابل للتبديل الجماعي',
                        'columns'                   => 'الأعمدة',
                        'default'                   => 'القيمة الافتراضية',
                        'disabled'                  => 'معطل',
                        'grid-direction'            => 'اتجاه الشبكة',
                        'helper-text'               => 'النص المساعد',
                        'hint'                      => 'تلميح',
                        'hint-color'                => 'لون التلميح',
                        'hint-icon'                 => 'أيقونة التلميح',
                        'id'                        => 'المعرف',
                        'max-items'                 => 'الحد الأقصى للعناصر',
                        'min-items'                 => 'الحد الأدنى للعناصر',
                        'no-search-results-message' => 'رسالة عدم وجود نتائج بحث',
                        'searchable'                => 'قابل للبحث',
                    ],

                    'datetime' => [
                        'close-on-date-selection' => 'إغلاق عند اختيار التاريخ',
                        'default'                 => 'القيمة الافتراضية',
                        'disabled'                => 'معطل',
                        'disabled-dates'          => 'التواريخ المعطلة',
                        'display-format'          => 'تنسيق العرض',
                        'first-fay-of-week'       => 'أول يوم في الأسبوع',
                        'format'                  => 'التنسيق',
                        'helper-text'             => 'النص المساعد',
                        'hint'                    => 'تلميح',
                        'hint-color'              => 'لون التلميح',
                        'hint-icon'               => 'أيقونة التلميح',
                        'hours-step'              => 'خطوة الساعات',
                        'id'                      => 'المعرف',
                        'locale'                  => 'المنطقة',
                        'minutes-step'            => 'خطوة الدقائق',
                        'seconds'                 => 'الثواني',
                        'seconds-step'            => 'خطوة الثواني',
                        'timezone'                => 'المنطقة الزمنية',
                        'week-starts-on-monday'   => 'الأسبوع يبدأ يوم الاثنين',
                        'week-starts-on-sunday'   => 'الأسبوع يبدأ يوم الأحد',
                    ],

                    'editor' => [
                        'default'      => 'القيمة الافتراضية',
                        'disabled'     => 'معطل',
                        'helper-text'  => 'النص المساعد',
                        'hint'         => 'تلميح',
                        'hint-color'   => 'لون التلميح',
                        'hint-icon'    => 'أيقونة التلميح',
                        'id'           => 'المعرف',
                        'placeholder'  => 'النص التوضيحي',
                        'read-only'    => 'للقراءة فقط',
                    ],

                    'markdown' => [
                        'default'      => 'القيمة الافتراضية',
                        'disabled'     => 'معطل',
                        'helper-text'  => 'النص المساعد',
                        'hint'         => 'تلميح',
                        'hint-color'   => 'لون التلميح',
                        'hint-icon'    => 'أيقونة التلميح',
                        'id'           => 'المعرف',
                        'placeholder'  => 'النص التوضيحي',
                        'read-only'    => 'للقراءة فقط',
                    ],

                    'color' => [
                        'default'     => 'القيمة الافتراضية',
                        'disabled'    => 'معطل',
                        'helper-text' => 'النص المساعد',
                        'hint'        => 'تلميح',
                        'hint-color'  => 'لون التلميح',
                        'hint-icon'   => 'أيقونة التلميح',
                        'hsl'         => 'HSL',
                        'id'          => 'المعرف',
                        'rgb'         => 'RGB',
                        'rgba'        => 'RGBA',
                    ],

                    'file' => [
                        'accepted-file-types'                   => 'أنواع الملفات المقبولة',
                        'append-files'                          => 'إلحاق الملفات',
                        'deletable'                             => 'قابل للحذف',
                        'directory'                             => 'المجلد',
                        'downloadable'                          => 'قابل للتحميل',
                        'fetch-file-information'                => 'جلب معلومات الملف',
                        'file-attachments-directory'            => 'مجلد مرفقات الملفات',
                        'file-attachments-visibility'           => 'رؤية مرفقات الملفات',
                        'image'                                 => 'صورة',
                        'image-crop-aspect-ratio'               => 'نسبة قطع الصورة',
                        'image-editor'                          => 'محرر الصور',
                        'image-editor-aspect-ratios'            => 'نسب أبعاد محرر الصور',
                        'image-editor-empty-fill-color'         => 'لون تعبئة محرر الصور الفارغ',
                        'image-editor-mode'                     => 'نمط محرر الصور',
                        'image-preview-height'                  => 'ارتفاع معاينة الصورة',
                        'image-resize-mode'                     => 'نمط تغيير حجم الصورة',
                        'image-resize-target-height'            => 'الارتفاع المستهدف لتغيير حجم الصورة',
                        'image-resize-target-width'             => 'العرض المستهدف لتغيير حجم الصورة',
                        'loading-indicator-position'            => 'موضع مؤشر التحميل',
                        'move-files'                            => 'نقل الملفات',
                        'openable'                              => 'قابل للفتح',
                        'orient-images-from-exif'               => 'توجيه الصور من EXIF',
                        'panel-aspect-ratio'                    => 'نسبة أبعاد اللوحة',
                        'panel-layout'                          => 'تخطيط اللوحة',
                        'previewable'                           => 'قابل للمعاينة',
                        'remove-uploaded-file-button-position'  => 'موضع زر إزالة الملف المرفوع',
                        'reorderable'                           => 'قابل لإعادة الترتيب',
                        'store-files'                           => 'تخزين الملفات',
                        'upload-button-position'                => 'موضع زر الرفع',
                        'uploading-message'                     => 'رسالة الرفع',
                        'upload-progress-indicator-position'    => 'موضع مؤشر تقدم الرفع',
                        'visibility'                            => 'الرؤية',
                    ],
                ],
            ],

            'table-settings' => [
                'title' => 'إعدادات الجدول',

                'fields' => [
                    'use-in-table'  => 'استخدام في الجدول',
                    'setting'       => 'الإعداد',
                    'value'         => 'القيمة',
                    'color'         => 'اللون',
                    'alignment'     => 'المحاذاة',
                    'font-weight'   => 'وزن الخط',
                    'icon-position' => 'موضع الأيقونة',
                    'size'          => 'الحجم',
                    'add-setting'   => 'إضافة إعداد',

                    'color-options' => [
                        'danger'    => 'خطر',
                        'info'      => 'معلومات',
                        'primary'   => 'أساسي',
                        'secondary' => 'ثانوي',
                        'warning'   => 'تحذير',
                        'success'   => 'نجح',
                    ],

                    'alignment-options' => [
                        'start'   => 'البداية',
                        'left'    => 'يسار',
                        'center'  => 'وسط',
                        'end'     => 'النهاية',
                        'right'   => 'يمين',
                        'justify' => 'ضبط',
                        'between' => 'بين',
                    ],

                    'font-weight-options' => [
                        'extra-light' => 'خفيف جداً',
                        'light'       => 'خفيف',
                        'normal'      => 'عادي',
                        'medium'      => 'متوسط',
                        'semi-bold'   => 'شبه عريض',
                        'bold'        => 'عريض',
                        'extra-bold'  => 'عريض جداً',
                    ],

                    'icon-position-options' => [
                        'before'  => 'قبل',
                        'after'   => 'بعد',
                    ],

                    'size-options' => [
                        'extra-small' => 'صغير جداً',
                        'small'       => 'صغير',
                        'medium'      => 'متوسط',
                        'large'       => 'كبير',
                    ],
                ],

                'settings' => [
                    'common' => [
                        'align-end'              => 'محاذاة النهاية',
                        'alignment'              => 'المحاذاة',
                        'align-start'            => 'محاذاة البداية',
                        'badge'                  => 'شارة',
                        'boolean'                => 'منطقي',
                        'color'                  => 'اللون',
                        'copyable'               => 'قابل للنسخ',
                        'copy-message'           => 'رسالة النسخ',
                        'copy-message-duration'  => 'مدة رسالة النسخ',
                        'default'                => 'افتراضي',
                        'filterable'             => 'قابل للتصفية',
                        'groupable'              => 'قابل للتجميع',
                        'grow'                   => 'نمو',
                        'icon'                   => 'أيقونة',
                        'icon-color'             => 'لون الأيقونة',
                        'icon-position'          => 'موضع الأيقونة',
                        'label'                  => 'التسمية',
                        'limit'                  => 'حد',
                        'line-clamp'             => 'قيد السطر',
                        'money'                  => 'مال',
                        'placeholder'            => 'النص التوضيحي',
                        'prefix'                 => 'بادئة',
                        'searchable'             => 'قابل للبحث',
                        'size'                   => 'الحجم',
                        'sortable'               => 'قابل للترتيب',
                        'suffix'                 => 'لاحقة',
                        'toggleable'             => 'قابل للتبديل',
                        'tooltip'                => 'تلميح',
                        'vertical-alignment'     => 'المحاذاة الرأسية',
                        'vertically-align-start' => 'محاذاة رأسية للبداية',
                        'weight'                 => 'الوزن',
                        'width'                  => 'العرض',
                        'words'                  => 'كلمات',
                        'wrap-header'            => 'التفاف الرأس',
                        'column-span'            => 'امتداد العمود',
                        'helper-text'            => 'النص المساعد',
                        'hint'                   => 'تلميح',
                        'hint-color'             => 'لون التلميح',
                        'hint-icon'              => 'أيقونة التلميح',
                    ],

                    'datetime' => [
                        'date'              => 'تاريخ',
                        'date-time'         => 'تاريخ ووقت',
                        'date-time-tooltip' => 'تلميح التاريخ والوقت',
                        'since'             => 'منذ',
                    ],
                ],
            ],

            'infolist-settings' => [
                'title' => 'إعدادات قائمة المعلومات',

                'fields' => [
                    'setting'       => 'الإعداد',
                    'value'         => 'القيمة',
                    'color'         => 'اللون',
                    'font-weight'   => 'وزن الخط',
                    'icon-position' => 'موضع الأيقونة',
                    'size'          => 'الحجم',
                    'add-setting'   => 'إضافة إعداد',

                    'color-options' => [
                        'danger'    => 'خطر',
                        'info'      => 'معلومات',
                        'primary'   => 'أساسي',
                        'secondary' => 'ثانوي',
                        'warning'   => 'تحذير',
                        'success'   => 'نجح',
                    ],

                    'font-weight-options' => [
                        'extra-light' => 'خفيف جداً',
                        'light'       => 'خفيف',
                        'normal'      => 'عادي',
                        'medium'      => 'متوسط',
                        'semi-bold'   => 'شبه عريض',
                        'bold'        => 'عريض',
                        'extra-bold'  => 'عريض جداً',
                    ],

                    'icon-position-options' => [
                        'before'  => 'قبل',
                        'after'   => 'بعد',
                    ],

                    'size-options' => [
                        'extra-small' => 'صغير جداً',
                        'small'       => 'صغير',
                        'medium'      => 'متوسط',
                        'large'       => 'كبير',
                    ],
                ],
'settings' => [
                    'common' => [
                        'align-end'              => 'محاذاة النهاية',
                        'alignment'              => 'المحاذاة',
                        'align-start'            => 'محاذاة البداية',
                        'badge'                  => 'شارة',
                        'boolean'                => 'منطقي',
                        'color'                  => 'اللون',
                        'copyable'               => 'قابل للنسخ',
                        'copy-message'           => 'رسالة النسخ',
                        'copy-message-duration'  => 'مدة رسالة النسخ',
                        'default'                => 'افتراضي',
                        'filterable'             => 'قابل للتصفية',
                        'groupable'              => 'قابل للتجميع',
                        'grow'                   => 'نمو',
                        'icon'                   => 'أيقونة',
                        'icon-color'             => 'لون الأيقونة',
                        'icon-position'          => 'موضع الأيقونة',
                        'label'                  => 'التسمية',
                        'limit'                  => 'الحد الأقصى',
                        'line-clamp'             => 'مشبك الخط',
                        'money'                  => 'مال',
                        'placeholder'            => 'نص وهمي',
                        'prefix'                 => 'بادئة',
                        'searchable'             => 'قابل للبحث',
                        'size'                   => 'الحجم',
                        'sortable'               => 'قابل للترتيب',
                        'suffix'                 => 'لاحقة',
                        'toggleable'             => 'قابل للتبديل',
                        'tooltip'                => 'تلميح',
                        'vertical-alignment'     => 'المحاذاة العمودية',
                        'vertically-align-start' => 'محاذاة عمودية للبداية',
                        'weight'                 => 'الوزن',
                        'width'                  => 'العرض',
                        'words'                  => 'كلمات',
                        'wrap-header'            => 'التفاف الرأس',
                        'column-span'            => 'امتداد العمود',
                        'helper-text'            => 'نص مساعد',
                        'hint'                   => 'تلميح',
                        'hint-color'             => 'لون التلميح',
                        'hint-icon'              => 'أيقونة التلميح',
                    ],

                    'datetime' => [
                        'date'              => 'التاريخ',
                        'date-time'         => 'التاريخ والوقت',
                        'date-time-tooltip' => 'تلميح التاريخ والوقت',
                        'since'             => 'منذ',
                    ],

                    'checkbox-list' => [
                        'separator'                => 'فاصل',
                        'list-with-line-breaks'    => 'قائمة مع فواصل أسطر',
                        'bulleted'                 => 'نقطي',
                        'limit-list'               => 'قائمة محدودة',
                        'expandable-limited-list'  => 'قائمة محدودة قابلة للتوسيع',
                    ],

                    'select' => [
                        'separator'                => 'فاصل',
                        'list-with-line-breaks'    => 'قائمة مع فواصل أسطر',
                        'bulleted'                 => 'نقطي',
                        'limit-list'               => 'قائمة محدودة',
                        'expandable-limited-list'  => 'قائمة محدودة قابلة للتوسيع',
                    ],

                    'checkbox' => [
                        'boolean'     => 'منطقي',
                        'false-icon'  => 'أيقونة خطأ',
                        'true-icon'   => 'أيقونة صحيح',
                        'true-color'  => 'لون صحيح',
                        'false-color' => 'لون خطأ',
                    ],

                    'toggle' => [
                        'boolean'     => 'منطقي',
                        'false-icon'  => 'أيقونة خطأ',
                        'true-icon'   => 'أيقونة صحيح',
                        'true-color'  => 'لون صحيح',
                        'false-color' => 'لون خطأ',
                    ],
                ],
            ],

            'settings' => [
                'title' => 'الإعدادات',

                'fields' => [
                    'type'           => 'النوع',
                    'input-type'     => 'نوع الإدخال',
                    'is-multiselect' => 'متعدد الاختيار',
                    'sort-order'     => 'ترتيب الفرز',

                    'type-options' => [
                        'text'          => 'حقل نص',
                        'textarea'      => 'منطقة نص',
                        'select'        => 'اختيار',
                        'checkbox'      => 'مربع اختيار',
                        'radio'         => 'زر راديو',
                        'toggle'        => 'مفتاح تبديل',
                        'checkbox-list' => 'قائمة مربعات اختيار',
                        'datetime'      => 'منتقي التاريخ والوقت',
                        'editor'        => 'محرر نص منسق',
                        'markdown'      => 'محرر ماركداون',
                        'color'         => 'منتقي الألوان',
                    ],

                    'input-type-options' => [
                        'text'     => 'نص',
                        'email'    => 'بريد إلكتروني',
                        'numeric'  => 'رقمي',
                        'integer'  => 'عدد صحيح',
                        'password' => 'كلمة مرور',
                        'tel'      => 'هاتف',
                        'url'      => 'رابط',
                        'color'    => 'لون',
                    ],
                ],
            ],

            'resource' => [
                'title' => 'المورد',

                'fields' => [
                    'resource' => 'المورد',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'       => 'الكود',
            'name'       => 'الاسم',
            'type'       => 'النوع',
            'resource'   => 'المورد',
            'created-at' => 'تاريخ الإنشاء',
        ],

        'groups' => [
        ],

        'filters' => [
            'type'     => 'النوع',
            'resource' => 'المورد',

            'type-options' => [
                'text'          => 'حقل نص',
                'textarea'      => 'منطقة نص',
                'select'        => 'اختيار',
                'checkbox'      => 'مربع اختيار',
                'radio'         => 'زر راديو',
                'toggle'        => 'مفتاح تبديل',
                'checkbox-list' => 'قائمة مربعات اختيار',
                'datetime'      => 'منتقي التاريخ والوقت',
                'editor'        => 'محرر نص منسق',
                'markdown'      => 'محرر ماركداون',
                'color'         => 'منتقي الألوان',
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الحقل',
                    'body'  => 'تم استعادة الحقل بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الحقل',
                    'body'  => 'تم حذف الحقل بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم حذف الحقل نهائياً',
                    'body'  => 'تم حذف الحقل نهائياً بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الحقول',
                    'body'  => 'تم استعادة الحقول بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الحقول',
                    'body'  => 'تم حذف الحقول بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم حذف الحقول نهائياً',
                    'body'  => 'تم حذف الحقول نهائياً بنجاح.',
                ],
            ],
        ],
    ],
];

                