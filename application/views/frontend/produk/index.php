<div id="intro">
    <div class="width">
        <div class="intro-content">
            <h3>Cetak <?=$jenis->nama?> Tidak Pernah</h3>
            <h3>Semudah Ini Selain di Apaya</h3><br><br>
            <p>
                <a href="<?php echo site_url("produk/pesan/$jenis->id") ?>" class="button button-slider">Buat Foto <?=$jenis->nama?>mu</a>
            </p>
        </div>
    </div>
</div>
<div id="body" class="width">
    <section id="product-container">
        <article>
            <div class="portfolio-container section-container">
                <div class="container">
                    <div class="row">
                        <div class="product-image-big">
                            <img src="<?php echo base_url() ?>static/pages/img/produk/<?=$jenis->id?>.jpg" width="600" height="600">
                        </div>
                        <div class="product-detail-type">
                            <div class="product-brief" style="background-image: url('<?php echo base_url() ?>static/pages/img/produk/polaroid2.jpg');">
                                <div class="pattern-cover text-center">
                                    <h3><?=$jenis->nama?></h3>
                                    <p><?=$jenis->keterangan?></p>
                                </div>
                            </div>
                            <div class="product-double-description">
                                <?php if(count($produk_list) > 1){ ?>
                                    <?php foreach($produk_list as $produk){ ?>
                                        <div class="col-sm-6 product-description bg-green">
                                            <h3><?=$produk->nama_kualitas?></h3>
                                            <p><?=$produk->keterangan?></p>
                                            <h5>Rp. <?=$this->angka->rp($produk->harga);?></h5>
                                            <div class="product-action">
                                                <?php foreach($type_list as $type){ ?>
                                                    <a class="btn btn-sm btn-transparant-white" href="<?php echo site_url("produk/pesan/$produk->id_jenis/$type->id") ?>"><i class="fa fa-angle-right"> <?=$type->nama?></i></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php }else{ ?>
                                    <?php foreach($produk_list as $produk){ ?>
                                        <div class="col-sm-12 product-description bg-blue" style="width:100%">
                                            <h3><?=$produk->nama_kualitas?></h3>
                                            <p><?=$produk->keterangan?></p>
                                            <h5>Rp. <?=$this->angka->rp($produk->harga);?></h5><br>
                                            <div class="product-action">
                                                <a class="btn btn-sm btn-transparant-white" href="<?php echo site_url("produk/pesan/$produk->id_jenis") ?>"><i class="fa fa-angle-right"> Pesan</i></a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <div class="clear"></div>
</div>