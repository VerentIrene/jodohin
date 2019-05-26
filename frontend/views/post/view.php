<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Post */

$this->title = $model->IDPOST;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDPOST], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDPOST], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <!-- <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDPOST',
            'IDPENGGUNA',
            'GAMBARPOST',
            'CAPTION',
            'WAKTUPOST',
        ],
    ]) ?> -->
    <?php echo $model->WAKTUPOST; ?><br>
    <img src="../fotopost/<?php echo $model->GAMBARPOST; ?>" alt="gambar kosong" width="200"><br>
    <?php echo $model->CAPTION; ?><br>
    <?= Html::a('Kembali ke semua post saya', ['index'], ['class' => 'btn btn-primary']) ?>

</div>
