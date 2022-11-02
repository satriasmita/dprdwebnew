<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MediaSocial */

$this->title = 'Tambah Media Social';
$this->params['breadcrumbs'][] = ['label' => 'Media Socials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="media-social-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
