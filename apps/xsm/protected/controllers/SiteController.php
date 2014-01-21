<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('login', 'index1', 'logout'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index','allocations'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex1() {
        $data = array();
        $this->render('index1', $data);
    }
    
    public function actionAllocations(){
        $data = array();
        $this->render("asset_allocations",$data);
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {

        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $shouyi = Shouyi::model()->findByPk($_GET['id']); // 假设有一个帖子，其 ID 为 10
            $shouyi->delete();
        }


        //保存
        if ($_POST) {
            //保存用户提交
            $shouyi = new Shouyi;
            $shouyi->benjin = $_POST['benjin'];
            $shouyi->shouyi = $_POST['shouyi'];
            $shouyi->c_date = strtotime($_POST['c_date']);
            $shouyi->uid = Yii::app()->user->getId();
            if ($shouyi->save()) {
                
            } else {
                var_dump($shouyi->getErrors());
            }
        }

        //获取所有列表
        $sql = "select * from tbl_shouyi where uid='" . Yii::app()->user->getId() . "' order by c_date desc,id desc limit 100";
        $data['shouyi'] = Shouyi::model()->findAllBySql($sql);

        //获取昨天的本金
        $sql = "select * from tbl_shouyi where c_date = '" . (strtotime(date("Y-m-d")) - 60 * 60 * 24) . "' and uid='" . Yii::app()->user->getId() . "'";
        $last_day = Shouyi::model()->findBySql($sql);
        
//        //计算7日年化收益
//        $sql = "select * from tbl_shouyi where c_date <= '" . (strtotime(date("Y-m-d")) - 60 * 60 * 24) . "' and uid='" . Yii::app()->user->getId() . "' order by c_date desc,id desc limit 7";
//        $day_7 = Shouyi::model()->findAllBySql($sql);
//        
//        //计算7日年化收益
//        foreach($day_7 as $day){
//            
//        }
        
//        var_dump($res);
//        echo (strtotime(date("Y-m-d"))-60*60*24);
//        var_dump($data);
        //当天本金
        if ($last_day) {
            $data['day_benjin'] = $last_day->benjin + $last_day->shouyi;
        }else{
            $data['day_benjin'] = 1;
        }
        $this->render('index', $data);
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
