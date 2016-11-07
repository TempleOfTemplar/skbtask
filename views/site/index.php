<?php
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\widgets\MaskedInput;
use kartik\editable\Editable;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\RegisterForm */
/* @var $cities array */
/* @var $form ActiveForm */

?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-banner">
                    <?php echo Html::img('@web/images/smiling_human_and_snake.png') ?>
                    <div>
                        <h1 class="green">Отправьте онлайн заявку на кредит!</h1>
                        <p>ПОНЯТНЫЕ УСЛОВИЯ</p>
                        <ul class="styled-list">
                            <li>На любые цели до 1 300 000 рублей</li>
                            <li>Единая ставка от 19,9% годовых на весь срок до 5 лет</li>
                            <li>Досрочное погашение без ограничений</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 register-form-wrap">
                <?php echo Html::img('@web/images/corner-ribbon.png', ['alt' => 'ТОП-10 самых дешевых кредитов*', 'class' => 'corner-ribbon']) ?>
                <div class="ribbon ribbon-top-right">
                </div>
                <div class="site-registerForm">
                    <?php $form = ActiveForm::begin([
                        'layout' => 'horizontal',
                    ]); ?>
                    <?= $form->field($model, 'city_id')->dropDownList($cities); ?>
                    <?php
                    // я пытался... =(
                    /*echo '<label>Город</label><br>' .
                        Editable::widget([
                            'model' => $model,
                            'attribute'=>'city_id',
                            'asPopover' => false,
                            'header' => 'Город',
                            'ajaxSettings' => [
                                'type' => 'post'
                            ],
                            'inputType' => Editable::INPUT_DROPDOWN_LIST,
                            'data' => $cities,
                            'options' => ['class'=>'form-control']
                        ]);
                    */
                    ?>
                    <?= $form->field($model, 'surname') ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'patronymic') ?>
                    <?= $form->field($model, 'birth_date')->widget(DatePicker::classname(), [
                        'model' => $model,
                        'options' => ['placeholder' => 'ДД.ММ.ГГГГ'],
                        'language' => 'ru',
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd.mm.yyyy'
                        ]
                    ]);
                    ?>
                    <?= $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'mask' => '+7(999)999-99-99',]) ?>

                    <?= $form->field($model, 'email')->input('email') ?>
                    <?= $form->field($model, 'is_subscribed', [
                        'options' => ['class' => 'form-group nomargin'],
                        'horizontalCssClasses' => [
                            'wrapper' => 'col-lg-8 col-md-8 col-sm-6 ']
                    ])->checkbox([
                        'label' => 'Я не против получать выгодные предложения на этот адрес'
                    ]) ?>
                    <?= $form->field($model, 'is_accepted')->checkbox([
                        'label' => 'Я принимаю условия ' . Html::a('банковского соглашения', ['/controller/action']),
                    ]) ?>
                    <div class="form-group  text-center ">
                        <?= Html::submitButton('ПОЛУЧИТЬ КРЕДИТ', ['class' => 'btn btn-submit yellow-gradient']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div><!-- site-registerForm -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 promo-block">
                <h4 class="text-center">
                    ПРОСТОЕ ОФОРМЛЕНИЕ
                </h4>
                <div class="promo-list"><!--two items-->
                    <div class="vertical-align"><!--item one-->
                        <div>
                            <div class="numberCircle yellow-gradient">
                                <div class="height_fix"></div>
                                <div class="content">1</div>
                            </div>
                        </div>
                        <p class="text-left">
                            Отправьте заявку — мы вам перезвоним!<br>
                            Узнайте у специалиста банка<br>
                            предварительное решение
                        </p>
                    </div>
                    <div class="vertical-align"><!--item two-->
                        <div><?php echo Html::img('@web/images/arrows.png', ['class' => 'double-arrows']) ?></div>
                        <div class="numberCircle yellow-gradient">
                            <div class="height_fix"></div>
                            <div class="content">2</div>
                        </div>
                        <p class="text-left">
                            Приходите в офис для<br>
                            оформления документов
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
