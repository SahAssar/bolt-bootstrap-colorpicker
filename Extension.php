<?php

namespace Bolt\Extension\boltabandoned\bootstrapcolorpicker;

use Bolt\Application;
use Bolt\BaseExtension;

include_once 'bootstrapcolorpicker.php';

class Extension extends BaseExtension
{
    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);

        $this->app['config']->getFields()->addField(new bootstrapcolorpicker());

        if ($this->app['config']->getWhichEnd() == 'backend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        }
    }

    public function initialize() {
        if ($this->app['config']->getWhichEnd() == 'backend') {
            $this->addCSS('assets/css/bootstrap-colorpicker.min.css');
            $this->addJavascript('assets/js/bootstrap-colorpicker.min.js', array('late' => true));
        }
    }

    public function getName()
    {
        return "bootstrapcolorpicker";
    }

}






