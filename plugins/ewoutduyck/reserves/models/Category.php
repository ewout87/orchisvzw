<?php namespace EwoutDuyck\Reserves\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ewoutduyck_reserves_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
