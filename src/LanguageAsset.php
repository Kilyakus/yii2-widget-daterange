<?php
namespace kilyakus\widget\daterange;

use yii\web\View;
use kilyakus\base\AssetBundle;

class LanguageAsset extends AssetBundle
{
    public $jsOptions = ['position' => View::POS_HEAD];

    public $depends = ['\kilyakus\widget\daterange\MomentAsset'];

    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        parent::init();
    }
}
