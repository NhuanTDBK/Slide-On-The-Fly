<?php

class MonHocController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='//layouts/column2';

    /**
     *@return array 1 mảng chứa các bộ lọc
     * Bộ lọc "chỉ đọc"
     */
    public function filters()
    {
        return array(
            'accessControl',
            'postOnly + delete', // khi có yêu cầu delete
        );
    }

    /**
     * Đặc tả các luật truy cập
     */
    public function accessRules()
    {
        return array(
            array('allow',  // Cho phép mọi user được xem thông tin
                'actions'=>array('index','view'),
                'users'=>array('*'),//All user
            ),
            array('allow', // Chỉ người có quyền mới được phép tạo và sửa
                'actions'=>array('create','update'),
                'users'=>array('@'),
            ),
            array('allow', // Xác nhận admin
                'actions'=>array('admin','delete'),
                'users'=>array('admin'),
            ),
            array('deny',  // Từ chối người dùng lạ
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Hiển thị thông tin môn học theo id
     */
    public function actionView($id)
    {

        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    /**
     * Tạo môn học mới, chuyển hướng sang view page voi tham so ID
     */
    public function actionCreate()
    {
        $model=new MonHoc;
        //Có yêu cầu
        if(isset($_POST['MonHoc']))
        {
            $model->attributes=$_POST['MonHoc'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->ID));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    /**
     * Update môn học theo id
     */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        if(isset($_POST['MonHoc']))
        {
            $model->attributes=$_POST['MonHoc'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->ID));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    /**
     * Xóa môn học theo id
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        $this->redirect(array('admin'));
    }

    /**
     * Liệt kê các môn học
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('MonHoc');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Quản lí các môn học
     */
    public function actionAdmin()
    {
        $model=new MonHoc('search');
        if(isset($_GET['MonHoc']))
            $model->attributes=$_GET['MonHoc'];
        if($model!=NULL)
        $this->render('admin',array(
            'model'=>$model,
        ));
        else print("Error");

    }

    /**
     * Lấy môn học theo id( id được lấy GET['Slides']->id;
     * throws CHttpException
     */
    public function loadModel($id)
    {
        $model=MonHoc::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
    /*
     * Liệt kệ tất cả các slides cua 1 mon
     */
    public function getSlideOption()
    {
        $slidesArray = CHtml::listData($this->slides,'id','slides');
        return $slidesArray;
    }
    /*
     * Liệt kê tất cả các môn học
     */
    public function getSubjectOption()
    {
        $monhocArray = CHtml::listData($this,'ID','tenmonhoc');
        print_r($monhocArray);
        return $monhocArray;
    }

}
