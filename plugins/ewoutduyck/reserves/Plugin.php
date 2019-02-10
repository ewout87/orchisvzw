<?php namespace EwoutDuyck\Reserves;

use Backend;
use Controller;
use EwoutDuyck\Reserves\Models\Reserve;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function registerComponents()
    {
        return [
            'EwoutDuyck\Reserves\Components\reserveDetails'       => 'reserveDetails',
            'EwoutDuyck\Reserves\Components\reserveList'      => 'reserveList',
        ];
    }

    public function registerSettings()
    {

    }
}
