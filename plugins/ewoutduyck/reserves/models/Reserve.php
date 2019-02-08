<?php namespace EwoutDuyck\Reserves\Models;

use Db;
use Url;
use App;
use Str;
use Html;
use Lang;
use Model;
use Markdown;
use BackendAuth;
use ValidationException;
use RainLab\Blog\Classes\TagProcessor;
use Backend\Models\User;
use Carbon\Carbon;
use Cms\Classes\Page as CmsPage;
use Cms\Classes\Theme;

/**
 * Model
 */
class Reserve extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ewoutduyck_reserves_reserves';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /*
     * Relations
     */
    public $attachMany = [
        'images' => ['System\Models\File', 'order' => 'sort_order'],
        'content_images' => ['System\Models\File']
    ];

    public function beforeSave()
    {
        $this->description_html = self::formatHtml($this->description);
    }

    public static function formatHtml($input, $preview = false)
    {
        $result = Markdown::parse(trim($input));

        if ($preview) {
            $result = str_replace('<pre>', '<pre class="prettyprint">', $result);
        }

        $result = TagProcessor::instance()->processTags($result, $preview);

        return $result;
    }

    /**
     * Sets the "url" attribute with a URL to this object
     * @param string $pageName
     * @param Cms\Classes\Controller $controller
     */
    public function setUrl($pageName, $controller)
    {
        $params = [
            'id'   => $this->id,
            'slug' => $this->slug,
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }
}
