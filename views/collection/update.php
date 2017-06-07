<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Collection */

$this->title = 'Update Collection: ' . $model->collection_id;
$this->params['breadcrumbs'][] = ['label' => 'Collections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->collection_id, 'url' => ['view', 'id' => $model->collection_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="collection-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
