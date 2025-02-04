<?php

return [

    'accepted' => 'Поље :attribute мора бити прихваћено.',
    'accepted_if' => 'Поље :attribute мора бити прихваћено када :other има вредност :value.',
    'active_url' => 'Поље :attribute мора бити важећа УРЛ адреса.',
    'after' => 'Поље :attribute мора бити датум после :date.',
    'after_or_equal' => 'Поље :attribute мора бити датум после или једак :date.',
    'alpha' => 'Поље :attribute сме да садржи само слова.',
    'alpha_dash' => 'Поље :attribute сме да садржи само слова, бројеве, цртице и доње црте.',
    'alpha_num' => 'Поље :attribute сме да садржи само слова и бројеве.',
    'array' => 'Поље :attribute мора бити низ.',
    'ascii' => 'Поље :attribute може садржавати само једно-бајтне алфанумеричке карактере и симболе.',
    'before' => 'Поље :attribute мора бити датум пре :date.',
    'before_or_equal' => 'Поље :attribute мора бити датум пре или једнак :date.',
    'between' => [
        'array' => 'Поље :attribute мора имати између :min и :max ставки.',
        'file' => 'Поље :attribute мора имати између :min и :max килобајта.',
        'numeric' => 'Поље :attribute мора имати између :min и :max.',
        'string' => 'Поље :attribute мора имати између :min и :max карактера.',
    ],
    'boolean' => 'Поље :attribute мора бити тачно или нетачно.',
    'can' => 'Поље :attribute садржи недозвољену вредност.',
    'confirmed' => 'Потврда поља :attribute се не подудара.',
    'current_password' => 'Лозинка је нетачна.',
    'date' => 'Поље :attribute мора бити валидан датум.',
    'date_equals' => 'Поље :attribute мора бити датум једнак :date.',
    'date_format' => 'Поље :attribute мора одговарати формату :format.',
    'decimal' => 'Поље :attribute мора имати :decimal децималних места.',
    'declined' => 'Поље :attribute мора бити одбијено.',
    'declined_if' => 'Поље :attribute мора бити отказано када :other је :value.',
    'different' => 'Поље :attribute и :other морају бити различити.',
    'digits' => 'Поље :attribute мора садрзати :digits цифара.',
    'digits_between' => 'Поље :attribute мора имати између :min и :max цифара.',
    'dimensions' => 'Поље :attribute има неважец́е димензије слике.',
    'distinct' => 'Поље :attribute има дупликат вредности.',
    'doesnt_end_with' => 'Поље :attribute не сме се завршавати са једним од следећих: :values.',
    'doesnt_start_with' => 'Поље :attribute не сме да почиње са једним од следећих: :values.',
    'email' => 'Поље :attribute мора бити важећа емаил адреса.',
    'ends_with' => 'Поље :attribute мора да се завршава са једним од следећих: :values.',
    'enum' => 'Одабрани :attribute је неважећи.',
    'exists' => 'Одабрани :attribute је неважећи.',
    'extensions' => 'Поље :attribute мора имати једну од следећих екстензија: :values.',
    'file' => 'Поље :attribute мора бити датотека.',
    'filled' => 'Поље :attribute мора имати вредност.',
    'gt' => [
        'array' => 'Поље :attribute мора имати више од :value ставки.',
        'file' => 'Поље :attribute мора бити веће од :value килобајта.',
        'numeric' => 'Поље :attribute мора бити веће од :value.',
        'string' => 'Поље :attribute мора бити веће од :value знакова.',
    ],
    'gte' => [
        'array' => 'Поље :attribute мора имати ставке :value или више.',
        'file' => 'Поље :attribute мора бити веће или једнако :value килобајта.',
        'numeric' => 'Поље :attribute мора бити веће или једнако :value.',
        'string' => 'Поље :attribute мора бити веће од или једнако знаковима :value.',
    ],
    'hex_color' => 'Поље :attribute мора бити важећа хексадецимална боја.',
    'image' => 'Поље :attribute мора бити слика.',
    'in' => 'Изабрани :attribute је неважећи.',
    'in_array' => 'Поље :attribute мора постојати у :other.',
    'integer' => 'Поље :attribute мора бити цео број.',
    'ip' => 'Поље :attribute мора бити важећа ИП адреса.',
    'ipv4' => 'Поље :attribute мора бити важећа ИПв4 адреса.',
    'ipv6' => 'Поље :attribute мора бити важећа ИПв6 адреса.',
    'json' => 'Поље :attribute мора бити важећи ЈСОН стринг.',
    'lowercase' => 'Поље :attribute мора бити исписано малим словима.',
    'lt' => [
        'array' => 'Поље :attribute мора имати мање од :value ставки.',
        'file' => 'Поље :attribute мора бити мање од :value килобајта.',
        'numeric' => 'Поље :attribute мора бити мање од :value.',
        'string' => 'Поље :attribute мора бити краће од :value знакова.',
    ],
    'lte' => [
        'array' => 'Поље :attribute не сме имати више од :value ставки.',
        'file' => 'Поље :attribute мора бити мање од или једнако :value килобајта.',
        'numeric' => 'Поље :attribute мора бити мање од или једнако :value.',
        'string' => 'Поље :attribute мора бити мање од или једнако :value карактера.',
    ],
    'mac_address' => 'Поље :attribute мора бити важећа МАЦ адреса.',
    'max' => [
        'array' => 'Поље :attribute не сме имати више од :max ставки.',
        'file' => 'Поље :attribute не сме бити веће од :max килобајта.',
        'numeric' => 'Поље :attribute не сме бити веће од :max.',
        'string' => 'Поље :attribute не сме бити веће од :max знакова.',
    ],
    'max_digits' => 'Поље :attribute не сме имати више од :max цифара.',
    'mimes' => 'Поље :attribute мора бити датотека типа: :values.',
    'mimetypes' => 'Поље :attribute мора бити датотека типа: :values.',
    'min' => [
        'array' => 'Поље :attribute мора имати најмање :min ставке.',
        'file' => 'Поље :attribute мора имати најмање :min килобајта.',
        'numeric' => 'Поље :attribute мора бити најмање :min.',
        'string' => 'Поље :attribute мора имати најмање :min знакова.',
    ],
    'min_digits' => 'Поље :attribute мора имати најмање :min цифара.',
    'missing' => 'Поље :attribute мора недостајати.',
    'missing_if' => 'Поље :attribute мора недостајати када је :other :value.',
    'missing_unless' => 'Поље :attribute мора недостајати осим ако :other није :value.',
    'missing_with' => 'Поље :attribute мора недостајати када је :values присутно.',
    'missing_with_all' => 'Поље :attribute мора недостајати када су присутне :value.',
    'multiple_of' => 'Поље :attribute мора бити вишеструко од :value.',
    'not_in' => 'Изабрани :attribute је неважећи.',
    'not_regex' => 'Формат поља :attribute је неважећи.',
    'numeric' => 'Поље :attribute мора бити број.',
    'password' => [
        'letters' => 'Поље :attribute мора да садржи најмање једно слово.',
        'mixed' => 'Поље :attribute мора да садржи најмање једно велико и једно мало слово.',
        'numbers' => 'Поље :attribute мора да садржи најмање један број.',
        'symbols' => 'Поље :attribute мора да садржи најмање један симбол.',
        'uncompromised' => 'Дати :attribute се појавио у цурењу података. Молимо вас да изаберете други :attribute.',
    ],
    'present' => 'Поље :attribute мора бити присутно.',
    'present_if' => 'Поље :attribute мора бити присутно када је :other :value.',
    'present_unless' => 'Поље :attribute мора бити присутно осим ако :other није :value.',
    'present_with' => 'Поље :attribute мора бити присутно када је :values присутно.',
    'present_with_all' => 'Поље :attribute мора бити присутно када су присутне :value.',
    'prohibited' => 'Поље :attribute је забрањено.',
    'prohibited_if' => 'Поље :attribute је забрањено када је :other :value.',
    'prohibited_unless' => 'Поље :attribute је забрањено осим ако :other није у :values.',
    'prohibits' => 'Поље :attribute забрањује присуство :other.',
    'regex' => 'Формат поља :attribute је неважећи.',
    'required' => 'Поље :аттрибуте је обавезно.',
    'required_array_keys' => 'Поље :attribute мора садржати уносе за: :values.',
    'required_if' => 'Поље :attribute је обавезно када је :other :value.',
    'required_if_accepted' => 'Поље :attribute је обавезно када је :other прихваћено.',
    'required_unless' => 'Поље :attribute је обавезно осим ако :other није у :values.',
    'required_with' => 'Поље :attribute је обавезно када је :values присутно.',
    'required_with_all' => 'Поље :attribute је обавезно када су :values присутне.',
    'required_without' => 'Поље :attribute је обавезно када су :values нису присутне.',
    'required_without_all' => 'Поље :attribute је обавезно када ниједно од :values није присутно.',
    'same' => 'Поље :attribute мора одговарати :other.',
    'size' => [
        'array' => 'Поље :attribute мора да садржи :size ставки.',
        'file' => 'Поље :attribute мора бити :size килобајта.',
        'numeric' => 'Поље :attribute мора бити :size.',
        'string' => 'Поље :attribute мора бити :size знакова.',
    ],
    'starts_with' => 'Поље :attribute мора почети са једним од следећих: :values.',
    'string' => 'Поље :attribute мора бити стринг.',
    'timezone' => 'Поље :attribute мора бити валидна временска зона.',
    'unique' => 'Поље :attribute је већ заузето.',
    'uploaded' => 'Поље :attribute није успео да се отпреми.',
    'uppercase' => 'Поље :attribute мора бити написано великим словима.',
    'url' => 'Поље :attribute мора бити важећа УРЛ адреса.',
    'ulid' => 'Поље :attribute мора бити важећи УЛИД.',
    'uuid' => 'Поље :attribute мора бити важећи УУИД.',
    'custom' => [
        'avatar' => [
            'base64image' => 'Фајл мора бити слика формата (јпег, пнг, јпг, гиф, свг).',
        ],
        'atLeastOneRole' => [
            'required' => 'Барем једна опција мора бити одабрана.',
        ],
    ],

];
