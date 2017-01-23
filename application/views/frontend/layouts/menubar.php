<div class="width">
	<h1><a href="<?php echo site_url("home") ?>"><strong>APAYA</strong></a></h1>
	<nav>
		<ul class="sf-menu dropdown">		
    		<li class="selected"><a href="<?php echo site_url("home") ?>">Home</a></li>
        	<li><a href="#">Product</a>
        		<ul>
                    <?php foreach($jenis_produk_list as $jenis_produk){?>
            		  <li><a href="<?php echo site_url("produk/index/$jenis_produk->id") ?>"><?=$jenis_produk->nama?></a></li>
                    <?php } ?>
            	</ul>
        	</li>
			<li><a href="#">Order</a>
				<ul>
            		<li><a href="<?php echo site_url("order/cara_order") ?>">Cara Pemesanan</a></li>
               		<li><a href="<?php echo site_url("order/syarat_kondisi") ?>">Syarat & Kondisi</a></li>
            	</ul>
        	</li>
            <!-- <li><a href="<?php echo site_url("blog") ?>">Blog</a></li> -->
			<li><a href="<?php echo site_url("about") ?>">About Us</a></li>
   		</ul>			
		<div class="clear"></div>
	</nav>
</div>