<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "register_form".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $birth_date
 * @property string $phone
 * @property string $email
 * @property integer $is_subscribed
 * @property string $created_at
 * @property integer $city_id
 * @property string $client_ip
 * @property string $client_agent
 * @property string $updated_at
 * @property integer $is_accepted
 *
 * @property City $city
 */
class RegisterForm extends \yii\db\ActiveRecord
{
    public $is_accepted;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'register_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'patronymic', 'email'], 'trim'],
            [['surname', 'name', 'patronymic', 'birth_date', 'city_id', 'phone', 'email'], 'required'],
            [['name', 'surname', 'patronymic'], 'string', 'length' => [2, 45]],
            [['name', 'surname', 'patronymic'], 'match', 'pattern' => '/^[А-ЯЁа-яё\s]+$/u', 'message' => '* Пожалуйста, используйте только кириллические(Русские) буквы'], // только кириллица
            [['client_agent'], 'string', 'max' => 255],
            [['birth_date', 'created_at', 'updated_at', 'is_accepted'], 'safe'],
            [['is_accepted'], 'required','requiredValue' => 1, 'message' => ''],
            //['birth_date', 'date', 'message' => '* Поле должно содержать дату в формате ДД.ММ.ГГГГ'],
            [['is_subscribed', 'city_id'], 'integer'],
            [['email'], 'string', 'max' => 60],
            [['email'], 'email'],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'birth_date' => 'Дата рождения',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'is_subscribed' => 'Я не против получать выгодные предложения на этот адрес',
            'is_accepted' => 'Я принимаю условия банковского соглашения',
            'city_id' => 'Город',
            'created_at' => 'Создано',
            'client_ip' => 'IP Адрес клиента',
            'client_agent' => 'Заголовки браузера клиента',
            'updated_at' => 'Обновлено',
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }
}
