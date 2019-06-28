<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Angajat */

$this->title = 'Create Angajat';
$this->params['breadcrumbs'][] = ['label' => 'Angajats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
