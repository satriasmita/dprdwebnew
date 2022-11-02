<?php

namespace backend\models;

use Yii;
use amnah\yii2\user\models\User;

/**
 * This is the model class for table "posting".
 *
 * @property int $posting_id
 * @property int $homepage_kategori
 * @property string $posting_judul
 * @property string|null $posting_icon
 * @property string|null $posting_gambar
 * @property string $posting_deskripsi
 * @property int $posting_status
 * @property int $posting_layout
 * @property string $create_at
 * @property string|null $update_at
 * @property int $create_by
 * @property int|null $update_by
 * @property string $trans_ip
 */
class Posting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posting';
    }

    /**
     * {@inheritdoc}
     */
    public $upload_icon;
    public $upload_image_utama;
    public function rules()
    {
        return [
            [['homepage_kategori','posting_category', 'posting_judul', 'posting_deskripsi', 'posting_status', 'posting_layout', 'create_at', 'create_by', 'trans_ip'], 'required'],
            [['homepage_kategori', 'posting_status', 'posting_layout', 'create_by', 'update_by','posting_menu','posting_category'], 'integer'],
            [['posting_deskripsi'], 'string'],
            [['create_at', 'update_at'], 'safe'],
            [['posting_judul', 'posting_icon','posting_image_utama'], 'string', 'max' => 255],
            [['trans_ip'], 'string', 'max' => 100],

            [['upload_icon',],'required','on'=>['create']],  //ini wajib diisi saat create
            ['upload_icon', 'file', 'extensions' => ['jpg','png','JPEG','JPG'],  //ini extensin gambar yg kita iziznin upload
                //'maxSize' => 1024 * 1024 * 4, 
                //'tooBig' => 'Gambar cover tidak boleh lebih dari 4 mb', 
                'wrongExtension' => 'Hanya format gambar {extensions}  yang diizinkan untuk {attribute}.', //ini pesan yg muncul saat upload tidak sesuai tipe gambar
              
            ],

            [['upload_image_utama',],'required','on'=>['create']],  //ini wajib diisi saat create
            ['upload_image_utama', 'file', 'extensions' => ['jpg','png','JPEG','JPG'],  //ini extensin gambar yg kita iziznin upload
                //'maxSize' => 1024 * 1024 * 4, 
                //'tooBig' => 'Gambar cover tidak boleh lebih dari 4 mb', 
                'wrongExtension' => 'Hanya format gambar {extensions}  yang diizinkan untuk {attribute}.', //ini pesan yg muncul saat upload tidak sesuai tipe gambar
              
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'posting_id' => 'Posting ID',
            'homepage_kategori' => 'Homepage Kategori',
            'posting_category' => 'Kategori Posting',
            'posting_menu' => 'Menu',
            'posting_judul' => 'Judul Posting',
            'posting_icon' => 'Posting Thumnail',
            'posting_image_utama' => 'Image Utama',
            'posting_deskripsi' => 'Deskripsi',
            'posting_status' => 'Status Posting',
            'posting_layout' => 'Layout Posting ',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'create_by' => 'Dibuat Oleh',
            'update_by' => 'Update By',
            'trans_ip' => 'Trans Ip',
            'upload_icon' => 'Upload Gambar/Icon',
        ];
    }

    public function tglIndo($create_at){
        $bulan = array(
            1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
        );
        
        $pecahkan = explode('-', $create_at);

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0]; 
    }

     

    public function getListKategori(){
        return $this->hasOne(Kategori::className(), ['kategori_id'=>'homepage_kategori']);
    }


    public function getPostingKategori(){
        return $this->hasOne(PostingKategori::className(), ['id_kategori'=>'posting_category']);
    }

    public function getAuthorCreate(){
        return $this->hasOne(User::className(), ['id'=>'create_by']);
    }

    public function getListAplikasi(){
        $appKes = Posting::find()
            -> where(['homepage_kategori'=>5])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> all();
        return $appKes;
    }

    public function getDepartemen(){
        $dep = Posting::find()
            -> where(['homepage_kategori'=>4])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> all();
        return $dep;
    }

    public function getDataCovid(){
        $covid = Posting::find()
            -> where(['homepage_kategori'=>9])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> all();
        return $covid;
    }

    public function getDataUntukBerita(){
        $berita = Static::find()
            -> where(['homepage_kategori'=>5])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> all();
        return $berita;
    }

	public function getBeritaFooter(){
        $beritafooter = Static::find()
            -> where(['homepage_kategori'=>5])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> limit(3)
            -> all();
        return $beritafooter;
    }

    public function getDataGaleri(){
        $galeri = Static::find()
            -> where(['homepage_kategori'=>6])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> all();
        return $galeri;
    }

    public function getDataBlog(){
        $blog = Static::find()
            -> where(['homepage_kategori'=>8])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> all();
        return $blog;
    }

    public function getDataPengumuman(){
        $galeri = Static::find()
            -> where(['homepage_kategori'=>7])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> all();
        return $galeri;
    }

    // public function getUserPosting(){
    //     return 
    // }

    public function getDataUntukBeritaFooter(){
        $beritafooter = Static::find()
            -> where(['homepage_kategori'=>12])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> limit(2)
            -> all();
        return $beritafooter;
    }

    public function getDetailBerita($posting_id){
        $detailpost = Static::find()
            -> where(['posting_id'=>$posting_id])
            -> one();
        return $detailpost;
    }

    public function getDataPostingByMenu($posting_menu){
        $queryPostbyMenu = Posting::find()
                        ->where(['posting_menu'=>$posting_menu])
                        ->one();
        return $queryPostbyMenu;
    }

    public function getDataPelayanan(){
        $pelayanan = Static::find()
            -> where(['homepage_kategori'=>13])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> all();
        return $pelayanan;
    }

    public function getFrontendPengumuman(){
        $pengumuman = Static::find()
            -> where(['homepage_kategori'=>7])
            -> andWhere(['posting_status'=>1])
            -> orderBy(['posting_id'=>SORT_ASC])
            -> all();
        return $pengumuman;
    }
}
