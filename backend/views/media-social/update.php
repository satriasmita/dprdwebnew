<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MediaSocial */

$this->title = 'Update Media Social: ' . $model->sosmed_id;
$this->params['breadcrumbs'][] = ['label' => 'Media Socials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sosmed_id, 'url' => ['view', 'id' => $model->sosmed_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="media-social-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
