<div id="intro">
    <div class="width">
        <div class="intro-content">
            <h2>Polaroid</h2>
            <p>Cetak Polaroid Lebih Mudah</p>
            <p>
                <a href="#" class="button button-slider">Cetak Sekarang</a>
            </p>
        </div>
    </div>
</div>
<div id="body" class="width">
    <section id="content">
        <article>
            <div class="block-3-container section-container order-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 block-3 section-description text-center">
                            <h3>Cetak Foto Mudah, Tanpa Keluar Rumah</h3>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12 block-3">
                            <h5>Apaya memberikan layanan termudah untuk mencetak foto-foto hasil jepretan kamu dan menyajikannya dalam bentuk produk-produk unik dengan kualitas terbaik hanya untuk kamu. Kamu dapat mencetak foto Instagram, Facebook, maupun foto dari gadget kamu hanya dalam 4 langkah mudah. </h5>
                        </div>
                        <div class="col-sm-3 block-3-box wow fadeInUp">
                            <div class="block-3-box-icon">
                                <span aria-hidden="true" class="icon_pencil"></span>
                            </div>
                            <h4>Masuk / Daftar</h4>
                            <h5>Masuk menggunakan akun Instagram, Facebook, maupun mendaftarkan akun Pictalogi baru (opsional).</h5>
                        </div>
                        <div class="col-sm-3 block-3-box wow fadeInDown">
                            <div class="block-3-box-icon">
                                <span aria-hidden="true" class="icon_camera"></span>
                            </div>
                            <h4>Pilih Foto</h4>
                            <h5>Tentukan produk yang kamu inginkan, pilih atau upload foto-foto kamu, lalu isikan alamat pengiriman.</h5>
                        </div>
                        <div class="col-sm-3 block-3-box wow fadeInUp">
                            <div class="block-3-box-icon">
                                <span aria-hidden="true" class="icon_tags"></span>
                            </div>
                            <h4>Bayar & Konfirmasi</h4>
                            <h5>Bayar pesanan kamu melalui transfer ke rekening Bank yang tersedia, lalu konfirmasikan kepada tim kami.</h5>
                        </div>
                        <div class="col-sm-3 block-3-box wow fadeInDown">
                            <div class="block-3-box-icon">
                                <span aria-hidden="true" class="icon_gift"></span>
                            </div>
                            <h4>Nikmati Hasilnya</h4>
                            <h5>Tunggu pesanan kamu di rumah, untuk menikmati hasil cetak foto berkualitas tinggi bersama teman dan keluarga.</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produk -->
            <div class="portfolio-container section-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 portfolio section-description text-center">
                            <h3>Produk Unggulan</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 portfolio-filters wow fadeInUp">
                            <!-- <a href="#" class="filter-all active">All</a>  -->
                            <?php foreach($jenis_produk_list as $jenis_produk){?>
                                | <a href="#" class="filter-<?=$jenis_produk->nama?>"><?=$jenis_produk->nama?></a> |
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 portfolio-masonry">
                            <img src="<?php echo base_url() ?>static/pages/img/backgrounds/page1.jpg" alt="" data-at2x="<?php echo base_url() ?>static/pages/img/backgrounds/page1.jpg">
                            <img src="<?php echo base_url() ?>static/pages/img/backgrounds/page2.jpg" alt="" data-at2x="<?php echo base_url() ?>static/pages/img/backgrounds/page2.jpg">
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-12 portfolio-masonry">
                            <div class="col-sm-4 portfolio-box typography">
                                <img src="<?php echo base_url() ?>static/pages/img/portfolio/d.jpg" alt="" data-at2x="<?php echo base_url() ?>static/pages/img/portfolio/d.jpg">
                                <div class="portfolio-box-text-container">
                                    <div class="portfolio-box-text">
                                        <p>Typography Color</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 portfolio-box typography">
                                <img src="<?php echo base_url() ?>static/pages/img/portfolio/e.jpg" alt="" data-at2x="<?php echo base_url() ?>static/pages/img/portfolio/e.jpg">
                                <div class="portfolio-box-text-container">
                                    <div class="portfolio-box-text">
                                        <p>Typography</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 portfolio-box typography">
                                <img src="<?php echo base_url() ?>static/pages/img/portfolio/f.jpg" alt="" data-at2x="<?php echo base_url() ?>static/pages/img/portfolio/f.jpg">
                                <div class="portfolio-box-text-container">
                                    <div class="portfolio-box-text">
                                        <p>Typography Quote</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- Alasan -->
            <div class="block-3-container section-container order-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 block-3 section-description text-center">
                            <h3>Alasan Pelanggan Memilih Kami</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 block-3-box">
                            <div class="col-sm-2">
                                <div class="block-3-box-icon-alasan">
                                    <span aria-hidden="true" class="fa fa-print"></span>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h4>Kualitas Cetak Tinggi</h4>
                                <h5>Kami menggunakan printer standar percetakan dengan resolusi tinggi dan kertas berkualitas.</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 block-3-box">
                            <div class="col-sm-2">
                                <div class="block-3-box-icon-alasan">
                                    <span aria-hidden="true" class="fa fa-magic"></span>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h4>Mudah dan Praktis</h4>
                                <h5>Tinggal masuk, pilih produk, pilih foto/upload, bayar, lalu tunggu hasilnya di rumahmu.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 block-3-box">
                            <div class="col-sm-2">
                                <div class="block-3-box-icon-alasan">
                                    <span aria-hidden="true" class="fa fa-cogs"></span>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h4>Pemrosesan Otomatis</h4>
                                <h5>Engine pemroses otomatis yang mempercepat proses dan meminimalisir human-error. </h5>
                            </div>
                        </div>
                        <div class="col-sm-6 block-3-box">
                            <div class="col-sm-2">
                                <div class="block-3-box-icon-alasan">
                                    <span aria-hidden="true" class="fa fa-truck"></span>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h4>Bebas Ongkos Kirim</h4>
                                <h5>Hampir seluruh produk kami bebas ongkos kirim ke seluruh Indonesia tanpa terkecuali.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <div class="clear"></div>
</div>