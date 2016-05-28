<?php
/**
 * @author Di Zhang <zhangdi_me@163.com>
 */

namespace yiizh\adminlte;

use yii\web\AssetBundle;

/**
 *
 * @package extong\adminlte
 */
class AdminLTEAsset extends AssetBundle
{
    public $sourcePath = '@yiizh/adminlte/assets';

    public $css = [
        'css/AdminLTE.min.css',
    ];

    public $js = [
        'js/app.min.js'
    ];

    public $depends = [
        'yii\bootstrap\BootStrapAsset'
    ];
}