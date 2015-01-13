<?php
/**
 * @link      https://github.com/SDKiller/yii2-codemirror
 * @package   zyx\yii2-codemirror
 * @copyright Copyright (c) 2014 Serge Postrash, Copyright (c) 2010-2014 by YiiExt contributors
 * @license   BSD 3-Clause, see LICENSE.md
 */

namespace zyx\widgets;

use Yii;
use yii\web\AssetBundle;


class CodemirrorAsset extends AssetBundle
{

    public $sourcePath = '@vendor/bower/codemirror';

    public $depends = [
    ];

    public $js = [
        'lib/codemirror.js',
        'mode/xml/xml.js',
        'addon/edit/matchbrackets.js',
        'addon/fold/xml-fold.js',
        'mode/htmlembedded/htmlembedded.js',
        'mode/htmlmixed/htmlmixed.js',
        'mode/javascript/javascript.js',
        'mode/css/css.js',
        'mode/clike/clike.js',
        'mode/php/php.js',
    ];

    public $css = [
        'lib/codemirror.css',
        'theme/eclipse.css',
    ];

    public $jsOptions = [];

    public $cssOptions = [];


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

}
