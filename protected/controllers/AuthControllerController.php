<?php

class AuthControllerController extends Controller
{


	public function actionIndex()
	{
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	
	// public function filters()
	// {
	// 	// return the filter configuration for this controller, e.g.:
	// 	return array(
	// 		'inlineFilterName',
	// 		array(
	// 			'class'=>'path.to.FilterClass',
	// 			'propertyName'=>'propertyValue',
	// 		),
	// 	);
	// }

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'captcha' => array(
			'class' => 'CCaptchaAction',
			'backColor' => 0xFFFFFF,
			),
			);
	}

	public function actionLogin()
	{
		$model = new LoginForm;

		// jika user telah login, arahkan ke halaman dashboard
		if (!Yii::app()->user->isGuest) {
			$this->redirect(array('site/dashboard'));
		}

		// jika form login disubmit
		if (isset($_POST['LoginForm'])) {
			$model->attributes = $_POST['LoginForm'];
			if ($model->validate()) {
				Yii::app()->user->login($model->getUser(), 3600*24*30); // login user selama 30 hari
				$this->redirect(array('site/dashboard'));
			}
		}

		$this->render('login', array('model' => $model));
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(array('auth/login'));
	}

	public function accessRules()
    {
        return array(
            array('allow',  // allow authenticated user to perform 'index' and 'view' actions
                'actions'=>array('index','view'),
                'roles'=>array('master'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
}
	
