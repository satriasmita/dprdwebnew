<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UnggahFile */

$this->title = Yii::t('app', 'Update Data Unggahan: {name}', [
    'name' => $model->id_unggah,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Unggah Files'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_unggah, 'url' => ['view', 'id' => $model->id_unggah]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="unggah-file-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
