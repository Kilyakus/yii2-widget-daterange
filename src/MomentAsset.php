<?php
namespace kilyakus\widget\daterange;

use yii\web\View;
use kilyakus\base\AssetBundle;

class MomentAsset extends AssetBundle
{
    public $jsOptions = ['position' => View::POS_HEAD];

    public $depends = [];

    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/moment']);
        parent::init();
    }
}
