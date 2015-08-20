<?php

namespace Bolt\Extension\boltabandoned\bootstrap-colorpicker;

use Bolt\Field\FieldInterface;

class bootstrap-colorpicker implements FieldInterface {

    public function getName()
    {
        return 'bootstrap-colorpicker';
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
        return array('default'=>'');
    }

}