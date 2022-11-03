<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->profile->full_name; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Beranda', 'icon' => 'home', 'url' => ['/site/index']],
                    // [
                    //     'label' => 'Pengaturan Tampilan',
                    //     'icon' => 'bars',
                    //     'url' => '#',
                    //     "items" => [
                    //         ['label' => 'Halaman Statis', 'icon' => 'bars', 'url' => ['/statis-page']],
                    //         ['label' => 'Kategori Posting', 'icon' => 'tv', 'url' => ['/posting-kategori']],
                    //         ['label' => 'Kategori Tampilan', 'icon' => 'clipboard', 'url' => ['/kategori']],
                    //     ],
                    // ],
                    ['label' => 'Agenda Kegiatan', 'icon' => 'bank', 'url' => ['/agenda']],
                    ['label' => 'Berita', 'icon' => 'folder-open', 'url' => ['/berita']],
                    ['label' => 'Galeri', 'icon' => 'users', 'url' => ['/galeri']],
                    

                    [
                        'label' => 'Manajemen Anggota',
                        'icon' => 'bars',
                        'url' => '#',
                        "items" => [
                            ['label' => 'Badan', 'icon' => 'shopping-cart', 'url' => ['/badan']],
                            ['label' => 'Komisi', 'icon' => 'bank', 'url' => ['/komisi']],
                            ['label' => 'Fraksi', 'icon' => 'bank', 'url' => ['/fraksi']],
                            ['label' => 'Pimpinan Dewan', 'icon' => 'bank', 'url' => ['/pimpinan-dewan']],

                        ],
                    ],
                    
                    ['label' => 'Pengaturan Slider', 'icon' => 'desktop', 'url' => ['/slider']],
                    [
                        'label' => 'Manajemen Kategori',
                        'icon' => 'bars',
                        'url' => '#',
                        "items" => [
                                ['label' => 'Kategori Badan', 'icon' => 'cloud-upload', 'url' => ['/kategori-badan']],
                                ['label' => 'Kategori Fraksi', 'icon' => 'cloud-upload', 'url' => ['/kategori-fraksi']],
                                ['label' => 'Kategori Komisi', 'icon' => 'cloud-upload', 'url' => ['/kategori-komisi']],
                                ['label' => 'Kategori Berita', 'icon' => 'cloud-upload', 'url' => ['/kategori-berita']],

                        ],
                    ],
                    ['label' => 'Manajemen User', 'icon' => 'users', 'url' => ['/user/admin']],
                    ['label' => 'Profil User', 'icon' => 'user', 'url' => ['/user/profile']],
                    ['label' => 'Info Akun', 'icon' => 'lock', 'url' => ['/user/account']],




                    [
                        'label' => 'Pengaturan Tampilan',
                        'icon' => 'bars',
                        'url' => '#',
                        "items" => [
                            ['label' => 'Kategori Posting', 'icon' => 'tv', 'url' => ['/posting-kategori']],
                        ],
                    ],

                    ['label' => 'Manajemen Galeri', 'icon' => 'folder-open-o', 'url' => ['/posting']],
                    ['label' => 'Data Instansi', 'icon' => 'bank', 'url' => ['/data-instansi']],

                ],
            ]
        ) ?>

    </section>

</aside>
