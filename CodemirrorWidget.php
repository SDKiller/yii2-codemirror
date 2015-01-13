<?php
/**
 * @link      https://github.com/SDKiller/yii2-codemirror
 * @package   zyx\yii2-codemirror
 * @copyright Copyright (c) 2015 Serge Postrash
 * @license   BSD 3-Clause, see LICENSE.md
 */

namespace zyx\widgets;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\widgets\InputWidget;


/**
 * Requires Codemirror JavaScript component version 10.0.*
 */

class CodemirrorWidget extends InputWidget
{
    /**
     * @var array Codemirror settings
     * @see http://codemirror.net/doc/manual.html
     */
    public $clientOptions = [];


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->registerAssets();
    }

    /**
     * Register asset bundle and attach editor to html tag
     */
    public function registerAssets()
    {
        $view = $this->getView();

        $bundle = CodemirrorAsset::register($view);

        //TODO

        $id            = $this->options['id'];
        $clientOptions = Json::encode($this->clientOptions);
        //TODO
        $js            = '';
        $view->registerJs($js);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
    }

}
