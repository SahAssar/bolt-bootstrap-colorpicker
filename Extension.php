<?php

namespace Bolt\Extension\boltabandoned\bootstrap-colorpicker;

use Bolt\Application;
use Bolt\BaseExtension;

include_once 'bootstrap-colorpicker.php';

class Extension extends BaseExtension
{
    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);

        //$this->config = $this->app['config'];
        $this->app['config']->getFields()->addField(new bootstrap-colorpicker());

        if ($this->app['config']->getWhichEnd() == 'backend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        }
    }

    public function initialize() {
        $this->addCSS('assets/css/bootstrap-colorpicker.min.css');
        $this->addJavascript('assets/js/bootstrap-colorpicker.min.js', true);
    }

    public function getName()
    {
        return "faiconpicker";
    }

}






