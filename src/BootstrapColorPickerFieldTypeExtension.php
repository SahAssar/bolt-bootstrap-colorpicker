<?php

namespace boltabandoned\bootstrapcolorpicker;

use boltabandoned\bootstrapcolorpicker\Field\BootstrapColorPickerPickerField;
use Bolt\Extension\SimpleExtension;
use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;

class BootstrapColorPickerFieldTypeExtension extends SimpleExtension
{
    protected function registerFields()
    {
        return [
            new BootstrapColorPickerPickerField()
        ];
    }

    protected function registerTwigPaths()
    {
        return [
            'templates'
        ];
    }

    protected function registerAssets()
    {
        $style = (new Stylesheet('css/bootstrap-colorpicker.min.css'))
            ->setZone(Zone::BACKEND);
        $js = (new JavaScript('js/bootstrap-colorpicker.min.js'))
            ->setZone(Zone::BACKEND);

        return [
            $style,
            $js
        ];
    }
}
