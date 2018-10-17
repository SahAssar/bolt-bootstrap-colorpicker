<?php

namespace sahassar\bootstrapcolorpicker\Field;

use Bolt\Storage\Field\Type\FieldTypeBase;

class BootstrapColorPickerPickerField extends FieldTypeBase
{

    public function getName()
    {
        return 'bootstrapcolorpicker';
    }

    public function getTemplate()
    {
        return '_bootstrap-colorpicker.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return ['notnull' => false];
    }
}
