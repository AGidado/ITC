<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/plugins/fontawesome-free/css/all.min.css', 'css/plugins/ekko-lightbox/ekko-lightbox.css', 'css/dist/css/adminlte.min.css', 'plugins/overlayScrollbars/css/OverlayScrollbars.min.css'
    ];
    public $js = [
        'js/jquery/jquery.min.js', 'js/bootstrap.bundle.min.js', 'js/ekko-lightbox.min.js', 'js/jquery.overlayScrollbars.min.js', 'js/adminlte.min.js', 'js/jquery.filterizr.min.js', 'js/demo.js', 'js/chart.js/Chart.min.js', 'js/daterangepicker.js', 'js/daterangepicker.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
