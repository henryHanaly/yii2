<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserTable */

$this->title = 'Create User Table';
$this->params['breadcrumbs'][] = ['label' => 'User Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
