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
    'reg_number.regex' => 'Formatas turi būti XXXYYY formate, kur X - raidė, Y skaičius',

    'accepted' => 'Laukas :attribute turi būti priimtas.',
    'accepted_if' => 'Laukas :attribute turi būti priimtas kai :other yra :value.',
    'active_url' => ':attribute nėra galiojantis URL.',
    'after' => ':attribute turi būti data po :date.',
    'after_or_equal' => ':attribute turi būti data po arba lygi :date.',
    'alpha' => ':attribute gali turėti tik raides.',
    'alpha_dash' => ':attribute gali turėti tik raides, skaičius, brūkšnelius ir pabrėžimus.',
    'alpha_num' => ':attribute gali turėti tik raides ir skaičius.',
    'array' => ':attribute turi būti masyvas.',
    'ascii' => ':attribute gali turėti tik vienbaites alfanumerines simbolius ir simbolius.',
    'before' => ':attribute turi būti data prieš :date.',
    'before_or_equal' => ':attribute turi būti data prieš arba lygi :date.',
    'between' => [
        'array' => ':attribute turi turėti nuo :min iki :max elementų.',
        'file' => ':attribute turi būti nuo :min iki :max kilobaitų dydžio.',
        'numeric' => ':attribute turi būti tarp :min ir :max.',
        'string' => ':attribute turi turėti nuo :min iki :max simbolių.',
    ],
    'boolean' => ':attribute laukas turi būti true arba false.',
    'confirmed' => ':attribute patvirtinimas nesutampa.',
    'current_password' => 'Slaptažodis neteisingas.',
    'date' => ':attribute nėra galiojanti data.',
    'date_equals' => ':attribute turi būti data lygi :date.',
    'date_format' => ':attribute neatitinka formato :format.',
    'decimal' => ':attribute turi būti :decimal dešimtainių skaičių.',
    'declined' => ':attribute turi būti atmestas.',
    'declined_if' => ':attribute turi būti atmestas kai :other yra :value.',
    'different' => ':attribute ir :other turi skirtis.',
    'digits' => ':attribute turi būti :digits skaitmenų.',
    'digits_between' => ':attribute turi būti nuo :min iki :max skaitmenų.',
    'dimensions' => ':attribute turi netinkamus vaizdo matmenis.',
    'distinct' => ':attribute laukas turi dubliuojamą reikšmę.',
    'doesnt_end_with' => ':attribute negali baigtis viena iš šių reikšmių: :values.',
    'doesnt_start_with' => 'Laukelis :attribute negali prasidėti šiais simboliais: :values.',
    'email' => 'Laukelis :attribute turi būti galiojantis el. pašto adresas.',
    'ends_with' => 'Laukelis :attribute turi baigtis šiais simboliais: :values.',
    'enum' => 'Pasirinktas negaliojantis :attribute.',
    'exists' => 'Pasirinktas negaliojantis :attribute.',
    'file' => 'Laukelis :attribute turi būti failas.',
    'filled' => 'Laukelis :attribute turi būti užpildytas.',
    'gt' => [
        'array' => 'Laukelis :attribute turi turėti daugiau nei :value elementų.',
        'file' => 'Laukelis :attribute turi būti didesnis nei :value kilobaitai.',
        'numeric' => 'Laukelis :attribute turi būti didesnis nei :value.',
        'string' => 'Laukelis :attribute turi būti ilgesnis nei :value simboliai.',
    ],
    'gte' => [
        'array' => 'Laukelis :attribute turi turėti bent :value elementus.',
        'file' => 'Laukelis :attribute turi būti bent :value kilobaitų dydžio.',
        'numeric' => 'Laukelis :attribute turi būti didesnis arba lygus :value.',
        'string' => 'Laukelis :attribute turi būti bent :value simbolių ilgio.',
    ],
    'image' => 'Laukelis :attribute turi būti paveikslėlis.',
    'in' => 'Pasirinktas negaliojantis :attribute.',
    'in_array' => 'Laukelis :attribute neegzistuoja :other.',
    'integer' => 'Laukelis :attribute turi būti sveikasis skaičius.',
    'ip' => 'Laukelis :attribute turi būti galiojantis IP adresas.',
    'ipv4' => 'Laukelis :attribute turi būti galiojantis IPv4 adresas.',
    'ipv6' => 'Laukelis :attribute turi būti galiojantis IPv6 adresas.',
    'json' => 'Laukelis :attribute turi būti galiojantis JSON tekstas.',
    'lowercase' => 'Laukelis :attribute turi būti tik mažosiomis raidėmis.',
    'lt' => [
        'array' => 'Laukelis :attribute turi turėti mažiau nei :value elementų.',
        'file' => 'Laukelis :attribute turi būti mažesnis nei :value kilobaitai.',
        'numeric' => 'Laukelis :attribute turi būti mažesnis nei :value.',
        'string' => 'Laukelis :attribute turi būti trumpesnis nei :value simboliai.',
    ],
    'lte' => [
        'array' => ':attribute negali turėti daugiau nei :value elementus.',
        'file' => ':attribute turi būti mažiau arba lygu :value kilobaitams.',
        'numeric' => ':attribute turi būti mažiau arba lygu :value.',
        'string' => ':attribute turi būti mažiau arba lygu :value simboliams.',
    ],
    'mac_address' => ':attribute turi būti tinkamo formato MAC adresas.',
    'max' => [
        'array' => ':attribute negali turėti daugiau nei :max elementų.',
        'file' => ':attribute turi būti ne didesnis nei :max kilobaitai.',
        'numeric' => ':attribute negali būti didesnis nei :max.',
        'string' => ':attribute negali būti ilgesnis nei :max simboliai.',
    ],
    'max_digits' => ':attribute negali turėti daugiau nei :max skaitmenų.',
    'mimes' => ':attribute turi būti failo tipas: :values.',
    'mimetypes' => ':attribute turi būti failo tipas: :values.',
    'min' => [
        'array' => ':attribute turi turėti bent :min elementus.',
        'file' => ':attribute turi būti bent :min kilobaitų dydžio.',
        'numeric' => ':attribute turi būti bent :min.',
        'string' => ':attribute turi būti bent :min simbolių ilgio.',
    ],
    'min_digits' => ':attribute turi turėti bent :min skaitmenis.',
    'missing' => ':attribute laukas turi būti praleistas.',
    'missing_if' => ':attribute laukas turi būti praleistas, kai :other yra :value.',
    'missing_unless' => ':attribute laukas turi būti praleistas, nebent :other yra :value.',
    'missing_with' => ':attribute laukas turi būti praleistas, kai :values yra pateikti.',
    'missing_with_all' => ':attribute laukas turi būti praleistas, kai pateikti visi :values.',
    'multiple_of' => ':attribute turi būti :value kartotinis.',
    'not_in' => 'Pasirinktas :attribute yra neteisingas.',
    'not_regex' => ':attribute formatas yra neteisingas.',
    'numeric' => ':attribute turi būti skaičius.',
    'password' => [
        'letters' => ':attribute turi turėti bent vieną raidę.',
        'mixed' => ':attribute turi turėti bent vieną didžiąją ir mažąją raidę.',
        'numbers' => ':attribute turi turėti bent vieną skaičių.',
        'symbols' => ':attribute turi turėti bent vieną simbolį.',
        'uncompromised' => 'Duomenų nutekėjimo metu atrubutas :attribute buvo nuslėptas. Prašome pasirinkti kitą :attribute.',
        ],
    'present' => 'Laukas :attribute turi būti pateiktas.',
        'prohibited' => 'Laukas :attribute yra uždraustas.',
        'prohibited_if' => 'Laukas :attribute yra uždraustas, kai :other yra :value.',
        'prohibited_unless' => 'Laukas :attribute yra uždraustas, nebent :other yra tarp reikšmių :values.',
        'prohibits' => 'Laukas :attribute neleidžia reikšmės :other būti pateiktai.',
        'regex' => 'Lauko :attribute formatas yra neteisingas.',
        'required' => 'Laukas :attribute yra privalomas.',
        'required_array_keys' => 'Laukas :attribute turi turėti įrašus reikšmėms :values.',
        'required_if' => 'Laukas :attribute yra privalomas, kai :other yra :value.',
        'required_if_accepted' => 'Laukas :attribute yra privalomas, kai :other yra patvirtintas.',
        'required_unless' => 'Laukas :attribute yra privalomas, nebent :other yra tarp reikšmių :values.',
        'required_with' => 'Laukas :attribute yra privalomas, kai yra pateikta reikšmė :values.',
        'required_with_all' => 'Laukas :attribute yra privalomas, kai yra pateiktos reikšmės :values.',
        'required_without' => 'Laukas :attribute yra privalomas, kai nėra pateikta reikšmė :values.',
        'required_without_all' => 'Laukas :attribute yra privalomas, kai nėra pateiktos reikšmės :values.',
        'same' => ':attribute ir :other turi sutapti.',
        'size' => [
            'array' => ':attribute turi turėti :size elementus.',
            'file' => ':attribute turi būti :size kilobaitų dydžio.',
            'numeric' => ':attribute turi būti :size dydžio.',
            'string' => ':attribute turi būti :size simbolių ilgio.',
        ],
        'starts_with' => ':attribute turi prasidėti viena iš reikšmių: :values.',
        'string' => ':attribute turi būti tekstas.',
        'timezone' => ':attribute turi būti teisinga laiko juosta.',
        'unique' => ':attribute jau yra paimtas.',
        'uploaded' => ':attribute nepavyko įkelti.',
        'uppercase' => ':attribute turi būti didžiosiomis raidėmis.',
    'url' => 'Atributas :attribute turi būti galiojantis URL.',
    'ulid' => 'Atributas :attribute turi būti galiojantis ULID.',
    'uuid' => 'Atributas :attribute turi būti galiojantis UUID.',

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
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'vardas',
        'surname' => 'pavardė',
        'brand' => 'gamintojas',
        'reg_number' => 'registracijos numeris',
        'owner' => 'savininkas',
    ],

];
