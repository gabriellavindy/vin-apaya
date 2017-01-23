<div id="body" class="width">
    <section id="product-container">
        <article>
            <div class="row text-center">
                <h4>Pesan Produk</h4>
                <h2><?=$jenis->nama?></h2>
            </div>
            <div class="row">
                <div id="editor-area" class="col-sm-12">
                    <section id="product-editor">
                        <form id="myForm" method="post" action="<?=$form_action;?>">
                            <?php if(count($produk_list) > 1){ ?>
                                <div class="form-group">
                                    <div class="control">
                                        <select name="id_kualitas" id="id_kualitas" class="form-control" data-placeholder="Pilih Jenis Produk" style="width:575px;">
                                            <?php foreach($kualitas_list as $kualitas){?>
                                                <option value="<?=$kualitas->id;?>"><?=$kualitas->nama;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="control">
                                        <select name="id_type" id="id_type" class="form-control" data-placeholder="Pilih Type Foto" style="width:575px;">
                                            <?php foreach($type_list as $type){?>
                                                <option value="<?=$type->id;?>"><?=$type->nama;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="submit-area text-center">
                                <div class="btn-group">
                                    <button class="btn btn-primary" type="submit">LANJUT UPLOAD FOTO <i class="fa fa-angle-double-right"></i></button>
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