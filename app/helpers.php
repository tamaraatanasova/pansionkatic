<?php

if (!function_exists('localized_field')) {
    function localized_field($model, $field)
    {
        $locale = session('locale', 'hr');
        $fieldName = match($locale) {
            'en' => "{$field}_en",
            'de' => "{$field}_de",
            default => $field
        };

        return $model->$fieldName ?? $model->$field;
    }
}
