<?php

require_once 'Form.php';
class SmartForm extends Form
{
    public function textarea($attributes)
    {
        $attributes = $this->processValue($attributes);
        return parent::textarea($attributes);
    }
    protected function renderAttributes($attributes)
    {
        $attributes = $this->processValue($attributes);
        return parent::renderAttributes($attributes);
    }
    private function processValue($attributes) {
        if (isset($attributes['name'])) {
            $name = $attributes['name'];
            if (isset($_POST[$name])) {
                $attributes['value'] = $_POST[$name];
            }
        }
        return $attributes;
    }
}