<?php

class SlidesController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='//layouts/column2';
    public static $mamonhoc;
    /**
     * @return array action filters
     */
    public function filters()
    {
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
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','view','upload'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete'),
                'users'=>array('admin'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }
    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        /*
              Trình tự upload
              Khi người dùng chọn file ở hộp thoại, file đó sẽ được upload lên thư mục tmp trên server (bằng cách thiết lập biến upload_tmp_dir
              trong php.ini
              Sau đó file sẽ được chuyển tới thư mục cần upload từ file tạm đó
          */
        $models = new Slides;
        $get_ID = 0;
        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($models);
        if(isset($_GET['id'])) {
            $get_ID = $_GET['id'];
            echo "GET";
        }
        if(isset($_POST['Slides']))
        {
            $get_ID = $_POST['Slides']['tags'];
            echo "POST";
        }
        $models->tags= $get_ID;
        if(isset($_FILES["file1"]))
        {
            $connect = ftp_connect("localhost");
            if($connect) print_r("Connect successfully");
            $login = ftp_login($connect,"admin","admin");
            if($login) print_r("Login successfully");
            else print_r("Error login");
            foreach($_FILES["file1"]["name"] as $key=>$name)
            {
                $fileName = $_FILES["file1"]["name"][$key]; // The file name
                $fileTmpLoc=$_FILES["file1"]["tmp_name"][$key]; // File in the PHP tmp folder
                if (!$fileTmpLoc) { // if file not chosen
                    echo "ERROR: Please browse for a file before clicking the upload button.";
                    exit();
                }
                if(ftp_put($connect,$fileName,$fileTmpLoc,FTP_BINARY))
                {
                    echo "$fileName upload is complete";
                    $model = new Slides;
                    $model->tags=$get_ID;
                    $model->noidung = 'ftp://localhost/'.$fileName;
                    $model->tieude = $fileName;
                    $model->save();
                }
                else {
                    echo "move_uploaded_file function failed";
                }

            }
        }

        $this->render('create',array(
            'model'=>$models,
        ));

    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Slides']))
        {
            $model->attributes=$_POST['Slides'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $connect = ftp_connect("localhost");
        if($connect)
            print_r("Connect successfully");
        $file = $this->loadModel($id);
        if(ftp_delete($connect,$file->tieude))
        {
            echo "Da xoa file ".$file->tieude;
            $file->delete();
        }
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Slides');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model=new Slides('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Slides']))
            $model->attributes=$_GET['Slides'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Slides the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Slides::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Slides $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='slides-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
