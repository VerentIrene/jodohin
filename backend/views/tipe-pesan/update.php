<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TipePesan */

$this->title = 'Update Tipe Pesan: ' . $model->IDTIPEPESAN;
$this->params['breadcrumbs'][] = ['label' => 'Tipe Pesans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDTIPEPESAN, 'url' => ['view', 'id' => $model->IDTIPEPESAN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipe-pesan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
