<?php

/**
 * This is the model class for table "slides".
 *
 * The followings are the available columns in table 'slides':
 * @property integer $id
 * @property string $link
 * @property integer $monhoc
 * @property string $ten
 *
 * The followings are the available model relations:
 * @property Monhoc $monhoc0
 */
class Slides extends CActiveRecord
{
	/**
	 * @return string the associated database table name
		Tên bảng 
	 */
	public function tableName()
	{
		return 'slides';
	}

	/**
	 * @return array validation rules for model attributes.
		Các rule để validate trước khi lưu vào db
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('link', 'required'),
			array('monhoc', 'numerical', 'integerOnly'=>true),
			array('link', 'length', 'max'=>100),
			array('ten', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, link, monhoc, ten', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 Quan hệ ràng buộc
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'monhoc0' => array(self::BELONGS_TO, 'Monhoc', 'monhoc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
		Chỉnh sửa tên cho cột đưa ra view
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'link' => 'Link',
			'monhoc' => 'Mon hoc',
			'ten' => 'Ten',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('monhoc',$this->monhoc);
		$criteria->compare('ten',$this->ten,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Slides the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
