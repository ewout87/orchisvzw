<?php namespace EwoutDuyck\Reserves\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use EwoutDuyck\Reserves\Models\Reserve;


class Reserves extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';


    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('EwoutDuyck.Reserves', 'reserves', 'reserves');
    }
}
