<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\FrontendAsset;
use common\widgets\Alert;

FrontendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="theme-green">
<?php $this->beginBody() ?>

<div class="page-wrapper"> 
    <!-- start preloader -->
      <div class="preloader"></div>
    <!-- end preloader --> 

    <?= $this->render('_header.php') ?>

    <?= $content ?>

    <?= $this->render('_footer.php') ?>
  
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
