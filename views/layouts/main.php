<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header">
    <div class="container">
        <div class="pull-left">
            <?php echo Html::img('@web/images/logo.png') ?>
        </div>
        <div class="pull-right">
            <span class="green free-call">БЕСПЛАТНЫЙ ЗВОНОК ПО РОССИИ</span>
            <p class="green phone">8 800 1000 600</p>
        </div>
    </div>
</header>
<div class="wrap">
    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pull-left text-left">
                    <p>&copy; СКБ-банк, <?= date('Y') ?><br>
                    Генеральная лицензия № 705<br>
                    Центрального банка Российской Федерации</p>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#">Подробнее об условиях и видах кредитов</a>
                <p></p>
                <p>* По данным рейтинга портала Сравни.ру —
                    <a href="#">подробнее</a>
                </p>
            </div>
            <div class="col-md-4">
                <div class="pull-right text-right">
                    <p class="footer-phone">8-800-1000-600</p>
                    <p>Бесплатный звонок по России</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
