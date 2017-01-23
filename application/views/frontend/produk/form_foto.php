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
                        <form id="myForm" method="post" action="<?=$form_action;?>" enctype="multipart/form-data">
                            <div class="control" style="padding-left:170px">
                                <input type="file" name="gambar" class="btn" accept="image/jpeg,image/png"/>
                            </div>
                            <br/>

                            <div class="submit-area text-center">
                                <div class="btn-group">
                                    <button class="btn btn-primary" type="submit">PESAN SEKARANG <i class="fa fa-angle-double-right"></i></button>
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
<script type="text/javascript">
    $(function(){
        $("#myForm").validate();
    });
</script>