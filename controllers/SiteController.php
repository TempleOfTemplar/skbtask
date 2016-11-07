<?php

namespace app\controllers;

use app\models\City;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\RegisterForm;
use yii\helpers\Url;

class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage with register form.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new RegisterForm();
        $request = Yii::$app->request;
        /*if (isset($_POST['hasEditable'])) {
            // use Yii's response format to encode output as JSON
            Yii::$app->response->format = Response::FORMAT_JSON;

            // read your posted model attributes
            if ($model->load($request->post())) {
                // read or convert your posted information
                $value = $model->city_id;
                // return JSON encoded output in the below format
                return ['output' => $value, 'message' => ''];

                // alternatively you can return a validation error
                // return ['output'=>'', 'message'=>'Validation error'];
            } // else if nothing to do always return an empty JSON encoded output
            else {
                return ['output' => '', 'message' => ''];
            }
        }*/

        $client_ip = $request->getUserIP();
        $client_agent = $request->getUserAgent();
        if ($model->load($request->post())) {
            $model->birth_date = Yii::$app->formatter->asDate($model->birth_date, 'php:Y-m-d'); // convert date
            $model->phone = preg_replace("/[^0-9]/", "", $model->phone); // format phone
            $model->client_ip = $client_ip;
            $model->client_agent = $client_agent;
            if ($model->validate()) {
                if ($model->save()) {
                    Yii::$app->getResponse()->redirect(Url::to(['site/thanks']));
                    return;
                }
            }
        }
        $model->is_subscribed = true;
        $model->is_accepted = false;
        $cityes = ArrayHelper::map(City::find()->all(), 'id', 'city_name');
        return $this->render('index', [
            'model' => $model,
            'cities' => $cityes
        ]);
    }

    public function actionThanks()
    {
        $this->layout = 'main2';
        return $this->render('thanks');
    }
}
