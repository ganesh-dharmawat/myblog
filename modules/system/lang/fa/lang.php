<?php

return [
    'app' => [
        'name'  => 'مدیریت محتوی اکتبر',
        'tagline' => 'بازگشت به گذشته',
    ],
    'locale' => [
        'en'    => 'انگلیسی',
        'nl'    => 'هلندی',
        'ja'    => 'ژاپنی',
        'se'    => 'سوئدی',
        'tr'    => 'ترکی',
        'de'    => 'آلمانی',
        'ru'    => 'روسی',
        'fr'    => 'فرانسوی',
        'it'    => 'ایتالیایی',
        'ro'    => 'رومانیایی',
        'pt-br' => 'پرتغالی برزیل',
        'fa'    => 'فارسی',
        'nb-no' => 'نروژی (Bokmål)'
    ],
    'directory' => [
        'create_fail' => "مشکلی در ایجاد پوشه ی :name به وجود آمده است",
    ],
    'file' => [
        'create_fail' => "مشکلی در ایجاد فایل :name به وجود آمده است",
    ],
    'combiner' => [
        'not_found' => "فایل ترکیب کننده ':name' یافت نشد.",
    ],
    'system' => [
        'name'       => 'سیستم',
        'menu_label' => 'سیستم',
        'categories' => [
            'cms'         => 'مدیریت محتوی',
            'misc'        => 'متفرقه',
            'logs'        => 'وقایع',
            'mail'        => 'پست الکترونیکی',
            'shop'        => 'فروشگاه',
            'team'        => 'تیم',
            'users'       => 'کاربران',
            'system'      => 'سیستم',
            'social'      => 'شبکه اجتماعی',
            'events'      => 'رویداد ها',
            'customers'   => 'مشتریان',
            'my_settings' => 'تنظیمات من',
        ],
    ],
    'plugin' => [
        'unnamed' => 'افزونه بدون نام',
        'name'    => [
            'label' => 'نام افزونه',
            'help'  => 'افزونه را با نام یکتایی نام گذاری کنید. برای مثال: RainLab.Blog',
        ],
    ],
    'plugins' => [
        'manage'                  => 'مدیریت افزونه ها',
        'enable_or_disable'       => 'فعال یا غیر فعال کردن',
        'enable_or_disable_title' => 'فعال یا غیر فعال کردن افزونه ها',
        'remove'                  => 'خذف',
        'refresh'                 => 'تازه کردن',
        'disabled_label'          => 'غیر فعال',
        'disabled_help'           => 'افزونه های غیر فعال توسط برنامه نادیده گرفته می شوند.',
        'selected_amount'         => 'افزونه های انتخاب شده: :amount',
        'remove_confirm'          => 'آیا اطمینان دارید؟',
        'remove_success'          => "افزونه های با موفقیت از سیستم حذف شدند.",
        'refresh_confirm'         => 'آیا اطمینان دارید؟',
        'refresh_success'         => "افزونه ها با موفقیت بارگذاری مجدد شدند.",
        'disable_confirm'         => 'آیا اطمینان دارید؟',
        'disable_success'         => "افزونه ها با موفقیت غیر فعال شدند.",
        'enable_success'          => "افرونه ها با موفقیت فعال شدند.",
        'unknown_plugin'          => "افرونه ها با موفقیت پاک شدند.",
    ],
    'project' => [
        'name'        => 'پروژه',
        'owner_label' => 'صاحب امتیاز',
        'attach'      => 'افرودن به پروژه',
        'detach'      => 'حذف از پروژه',
        'none'        => 'هیچ',
        'id'          => [
            'label'   => 'مشخصه ی پروژه',
            'help'    => 'مشخصه ی پروژه ی خود را چگونه بیابید',
            'missing' => 'لطفا مشخصه ی پروژهی خود را وارد نمایید.',
        ],
        'detach_confirm' => 'آیا از حذف این پروژه اطمینان دارید؟',
        'unbind_success' => 'پروژه با موفقیت پاک شد.',
    ],
    'settings' => [
        'menu_label'     => 'تنظیمات',
        'not_found' => 'تنظیمات مورد نظر یافت نشد.',
        'missing_model'  => 'صفحه تنظیمات شامل یک مدل تعریف نشده می باشد.',
        'update_success' => 'تنظیمات برای :name با موفقیت تغییر یافتند.',
        'return'         => 'بازگشت به تنظیمات سیستم',
        'search'         => 'جستجو'
    ],
    'mail' => [
        'menu_label'                 => 'تنظیمات پست الکترونیکی',
        'menu_description'           => 'مدیریت تنظیمات پست الکترونیکی.',
        'general'                    => 'عمومی',
        'method'                     => 'روش ارسال',
        'sender_name'                => 'نام ارسال کننده',
        'sender_email'               => 'پست الکترونیکی ارسال کننده',
        'smtp'                       => 'SMTP',
        'smtp_address'               => 'آدرس SMTP',
        'smtp_authorization'         => 'مجوز اتصال به SMTP مورد نیاز است',
        'smtp_authorization_comment' => 'این گزیتع را جهت اتصال به سرور SMTP در صورت نیاز فعال نمایید.',
        'smtp_username'              => 'نام کاربری',
        'smtp_password'              => 'کلمه عبور',
        'smtp_port'                  => 'درگاه SMTP',
        'smtp_ssl'                   => 'اتصال امن SSL مورد نیاز است',
        'sendmail'                   => 'Sendmail',
        'sendmail_path'              => 'محل Sendmail',
        'sendmail_path_comment'      => 'لطفا محل ذخیره نرم افزار sendmail را مشخص نمایید.',
        'mailgun_domain' => 'دامنه ی Mailgun',
        'mailgun_domain_comment' => 'لطفا نام دامنه ی Mailgun را وارد نمایید.',
        'mailgun_secret' => 'امنیت mailgun',
        'mailgun_secret_comment' => 'کلید API ی مربوط به Mailgun را وارد نمایید.',
    ],
    'mail_templates' => [
        'menu_label'         => 'قالب های نامه الکترونیکی',
        'menu_description'   => 'مدیریت و تغییر قالب های نامه الکترونیکی که برای کاربران و مدیران ارسال می شود، مدیریت طرح بندی نامه الکترونیکی.',
        'new_template'       => 'قالب جدید',
        'new_layout'         => 'طرح بندی ی جدید',
        'template'           => 'قالب',
        'templates'          => 'قالب ها',
        'menu_layouts_label' => 'طرح بندی نامه الکترونیکی',
        'layout'             => 'طرح بندی',
        'layouts'            => 'طرح بندی ها',
        'name'               => 'نام',
        'name_comment'       => 'نام یکتای مشخص کننده ی این قالی',
        'code'               => 'کد',
        'code_comment'       => 'کد یکتای مشخص کننده ی این قالب',
        'subject'            => 'موضوع',
        'subject_comment'    => 'موجوع نامه الکترونیکی',
        'description'        => 'توضیحات',
        'content_html'       => 'اچ تی ام ال',
        'content_css'        => 'شیوه نامه',
        'content_text'       => 'متن معمولی',
        'test_send'          => 'ارسال پیغام آزمایشی',
        'test_success'       => 'پیغان آزمایشی ارسال شد.',
        'return'             => 'بازگشت به لیست قالب ها'
    ],
    'install' => [
        'project_label'       => 'ضمیمه کردن به نرم افزار',
        'plugin_label'        => 'نصب افزونه',
        'missing_plugin_name' => 'لطفان نام افزونه را جهت نصب وارد نمایید.',
        'install_completing'  => 'مرحله ی پایانی عملیات نصب',
        'install_success'     => 'افزونه با موفقیت نصب شد.',
    ],
    'updates' => [
        'title'               => 'مدیریت بروز رسانی',
        'name'                => 'بروز رسانی نرم افزار',
        'menu_label'          => 'بروز رسانی ها',
        'menu_description'    => 'به روز رسانی ی سیستم، مدیریت افزونه ها و قالب های نصب شده.',
        'check_label'         => 'بررسی بروز رسانی',
        'retry_label'         => 'تلاش مجدد',
        'plugin_name'         => 'نام',
        'plugin_description'  => 'توضیحات',
        'plugin_version'      => 'نسخه',
        'plugin_author'       => 'تولید کننده',
        'core_build'          => 'نسخه ی کنونی',
        'core_build_old'      => 'نسخه ی کنونی :build',
        'core_build_new'      => 'نسخه ی :build',
        'core_build_new_help' => 'آخرین نسخه موجود است.',
        'core_downloading'    => 'دریافت فایل های نرم افزار',
        'core_extracting'     => 'گشودن فایل های نرم افزار',
        'plugin_downloading'  => 'دریافت افزونه: :name',
        'plugin_extracting'   => 'گشودن افزونه: :name',
        'plugin_version_none' => 'افزونه ی جدید',
        'plugin_version_old'  => 'نسخه کنونی:version',
        'plugin_version_new'  => 'مسخه:version',
        'theme_label'         => 'قالب',
        'theme_new_install'   => 'قالب جدید نصب شد.',
        'theme_downloading'   => 'دریافت قالب: :name',
        'theme_extracting'    => 'گشودن قالب: :name',
        'update_label'        => 'بروز رسانی نرم افزار',
        'update_completing'   => 'اعمال بروز رسانی',
        'update_loading'      => 'بارگزاری بروز رسانی های موجود...',
        'update_success'      => 'بروز رسانی با موفقیت انجام شد..',
        'update_failed_label' => 'بروز رسانی موفق نبود',
        'force_label'         => 'اصرار در بروز رسانی',
        'found'               => [
            'label' => 'بروز رسانی جدیدی یافت شده است!',
            'help'  => 'بر روی بروز رسانی نرم افزار جهت شروع عملیات بروز رسانی کلیک کنید.',
        ],
        'none' => [
            'label' => '0 به روز رسانی',
            'help'  => 'هیچ به روز رسانی یافت نشد.',
        ],
    ],
    'server' => [
        'connect_error'      => 'خطا در برقراری ارتباط با سرور.',
        'response_not_found' => 'سرور به روز رسانی یافت نشد.',
        'response_invalid'   => 'پاسخ نا معتبر از سوی سرور.',
        'response_empty'     => 'پاسخ خالی از سوی سرور.',
        'file_error'         => 'خطا در ارسال یا دریافت بسته به سرور.',
        'file_corrupt'       => 'فایل دریافت شده از سرور ناقص است.',
    ],
    'behavior' => [
        'missing_property' => 'کلاس :class باید شامل خصوصیت $:property که در :behavior استفاده شده است باشد.',
    ],
    'config' => [
        'not_found' => 'فایل پیکربندی  :file تعریف شده در :location یافت نشد.',
        'required'  => "پیکربندی استفاده شده در :location باید مقدار ':property' را ارائه نماید.",
    ],
    'zip' => [
        'extract_failed' => "عدم توانایی در گسودن فایل هسته ':file'.",
    ],
    'event_log' => [
        'hint'             => 'این گزارش نمایش دهنده خطاهای عملکردی در سیستم می باشد، مانند خطاهای در حال اجرا و اطلاغات خطایابی.',
        'menu_label'       => 'گزارش رویدادها',
        'menu_description' => 'نمایش گزارش های سیستمی همراه با زمان و توضیح آنها.',
        'empty_link'       => 'پاک  سازی گزارش رویداد ها',
        'empty_loading'    => 'درحال پاکسازی گزارشها...',
        'empty_success'    => 'گزارشها با موفقیت پاک شدند.',
        'return_link'      => 'بازگشت به گزارش رویداد ها',
        'id'               => 'مشخصه',
        'id_label'         => 'مشخصه ی رویداد',
        'created_at'       => 'ساعت و تاریخ',
        'message'          => 'پیغام',
        'level'            => 'مرحله',
    ],
    'request_log' => [
        'hint'             => 'این گزارش درخواستهایی از طرف مرورگر را که نیاز به بررسی دارند را نمایش می دهد. به عنوان مثال اکر بازدید کنند صفحه ای را که موجود نیست درخواست کند، یک گزینه با کد وضعیت 404 ایجاد می شود.',
        'menu_label'       => 'گزارش درخواست ها',
        'menu_description' => 'نمایش درخواستهای مشکل ساز و انتقال داده شده مانند خطای : صفحه مورد نظر یافت نشد 404.',
        'empty_link'       => 'پاک کردن گزارش دخواستها',
        'empty_loading'    => 'در حال پاکسازی...',
        'empty_success'    => 'گزارش درخواستها با موفقیت پاکسازی شد.',
        'return_link'      => 'بازگشت به گزارش درخواستها',
        'id'               => 'مشخصه',
        'id_label'         => 'مشخصه ی گزارش',
        'count'            => 'شمارشگر',
        'referer'          => 'معرف ها',
        'url'              => 'آردس',
        'status_code'      => 'وضعیت',
    ],
    'permissions' => [
        'manage_system_settings'      => 'مدیریت تنظیمات سیستم',
        'manage_software_updates'     => 'مدیریت به روز رسانی نرم افزار',
        'manage_mail_templates'       => 'مدیریت قالب پست الکترونیکی',
        'manage_other_administrators' => 'مدیریت سایر مدیران',
        'view_the_dashboard'          => 'نمایش صفحه مدیریت'
    ]
];