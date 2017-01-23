<link rel="stylesheet" type="text/css" href="<?=base_url();?>/static/admin/plugins/fancybox/jquery.fancybox.css"/>
<script type="text/javascript" src="<?=base_url();?>/static/admin/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script language="javascript">
	$(function(){
		$('.fancybox').fancybox({
			padding:'0'
		});
    });
</script>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Gallery Pesanan</h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?=site_url('admin/order') ?>"> Pesanan</a></li>
            <li class="current">Gallery</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="table-container" style="background:#eee;">
        	<?php if($data_list){?>
        	<ul class="gallery-list">
    	   		<?php foreach($data_list as $data) { ?>
    	    		<li>
    	    			<div class="item">
                            <!-- <a href="<?=site_url('view_image/gallery/550/550/'.$data->file.'/foto.png');?>" class="thumbs fancybox" rel="gallery"><img src="<?=site_url('view_image/gallery/150/150/'.$data->file.'/foto.png');?>"></a> -->
    	    				<img src="<?=site_url('//file/'.$data->file);?>" width="250" height="250"></a>
    	    				<!-- <div class="title"><?=$data->nama;?></div> -->
    	    			</div>
    	    		</li>
    	   		<?php } ?>
        	</ul>
       		<?php }else{ ?>
       		<div style="margin:220px; text-align: center;">
       			<h4>-- Tidak ada foto --</h4>
       		</div>
       		<?php } ?>
        </div>
    </section>
</div>