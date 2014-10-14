<?php

class SlidesController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='//layouts/column2';
    private $_monhoc=null;
    public function loadMonHoc($sid)
    {
        if ($this->_monhoc == null) {
            $this->_monhoc = MonHoc::model()->findByPk($sid);

            if ($this->_monhoc == null) {
                throw new CHttpException(404, "Môn học không có trong danh mục");
                return null;
            }
        }
        return $this->_monhoc;
    }
    /*
     * Kiểm tra có môn học hay không trước khi tạo slide
     */
    public function filterMonHocContext($filterChain)
    {
        if(isset($_GET['sid']))
        {
            print_r("HI");
            $this->_monhoc=$this->loadMonHoc($_GET['sid']);
        }
        else throw new CHttpException(403,"Chọn môn học trước khi tạo slide");
        $filterChain->run();
    }
    /**
     * @return array 1 mảng chứa các bộ lọc
     * Bộ lọc "chỉ đọc"
     */
    public function filters()
    {
        return array(
            'accessControl',
            'postOnly + delete',
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
     * Hiển thị thông tin Slide theo id
     */
    public function actionView($id)
    {
        //$slide = Slides::model()->findByPk(1);
        $monhoc = MonHoc::model()->findByPk(1);
        $allSlide = $monhoc->slides;
        //print_r($allSlide);
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    /**
     * Tạo 1 Slide mới, render thành công ra view page
     */
    public function actionCreate()
    {
        $model=new Slides('search');
        //Có request Create
        //Gửi thành công->lưu dữ liệu
        $this->_monhoc=$this->loadMonHoc($_GET['sid']);
        //print_r($this->_monhoc);
        $model->monhoc = $this->_monhoc->ID;
        if(isset($_POST['Slides']))
        {
            //return all column attribute value;
            $model->attributes=$_POST['Slides'];
            //Lưu thành công
            //Mở view page, cho xem thông tin slide với id
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    /**
     * Cập nhật slide theo ID
     * Nếu thành công, sẽ gửi thông tin tới view page

     */

    public function actionUpdate($id)
    {
        //Lấy đối tượng slide theo id
        $model=$this->loadModel($id);

        if(isset($_POST['Slides']))
        {
            $model->attributes=$_POST['Slides'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }
        //
        $this->render('update',array(
            'model'=>$model,
        ));
    }

    /**
     * Xóa slide theo ID
     * Mở admin page khi cập nhật thành công
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        //if(!isset($_GET['ajax']))
        //$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        $this->redirect(array('admin'));
    }

    /**
     * Liệt kê tất cả slide, đưa thông tin cho page index
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Slides');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Quản lí các slides
     */
    public function actionAdmin()
    {
        $model= new Slides('search');
        //$model->unsetAttributes();  // clear any default values
        if(isset($_GET['Slides']))
            $model->attributes=$_GET['Slides'];
        //print_r($model->attributes);
        //gửi thông tin cho page admin
        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    /**
     * Lấy slide theo id( id được lấy GET['Slides']->id;
     * throws CHttpException
     *
     */
    public function loadModel($id)
    {
        //Tìm theo khóa chỉnh
        $model=Slides::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

}
