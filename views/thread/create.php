<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ThreadTable */

$this->title = 'Create Thread Table';
$this->params['breadcrumbs'][] = ['label' => 'Thread Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thread-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
