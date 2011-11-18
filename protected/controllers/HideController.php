<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class HideController extends Controller {

    public function actionIndex() {
        $message['hello'] = "Hide After";
        $this->render("index", array('model' => $model));
    }

    public function actionRedirect() {
        $urlId =  Yii::app()->request->getParam('id', 'default');
        if($urlId!="default"){
            //echo $urlId;
             $read = Hide::model()->find('id=:id', array(':id' => $urlId ));
            $test["a"] = $read->url;
            //echo $read->url;
            
        }
         $this->render('redirect',$test);
    }

    public function actionHide() {
        $model = new HideForm;
        
        
        

//        $id = Yii::app()->getRequest()->getQuery('id');
//        var_dump($id);
//        die;

        if (isset($_POST['HideForm'])) {

            $hide = new Hide;

            $model->attributes = $_POST['HideForm'];
            if ($model->validate()) {
                try {
                    $hide->url = $_POST['HideForm']['url'];
                    $hide->create_time = time();
                    $hide->save();
                    echo "sucess!";
                    $read = Hide::model()->find('url=:url', array(':url' => $_POST['HideForm']['url']));
                    echo $read->url;
                    echo '\?';
                    echo $read->id;
                } catch (Exception $e) {
                    echo 'Caught exception: ', $e->getMessage(), "\n";
                }
                //print($_POST['HideForm']['url']);
            }
        }
        $this->render('hide', array('model' => $model));
    }

}

?>
