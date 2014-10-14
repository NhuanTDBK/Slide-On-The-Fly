<?php 

/**
 * This is the model class for table "monhoc".
 *
 * The followings are the available columns in table 'slides':
 * @property integer $id
 * @property string $mamonhoc
 * @property string $tenmonhoc
 * @property integer $hesomon
 * @property string $thoigianhoc
 * @property string $hocphanhoctruoc
 * @property string $decuong
 * @property string $mieuta
 * @property string $tailieuthamkhao
 *
 * The followings are the available model relations:
 * @property Slides slideID
 * 
 * The function implements from Active Record
		tableName
		rules
		attributeLabels
		relation
 */
 class MonHoc extends CActiveRecord
 {
	/*
		Tra ve 1 instance cua MonHoc
	*/
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	/*
		Ten bang duoc anh xa
	*/
	public function tableName()
	{
		return 'monhoc';
	}
	/*
		Cac rule de validate truoc khi luu vao db
	*/
	public function rules()
	{
		return array(
			array('mamonhoc,tenmonhoc,hesomon,thoigianhoc,decuong,mieuta,tailieuthamkhao','required'),
			array('hesomon','numerical','min'=>3,'max'=>7,'integerOnly'=>true),
			array('mamonhoc', 'length', 'max'=>10),
            array('tenmonhoc', 'length', 'max'=>40),
            array('thoigianhoc', 'length', 'max'=>30),
            array('hocphanhoctruoc, decuong, mieuta, tailieuthamkhao', 'length', 'max'=>100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('ID, mamonhoc, tenmonhoc, hesomon, thoigianhoc, hocphanhoctruoc, decuong, mieuta, tailieuthamkhao', 'safe', 'on'=>'search'),
        );
	}
	/*
		Khoa ngoai 
	*/
	public function relations()
	{

        /*
         * Quan hệ với bảng slide: ONE_TO_MANY
         */
		return array(

		//liên kết slide
            'slides'=>array(self::HAS_MANY,'Slides','monhoc'),
        );
	}
	/*
	 * Dinh nghia label
	 */
     public function attributeLabels()
     {
         return array(
             'ID'=>'ID',
             'mamonhoc'=>'Mã môn học',
             'tenmonhoc'=>'Tên môn học',
             'hesomon'=>'Hệ số môn',
             'thoigianhoc'=>'Thời gian học',
             'hocphanhoctruoc'=>'Học phần học trước',
             'decuong'=>'Đề cương',
             'mieuta'=>'Nội dung',
             'tailieuthamkhao'=>'Tài liệu tham khảo',
         );
     }

     public function search()
     {
         $criteria=new CDbCriteria;

         $criteria->compare('ID',$this->ID);
         $criteria->compare('mamonhoc',$this->mamonhoc,true);
         $criteria->compare('tenmonhoc',$this->tenmonhoc,true);
         $criteria->compare('hesomon',$this->hesomon);
         $criteria->compare('thoigianhoc',$this->thoigianhoc,true);
         $criteria->compare('hocphanhoctruoc',$this->hocphanhoctruoc,true);
         $criteria->compare('decuong',$this->decuong,true);
         $criteria->compare('mieuta',$this->mieuta,true);
         $criteria->compare('tailieuthamkhao',$this->tailieuthamkhao,true);

         return new CActiveDataProvider($this, array(
             'criteria'=>$criteria,
            ));
     }
 }