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
    ];

    public $css = [
        'lib/codemirror.css',
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
