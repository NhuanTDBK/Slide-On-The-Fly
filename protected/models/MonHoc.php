<?php 

/** 
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
	 * Định nghĩa label
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
	/*
		Trả về tất cả các dòng trong bảng
	*/
     public function search()
     {
         $criteria=new CDbCriteria;
         return new CActiveDataProvider($this, array(
             'criteria'=>$criteria,
            ));
     }
 }