<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Атрибут :attribute должен быть принят.',
    'active_url' => ':attribute не является допустимым URL-адресом..',
    'after' => 'attribute должен быть датой после :date.',
    'after_or_equal' => 'attribute должен быть датой, следующей за :date или равной ей.',
    'alpha' => 'attribute должен содержать только буквы.',
    'alpha_dash' => 'attribute должен содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => 'attribute должен содержать только буквы и цифры.',
    'array' => 'attribute должен быть массивом.',
    'before' => 'attribute должен быть датой перед :date.',
    'before_or_equal' => ':attribute должен быть датой, предшествующей :date или равной ей..',
    'between' => [
        'numeric' => 'attribute должен находиться в диапазоне от :min до :max..',
        'file' => 'The attribute must be between :min and :max kilobytes.',
        'string' => 'attribute должен находиться между символами :min и :max.',
        'array' => 'attribute должен содержать элементы от :min до :max..',
    ],
    'boolean' => 'Поле :attribute должно иметь значение true или false.',
    'confirmed' => 'Подтверждение :attribute не соответствует.',
    'current_password' => 'Неправильный пароль.',
    'date' => 'attribute не является допустимой датой..',
    'date_equals' => 'attribute должен быть датой, равной :date..',
    'date_format' => 'attribute не соответствует формату :format.',
    'different' => 'attribute и :other должны быть разными..',
    'digits' => 'attribute должен быть :digits цифры.',
    'digits_between' => 'attribute должен находиться между цифрами :min и :max..',
    'dimensions' => 'attribute имеет недопустимые размеры изображения..',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => 'attribute должен быть действительным адресом электронной почты.',
    'ends_with' => 'attribute должен заканчиваться одним из следующих значений: :values.',
    'exists' => 'Выбранный :attribute недействителен.',
    'file' => 'attribute должен быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => 'attribute должен быть больше :ценить.',
        'file' => 'attribute должен быть больше :value в килобайтах.',
        'string' => 'attribute должен содержать больше символов :value.',
        'array' => 'attribute должен содержать более :value элементов..',
    ],
    'gte' => [
        'numeric' => 'attribute должен быть больше или равен :value..',
        'file' => ':attribute должен быть больше или равен :value в килобайтах.',
        'string' => 'attribute должен быть больше или равен :value символов..',
        'array' => ':attribute должен содержать элементы :value или более.',
    ],
    'image' => 'attribute должен быть изображением.',
    'in' => 'Выбранный :attribute недействителен..',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'attribute должен быть целым числом.',
    'ip' => 'attribute должен быть действительным IP-адресом..',
    'ipv4' => 'attribute должен быть действительным адресом IPv4..',
    'ipv6' => 'attribute должен быть действительным IPv6-адресом.',
    'json' => 'attribute должен быть допустимой строкой JSON..',
    'lt' => [
        'numeric' => 'attribute должен быть меньше :value.',
        'file' => 'Значение :attribute должно быть меньше :value в килобайтах..',
        'string' => ':attribute должен содержать меньше символов :value.',
        'array' => 'В атрибуте :attribute должно быть меньше элементов :value..',
    ],
    'lte' => [
        'numeric' => 'attribute должен быть меньше или равен :value..',
        'file' => 'Значение :attribute должно быть меньше или равно :value в килобайтах..',
        'string' => 'attribute должен быть меньше или равен :value символов..',
        'array' => 'В атрибуте :attribute не должно быть более :value элементов..',
    ],
    'max' => [
        'numeric' => 'attribute не должен быть больше :max..',
        'file' => 'Значение :attribute не должно превышать :max килобайт..',
        'string' => 'Attribute не должен содержать больше :max символов..',
        'array' => 'В атрибуте :attribute не должно быть более :max элементов..',
    ],
    'mimes' => 'Attribute должен быть файлом типа: :values.',
    'mimetypes' => 'Attribute должен быть файлом типа: :values..',
    'min' => [
        'numeric' => 'Attribute должен быть не меньше :min.',
        'file' => 'Размер :attribute должен быть не менее :min килобайт..',
        'string' => 'Attribute должен содержать не менее :min символов.',
        'array' => 'В атрибуте :attribute должно быть не менее :min элементов.',
    ],
    'multiple_of' => 'Attribute должен быть кратен :ценить..',
    'not_in' => 'Выбранный :attribute недействителен.',
    'not_regex' => 'Формат :attribute недействителен.',
    'numeric' => 'Attribute должен быть числом.',
    'password' => 'Неправильный пароль.',
    'present' => 'Поле :attribute должно присутствовать..',
    'regex' => 'Формат :attribute недействителен.',
    'required' => 'Поле :attribute является обязательным.',
    'required_if' => 'Поле :attribute является обязательным, если :other равно :value.',
    'required_unless' => 'Поле :attribute является обязательным, если :other не находится в :values..',
    'required_with' => 'Поле :attribute является обязательным, если присутствует :values..',
    'required_with_all' => 'Поле :attribute необходимо, если присутствуют :values..',
    'required_without' => 'Поле :attribute требуется, если :values отсутствует..',
    'required_without_all' => 'Поле :attribute является обязательным, если ни одно из значений :value не присутствует.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено, если :other равно :value.',
    'prohibited_unless' => 'Поле :attribute запрещено, если только :other не находится в :values.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'Attribute должен быть :размер.',
        'file' => 'Attribute должен быть :size в килобайтах..',
        'string' => 'Attribute должен содержать символы :размер.',
        'array' => 'Attribute должен содержать элементы :size..',
    ],
    'starts_with' => 'Attribute должен начинаться с одного из следующих значений: :values.',
    'string' => 'Attribute должен быть строкой.',
    'timezone' => 'Attribute должен быть допустимой зоной.',
    'unique' => 'Attribute уже занят.',
    'uploaded' => 'Не удалось загрузить атрибут :attribute.',
    'url' => 'Формат :attribute недействителен.',
    'uuid' => 'Attribute должен быть действительным UUID..',

    // Custom app validations
    // 'full_name_required'            => 'Your name is required',
    'composite_unique'              => 'Attribute :value уже существует..',
    'register_email_unique'         => 'На этот адрес электронной почты уже есть учетная запись. Пожалуйста, попробуйте что-нибудь еще.',
    'role_type_required'            => 'Выберите тип роли.',
    'attribute_id_required'         => 'Выберите атрибут.',
    'attribute_type_id_required'    => 'Выберите тип атрибута..',
    'attribute_code_required'       => 'Поле кода атрибута является обязательным.',
    'attribute_value_required'      => 'Поле значения атрибута является обязательным..',
    'category_list_required'        => 'Выберите хотя бы одну категорию.',
    'manufacturer_required'         => 'Поле производителя обязательно.',
    'origin_required'               => 'Поле происхождения является обязательным.',
    'offer_start_required'          => 'Если у вас есть цена предложения, необходимо указать дату начала предложения.',
    'offer_start_after'             => ' Время начала промоакции не может быть в прошлом..',
    'offer_end_required'            => 'Если у вас есть цена предложения, необходимо указать дату окончания предложения.',
    'offer_end_after'               => ' Время окончания предложения должно быть позже времени начала предложения..',
    'variants_required'             => 'Требуются варианты',
    'sku-unique'                    => 'Артикул :value уже занят. Попробуйте новый.',
    'sku-distinct'                  => 'Вариант: атрибут имеет повторяющееся значение SKU..',
    'offer_price-numeric'           => ' не является допустимым значением цены. Цена предложения должна быть числом.',
    'email_template_id_required'    => 'Требуется шаблон электронной почты..',
    // 'merchant_have_shop'            => 'This merchant have a shop.',
    'brand_logo_max'                => 'Размер логотипа бренда не может превышать :max килобайт.',
    'brand_logo_mimes'              => 'The brand logo must be a file of type: :values.',
    'uploaded'                      => 'Размер файла превысил максимальный лимит загрузки на вашем сервере. Пожалуйста, проверьте файл php.ini.',
    'avatar_required'               => 'Выберите аватар.',
    'subject_required_without'      => 'Тема обязательна, если вы не используете шаблон.',
    'message_required_without'      => 'Сообщение обязательно, если вы не используете шаблон.',
    'template_id_required_without_all' => 'Выберите шаблон или создайте новое сообщение.',
    'customer_required'             => 'Выберите клиента.',
    'reply_required_without' => 'Поле для ответа обязательно.',
    'template_id_required_without' => 'Выбор шаблона необходим при повторном использовании шаблона.',
    'shipping_zone_tax_id_required' => 'Выберите налоговый профиль для зоны',
    'shipping_zone_country_ids_required' => 'Выберите хотя бы одну страну',
    'rest_of_the_world_composite_unique' => 'Зона судоходства для остального мира уже существует.',
    'something_went_wrong' => 'Что-то неправильно. Пожалуйста проверьте и попробуйте снова.',
    'shipping_rate_required_unless' => 'Укажите стоимость доставки или выберите опцию «Бесплатная доставка».',
    'shipping_range_minimum_min' => 'Минимальный диапазон не может иметь отрицательное значение.',
    'shipping_range_maximum_min' => 'Максимальный диапазон не может быть меньше минимального значения.',
    'csv_mimes'                => 'Attribute должен быть файлом типа csv..',
    'import_data_required' => 'Набор данных недействителен для импорта. Пожалуйста, проверьте свои данные и повторите попытку..',
    'do_action_required'    => 'Вы не предоставили данные.',
    'do_action_invalid'    => 'Указанное ключевое слово/ввод недействителен.',
    'recaptcha' => 'Пожалуйста, убедитесь, что вы человек!',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'пользовательское сообщение',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    'upload_rows' => 'Вы можете загрузить максимум записей :rows в пакете.',
    'csv_upload_invalid_data' => 'Некоторые строки содержат недопустимые данные, которые невозможно обработать. Пожалуйста, проверьте свои данные и повторите попытку.',
    'slider_image_required' => 'Требуется изображение слайдера.',
    'banner_image_required' => 'Требуется изображение баннера.',
    'select_the_item' => 'Выберите элемент',
    'banner_group_id_required' => 'Пожалуйста, выберите группу баннеров',
    "valid_css" => "Attribute может содержать только действительный CSS."
];
