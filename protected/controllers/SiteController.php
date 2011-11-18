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

    public function actionIndex() {
        $model = new HideForm;
        if (isset($_POST['HideForm'])) {
            $hide = new Hide;
            $model->attributes = $_POST['HideForm'];
            if ($model->validate()) {
                try {
                    $hide->url = $_POST['HideForm']['url'];
                    $hide->create_time = time();
                    $hide->save();
                    $read = Hide::model()->find('create_time=:create_time', array(':create_time' => $hide->create_time));
                    $test["url"] = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'site/redirect/?id=';
                    $test["id"] = $read->id;
                    $this->render('success', $test);
                } catch (Exception $e) {
                    echo 'Caught exception: ', $e->getMessage(), "\n";
                }
            }
        }
        else{
            $this->render('hide', array('model' => $model));
        }
        
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

    public function actionRedirect() {
        $urlId = Yii::app()->request->getParam('id', 'default');
        if ($urlId != "default") {
            //echo $urlId;
            $read = Hide::model()->find('id=:id', array(':id' => $urlId));
            $test["a"] = $read->url;
            //echo $read->url;
        }
        $this->render('redirect', $test);
    }

}