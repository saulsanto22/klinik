<?php

/**
 * This is the model class for table "detail_transaksi".
 *
 * The followings are the available columns in table 'detail_transaksi':
 * @property integer $id_detail_transaksi
 * @property integer $id_transaksi
 * @property integer $id_tindakan
 * @property integer $id_obat
 * @property integer $jumlah
 *
 * The followings are the available model relations:
 * @property Transaksi $idTransaksi
 * @property Tindakan $idTindakan
 * @property Obat $idObat
 */
class DetailTransaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detail_transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_transaksi, jumlah', 'required'),
			array('id_transaksi, id_tindakan, id_obat, jumlah', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_detail_transaksi, id_transaksi, id_tindakan, id_obat, jumlah', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idTransaksi' => array(self::BELONGS_TO, 'Transaksi', 'id_transaksi'),
			'idTindakan' => array(self::BELONGS_TO, 'Tindakan', 'id_tindakan'),
			'idObat' => array(self::BELONGS_TO, 'Obat', 'id_obat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_detail_transaksi' => 'Id Detail Transaksi',
			'id_transaksi' => 'Id Transaksi',
			'id_tindakan' => 'Id Tindakan',
			'id_obat' => 'Id Obat',
			'jumlah' => 'Jumlah',
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

		$criteria->compare('id_detail_transaksi',$this->id_detail_transaksi);
		$criteria->compare('id_transaksi',$this->id_transaksi);
		$criteria->compare('id_tindakan',$this->id_tindakan);
		$criteria->compare('id_obat',$this->id_obat);
		$criteria->compare('jumlah',$this->jumlah);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetailTransaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
