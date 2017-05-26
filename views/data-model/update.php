<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataModel */

$this->title = 'Update Data Model: ' . $model->m_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->m_id, 'url' => ['view', 'id' => $model->m_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
