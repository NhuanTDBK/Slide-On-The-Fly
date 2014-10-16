<?php

 /*
	Bang Slide duoc anh xa vao 1 lop
	Moi instance la 1 row
 */
class Slides extends CActiveRecord
{
	/**
	 * Tra ve 1 the hien cua lop Slide 
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	/**
	
		Tên bảng 
	 */
	public function tableName()
	{
		return 'slides';
	}

	/**
	 * 
		Các rule để validate trước khi lưu vào db
	 */
	public function rules()
	{
		return array(
			array('link', 'required'),
			array('monhoc', 'numerical', 'integerOnly'=>true),// ID foreign key
			array('link', 'length', 'max'=>100),//do dai > 100
			array('ten', 'length', 'max'=>40),  //do dai > 40  
			
		);
	}

	/**
	 
	 Quan hệ ràng buộc
	 */
	public function relations()
	{
		
		return array(
			'monhoc0' => array(self::BELONGS_TO, 'Monhoc', 'monhoc'),
		);
	}

	/**
	 
		Chỉnh sửa tên cho cột đưa ra view
	 */
	public function attributeLabels()
	{
	//Ánh xạ trong array (tên bảng=>"tên hiển thị")
		return array(
			'id' => 'ID',
			'link' => 'Link',
			'monhoc' => 'Môn học',
			'ten' => 'Tên',
		);
	}

	/**
     *	Trả về tất cả các dòng trong bảng
	 */
	public function search()
	{

		$criteria=new CDbCriteria;
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
}
