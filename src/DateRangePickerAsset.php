<?php
namespace kilyakus\widget\daterange;

use kilyakus\base\AssetBundle;

class DateRangePickerAsset extends AssetBundle
{
    public $depends = [
        'kilyakus\widget\daterange\MomentAsset',
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/daterangepicker', 'css/daterangepicker-kv']);
        $this->setupAssets('js', ['js/daterangepicker']);
        parent::init();
    }
}
