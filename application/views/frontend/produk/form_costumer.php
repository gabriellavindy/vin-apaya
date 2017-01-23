<div id="body" class="width">
    <section id="product-container">
        <article>
            <div class="row text-center">
                <h4>Pesan Produk</h4>
                <h2><?=$jenis->nama?></h2>
            </div>
            <div class="row text-center">
                <div id="editor-area" class="col-sm-12">
                    <section id="product-editor">
                        <form id="myForm" method="post" action="<?=$form_action;?>">
                            <div class="box-body">
                                <h4>Informasi Pengirim</h4>
                                <div class="form-group">
                                    <label class="title">Nama</label>
                                    <div class="control">
                                        <input value="" type="text" name="nama" class="inputbox" placeholder="Nama" size="40">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="title">Alamat</label>
                                    <div class="control">
                                        <input value="" type="text" name="alamat" class="inputbox" placeholder="Alamat" size="40">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="title">Kota</label>
                                    <div class="control">
                                        <input value="" type="text" name="kota" class="inputbox" placeholder="Kota" size="40">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="title">Provinsi</label>
                                    <div class="control">
                                        <input value="" type="text" name="provinsi" class="inputbox" placeholder="Provinsi" size="40">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="title">Kode Pos</label>
                                    <div class="control">
                                        <input value="" type="text" name="kode_pos" class="inputbox" placeholder="Kode Pos" size="40">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="title">No HP</label>
                                    <div class="control">
                                        <input value="" type="text" name="no_hp" class="inputbox" placeholder="No HP" size="40">
                                    </div>
                                </div>
                            </div>

                            <div class="submit-area text-center">
                                <div class="btn-group">
                                    <button class="btn btn-primary" type="submit">LANJUT ORDER <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </article>
    </section>
    <div class="clear"></div>
</div>