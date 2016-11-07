<?php
use yii\helpers\Html;

?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 thanks">
        <h3 class="text-center green">
            Спасибо за обращение!<br>
            Ваша заявка принята в работу.
        </h3>
        <p class="text-center">Для оформления кредита Вы можете подать документы в любом офисе СКБ-банка</p>
        <div class="promo-block"><!--two items-->
            <div class="vertical-align"><!--item one-->
                <div><?php echo Html::img('@web/images/thanks-icon_0.png', ['class' => '']) ?></div>
                <p class="text-left">
                    На сумму до <b>180 000 рублей</b> Вам потребуется паспорт и второй документ (на выбор<br>
                    – страховое свидетельство пенсионного фонда/СНИЛС, водительское<br>
                    удостоверение, загран.паспорт, удостоверение военнослужащего).
                </p>
            </div>
            <div class="vertical-align"><!--item two-->
                <div><?php echo Html::img('@web/images/thanks-icon_1.png', ['class' => '']) ?></div>
                <p class="text-left">
                    Для получения <b>пониженной ставки или суммы до 1 300 000 рублей</b> – паспорт,<br>
                    второй документ и справка о доходах за последние 6 месяцев.
                </p>
            </div>
            <div class="vertical-align"><!--item two-->
                <div><?php echo Html::img('@web/images/thanks-icon_2.png', ['class' => '']) ?></div>
                <p class="text-left">
                    Для получения <b>пониженной ставки или суммы до 1 300 000 рублей</b> – паспорт,<br>
                    второй документ и справка о доходах за последние 6 месяцев.
                </p>
            </div>
        </div>
        <p class="text-center btn-wrap"><a href="#" class="btn btn-submit yellow-gradient">ВЫБРАТЬ ОФИС</a></p>
    </div>
</div>