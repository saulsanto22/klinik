<?php

/**
 * This is the model class for table "transaksi".
 *
 * The followings are the available columns in table 'transaksi':
 * @property integer $id_transaksi
 * @property integer $id_pasien
 * @property integer $id_pegawai
 * @property string $tgl_transaksi
 * @property string $total_biaya
 *
 * The followings are the available model relations:
 * @property DetailTransaksi[] $detailTransaksis
 * @property Pasien $idPasien
 * @property Pegawai $idPegawai
 */
class Transaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pasien, id_pegawai, tgl_transaksi, total_biaya', 'required'),
			array('id_pasien, id_pegawai', 'numerical', 'integerOnly'=>true),
			array('total_biaya', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transaksi, id_pasien, id_pegawai, tgl_transaksi, total_biaya', 'safe', 'on'=>'search'),
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
			'detailTransaksis' => array(self::HAS_MANY, 'DetailTransaksi', 'id_transaksi'),
			'idPasien' => array(self::BELONGS_TO, 'Pasien', 'id_pasien'),
			'idPegawai' => array(self::BELONGS_TO, 'Pegawai', 'id_pegawai'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_transaksi' => 'Id Transaksi',
			'id_pasien' => 'Id Pasien',
			'id_pegawai' => 'Id Pegawai',
			'tgl_transaksi' => 'Tgl Transaksi',
			'total_biaya' => 'Total Biaya',
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

		$criteria->compare('id_transaksi',$this->id_transaksi);
		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('tgl_transaksi',$this->tgl_transaksi,true);
		$criteria->compare('total_biaya',$this->total_biaya,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
