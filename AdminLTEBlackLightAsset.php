<?php
/**
 * @author Di Zhang <zhangdi_me@163.com>
 */

namespace yiizh\adminlte;

use yii\web\AssetBundle;

class AdminLTEBlackLightAsset extends AssetBundle
{
    public $sourcePath = '@yiizh/adminlte/assets';

    public $css = [
        'css/skins/skin-black-light.min.css',
    ];

    public $depends = [
        'yiizh\adminlte\AdminLTEAsset'
    ];
}