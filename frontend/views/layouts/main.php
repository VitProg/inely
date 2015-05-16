<?php
/* @var $this \yii\web\View */
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;

/* @var $content string */

if (!Yii::$app->user->isGuest)
    $this->beginContent('@frontend/views/layouts/_base.php');
else
    $this->beginContent('@frontend/views/layouts/_landing.php');
?>

<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>

<?php if (Yii::$app->session->hasFlash('alert')): ?>
    <?= \yii\bootstrap\Alert::widget([
        'body' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
        'options' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
        ]) ?>
<?php endif; ?>

<?= $content ?>

<?php
$this->endContent();
?>