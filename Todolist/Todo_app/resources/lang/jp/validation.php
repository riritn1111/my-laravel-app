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
    'required'             => ':attribute は必須入力です。',
    'date'                 => ':attribute には日付を入力してください。',
    'confirmed'            => ':attribute が確認欄と一致していません。',
    'email'                => ':attribute には有効な形式のメールアドレスを入力してください。',
    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'token' => 'トークン',
    ],
    'max'                  => [
        // 中略
        'string'  => ':attribute は :max 文字以内で入力してください。',
        // 中略
    ],
    'string'               => ':attribute には文字を入力してください。',
    'unique'               => '入力いただいた :attribute はすでに使用されています。',
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

    'attributes' => [],

];
