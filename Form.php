<?php

class Form
{
    public function open($attributes) {
        return '<form' . $this->renderAttributes($attributes) . '>';
    }
    public function close() {
        return '</form>';
    }
    public function input($attributes) {
        return '<input' . $this->renderAttributes($attributes) . '>';
    }
    public function password($attributes) {
        $attributes['type'] = 'password';
        return $this->input($attributes);
    }
    public function submit($attributes) {
        $attributes['type'] = 'submit';
        return $this->input($attributes);
    }
    public function textarea($attributes) {
        $value = $attributes['value'];
        unset($attributes['value']);
        return '<textarea' . $this->renderAttributes($attributes) . '>'
            . htmlspecialchars($value) . '</textarea>';
    }
    protected function renderAttributes($attributes) {
        $ret = '';
        foreach ($attributes as $name => $value) {
            $ret .= ' ' . $name . '="' . htmlspecialchars($value) . '"';
        }
        return $ret;
    }
}