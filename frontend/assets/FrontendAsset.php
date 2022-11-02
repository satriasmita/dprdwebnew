<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'resource/frontend_themes/css/style.css',
        // 'resource/frontend_themes/css/bootstrap.css', 
        'resource/frontend_themes/css/responsive.css', 
        'resource/frontend_themes/css/flaticon.css', 
        'resource/frontend_themes/css/animate.css', 
        'resource/frontend_themes/css/font-awesome.css', 
        'resource/frontend_themes/css/hover.css', 
        'resource/frontend_themes/css/icofont.css', 
        'resource/frontend_themes/css/jquery.bxslider.css', 
        'resource/frontend_themes/css/jquery.fancybox.css', 
        'resource/frontend_themes/css/magnific-popup.css', 
        'resource/frontend_themes/css/owl.carousel.css', 
        'resource/frontend_themes/css/owl.css', 
        'resource/frontend_themes/css/owl.theme.css', 
        'resource/frontend_themes/css/owl.transitions.css', 
        'resource/frontend_themes/css/revolution-slider.css', 
        'resource/frontend_themes/css/stroke-gap-icons.css', 


        //backend css
        'resource/backend_themes/css/bootstrap.min.css', 
        'resource/backend_themes/css/typography.css', 

     


    ];
    public $js = [
        'resource/frontend_themes/js/jquery.js',
        'resource/frontend_themes/js/all-jquery.js',
        'resource/frontend_themes/js/script.js',

        //backend js
        'resource/backend_themes/js/bootstrap.min.js',
    


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
