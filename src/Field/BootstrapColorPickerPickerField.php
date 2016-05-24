<?php

namespace boltabandoned\bootstrapcolorpicker\Field;

use Bolt\Storage\Field\FieldInterface;

class BootstrapColorPickerPickerField implements FieldInterface
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
        return ['default'=>''];
    }
}