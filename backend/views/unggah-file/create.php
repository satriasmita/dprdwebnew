<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UnggahFile */

$this->title = Yii::t('app', 'Tambah Unggahan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Unggah Files'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unggah-file-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
