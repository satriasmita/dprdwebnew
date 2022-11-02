<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend_themes application asset bundle.
 */
class BackendAsset extends AssetBundle
{
    public $basePath = '@root';
    public $baseUrl = '@root';
    public $css = [

        'resource/backend_themes/css/bootstrap.min.css', 
        'resource/backend_themes/css/typography.css', 
        'resource/backend_themes/css/style.css', 
        'resource/backend_themes/css/responsive.css', 
        // 'resource/backend_themes/fullcalendar/core/main.css', 
        // 'resource/backend_themes/fullcalendar/daygrid/main.css', 
        // 'resource/backend_themes/fullcalendar/timegrid/main.css', 
        // 'resource/backend_themes/fullcalendar/list/main.css', 
        // 'resource/backend_themes/css/flatpickr.min.css', 


    ];
    public $js = [

        'resource/backend_themes/js/jquery.min.js',
        'resource/backend_themes/js/popper.min.js',
        'resource/backend_themes/js/bootstrap.min.js',
        'resource/backend_themes/js/jquery.appear.js',
        'resource/backend_themes/js/countdown.min.js',
        'resource/backend_themes/js/waypoints.min.js',
        'resource/backend_themes/js/jquery.counterup.min.js',
        'resource/backend_themes/js/wow.min.js',
        'resource/backend_themes/js/apexcharts.js',
        'resource/backend_themes/js/slick.min.js',
        'resource/backend_themes/js/select2.min.js',
        'resource/backend_themes/js/owl.carousel.min.js',
        'resource/backend_themes/js/jquery.magnific-popup.min.js',
        'resource/backend_themes/js/smooth-scrollbar.js',
        // 'resource/backend_themes/js/lottie.js',
        // 'resource/backend_themes/js/core.js',
        // 'resource/backend_themes/js/charts.js',
        // 'resource/backend_themes/js/animated.js',
        // 'resource/backend_themes/js/kelly.js',
        // 'resource/backend_themes/js/flatpickr.js',
        'resource/backend_themes/js/chart-custom.js',
        'resource/backend_themes/js/custom.js',



    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
