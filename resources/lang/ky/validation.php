<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Последующие языковые строки содержат сообщения по-умолчанию, используемые
    | классом, проверяющим значения (валидатором).Некоторые из правил имеют
    | несколько версий, например, size. Вы можете поменять их на любые
    | другие, которые лучше подходят для вашего приложения.
    |
    */

    "accepted"             => ":attribute кабыл алышыңыз милдеттүү",
    "active_url"           => ":attribute URL адреc эмес",
    "after"                => ":attribute талаасы бул күндөн :date кийин болуш керек",
    'after_or_equal'       => ':attribute талаасы бул күндөн :date кийин же ошол күнү болуш керек',
    "alpha"                => ":attribute талаасына тамга гана жазылышы мүмкүн",
    "alpha_dash"           => ":attribute талаасына тамга, сан жана тире жазылышы мүмкүн",
    "alpha_num"            => ":attribute талаасына тамга жана сан жазылышы мүмкүн",
    "array"                => ":attribute талаасы массив болушу милдеттүү",
    "before"               => ":attribute талаасына бул күндөн :date алдын дата жазылыш керек",
    'before_or_equal'      => ':attribute талаасы бул күндөн :date алдын же ошол күн болуш керек',
    "between"              => [
        "numeric" => ":attribute талаасы :min жана :max ортосунда болушу милдеттүү",
        "file"    => ":attribute талаасында файлдын көлөмү :min жана :max Килобайттын ортосунда болушу милдеттүү",
        "string"  => ":attribute талаасында белгилердин саны :min жана :max ортосунда болуш керек",
        "array"   => ":attribute талаасында белгилердин саны :min жана :max ортосунда болуш керек"
    ],
    "boolean"              => ":attribute талаасы туура же туура эмес болуш керек",
    "confirmed"            => ":attribute талаасы ырастоого туура келбейт",
    "date"                 => ":attribute талаасы дата эмес",
    "date_format"          => ":attribute талаасы :format форматка туура келбейт",
    "different"            => ":attribute талаасы жана :other талаасы бир биринен айырмаланыш керек",
    "digits"               => ":attribute талаасынын узундугу :digits сан болуш керек",
    "digits_between"       => ":attribute талаасынын узундугу :min жана :max ортосунда болуш керек",
    "email"                => ":attribute талаасы электрондук дарек болуш керек",
    "exists"               => "Тандалган нарк :attribute талаасына туура келбейт",
    "filled"               => ":attribute талаасыны толтуруу милдеттүү",
    "image"                => ":attribute талаасы сүрөт болуш керек",
    "in"                   => "Тандалган нарк :attribute талаасы үчүн туура эмес",
    "integer"              => ":attribute талаасы бүтүн сан болуш керек",
    "ip"                   => ":attribute талаасы IP-адрес болуш керек",
    'ipv4'                 => ':attribute талаасы IPv4 адрес болуш керек',
    'ipv6'                 => ':attribute талаасы IPv6 адрес болуш керек',

    "max"                  => [
        "numeric" => ":attribute талаасы :max чоң болушу мүмкүн эмес",
        "file"    => ":attribute талаасында файлдын көлөмү :max Кб чоң болушу мүмкүн эмес",
        "string"  => ":attribute талаасында белгилердин саны :max чоң болушу мүмкүн эмес",
        "array"   => ":attribute талаасында элементтердин саны :max чоң болушу мүмкүн эмес"
    ],
    "mimes"                => ":attribute талаасы :values файл түрү болушу милдеттүү",
    'mimetypes'            => ':attribute талаасы :values файл түрү болушу милдеттүү',
    "min"                  => [
        "numeric" => ":attribute талаасы :min кем болбош керек",
        "string"  => ":attribute талаасы :min кем болбош керек",
        "file"    => ":attribute талаасында файлдын көлөмү :min Килобайттан кем болбош керек",
        "string"  => ":attribute талаасында белгилердин саны :min кем болбош керек",
        "array"   => ":attribute талаасында элементтердин саны :min кем болбош керек"
    ],
    "not_in"               => "Тандалган нарк :attribute туура эмес",
    "numeric"              => ":attribute талаасы сан болуш керек",
    "regex"                => ":attribute талаасында туура эмес формат",
    "required"             => ":attribute талаасыны толтуруу милдеттүү",
    "required_if"          => ":other :value толтурулса, :attribute талаасыны толтуруу милдеттүү",
    "required_with"        => ":values толтурулса, :attribute талаасыны толтуруу милдеттүү",
    "required_with_all"    => ":values толтурулса, :attribute талаасыны толтуруу милдеттүү",
    "required_without"     => ":values көрсөтүлбөсө, :attribute талаасыны толтуруу милдеттүү",
    "required_without_all" => "Бир да :values көрсөтүлбөсө, :attribute талаасыны толтуруу милдеттүү",
    "same"                 => ":attribute жана :other бир бирине туура келиш керек",
    "size"                 => [
        "numeric" => ":attribute көлөмү :size болуш керек",
        "file"    => ":attribute файлдын көлөмү :size Килобайт болуш керек",
        "string"  => ":attribute талаасында белгилердин саны :size болуш керек",
        "array"   => ":attribute талаасында элементтердин саны :size болуш керек"
    ],
    "timezone"             => ":attribute талаасы саат алкагы болуш керек",
    'uploaded'             => ':attribute жүктөлгөн жок',
    "unique"               => "Мындай :attribute бар",
    "url"                  => ":attribute URL болуш керек",
    "not_array"             => ":attribute талаасында бир топ нарктар болуш керек",
    /*
    |--------------------------------------------------------------------------
    | Собственные языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Здесь Вы можете указать собственные сообщения для атрибутов.
    | Это позволяет легко указать свое сообщение для заданного правила атрибута.
    |
    | http://laravel.com/docs/validation#custom-error-messages
    | Пример использования
    |
    |   'custom' => [
    |       'email' => [
    |           'required' => 'Нам необходимо знать Ваш электронный адрес!',
    |       ],
    |   ],
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Атайые билдирүү',
        ],
        'capabilities' => [
            'required' => 'Укуктардан бирөөнү болсо да тандаңыз',
        ],
        'folder_import' => [
            'required_if' => 'Импорттоо үчүн папканы көрсөтүңүз',
        ],
        'remote_import' => [
            'required_if' => 'Вы Импорттоо үчүн веб-баракчанын URL көрсөтүңүз',
        ],
        'users' => [
            'required' => 'Колдонуучулардан бирөөнү болсо да тандаңыз',
        ],
        'document' => [
            'required' => 'Документтин көлөмү максималдуу өлчөмдөн ашып кетти'.\Config::get('dms.max_upload_size').'KB',
            'required_alt' => 'Документтин көлөмү максималдуу өлчөмдөн :size :unit ашып кетти',
        ],
        'slug' => [
            // used when the microsite slug fails to validate
            'regex' => 'Веб-баракчанын адреси кичине тамга жана сызуулардан туруш керек. Сандарды жана «create» деген сөздү койгон болбойт.',
        ],

        'logo' => [
            'url' => 'Логотип сүрөттүн URL-шилтемеси болуш керек',
            'regex' => 'Логотип сүрөттүн URL-шилтемеси болуш керек',
        ],
        'hero_image' => [
            'url' => 'Логотип сүрөттүн URL-шилтемеси болуш керек',
            'regex' => 'Логотип сүрөттүн URL-шилтемеси болуш керек',
        ],
        
         'with_users' => [
            'required' => 'Колдонуучулардан бирөөнү болсо да тандаңыз',
        ],
        'copyright_owner_website' => [
            'required_without' => 'Автордук укуктардын ээсинин байланыш маалыматын жазыңыз, веб-сайт же электрондук почтаны'
        ],
        'copyright_owner_name' => [
            'required' => 'Автордук укуктардын ээсинин байланыш маалыматын жазыңыз'
        ]

        
    ],
    

    /*
    |--------------------------------------------------------------------------
    | Собственные названия атрибутов
    |--------------------------------------------------------------------------
    |
    | Последующие строки используются для подмены программных имен элементов
    | пользовательского интерфейса на удобочитаемые. Например, вместо имени
    | поля "email" в сообщениях будет выводиться "электронный адрес".
    |
    | Пример использования
    |
    |   'attributes' => [
    |       'email' => 'электронный адрес',
    |   )
    |
    */

    'attributes' => [],

];