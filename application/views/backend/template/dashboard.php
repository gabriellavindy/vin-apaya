<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Dashboard</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<!-- <div class="row">
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>150</h3>
						<p>New Orders</p>
					</div>
					<div class="icon">
						<i class="ion ion-bag"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<h3>53<sup style="font-size: 20px">%</sup></h3>
						<p>Bounce Rate</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>44</h3>
						<p>User Registrations</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-red">
					<div class="inner">
						<h3>65</h3>
						<p>Unique Visitors</p>
					</div>
					<div class="icon">
						<i class="ion ion-pie-graph"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div> -->
		<div style="margin:15px;">
	        <div class="control-panel">            
	            <a href="<?=site_url('admin/user');?>" class="cpanel">
	                <span class="fa-stack fa-2x">
	                  <i class="fa fa-circle fa-stack-2x"></i>
	                  <i class="fa fa-users fa-stack-1x fa-inverse"></i>
	                </span>
	                <strong>User</strong>
	            </a>
				<a href="<?=site_url('admin/customer');?>" class="cpanel">
	                <span class="fa-stack fa-2x">
	                  <i class="fa fa-circle fa-stack-2x"></i>
	                  <i class="fa fa-user fa-stack-1x fa-inverse"></i>
	                </span>
	                <strong>Customer</strong>
	            </a>			
				<a href="<?=site_url('admin/jenis_produk');?>" class="cpanel">
	                <span class="fa-stack fa-2x">
	                  <i class="fa fa-circle fa-stack-2x"></i>
	                  <i class="fa fa-suitcase fa-stack-1x fa-inverse"></i>
	                </span>
	                <strong>Jenis Produk</strong>
	            </a>			
				<a href="<?=site_url('admin/produk');?>" class="cpanel">
	                <span class="fa-stack fa-2x">
	                  <i class="fa fa-circle fa-stack-2x"></i>
	                  <i class="fa fa-table fa-stack-1x fa-inverse"></i>
	                </span>
	                <strong>Produk</strong>
	            </a>
				<a href="<?=site_url('admin/order');?>" class="cpanel">
	                <span class="fa-stack fa-2x">
	                  <i class="fa fa-circle fa-stack-2x"></i>
	                  <i class="fa fa-cart-arrow-down fa-stack-1x fa-inverse"></i>
	                </span>
	                <strong>Pesanan</strong>
	            </a>
				<a href="<?=site_url('admin/forum');?>" class="cpanel">
	                <span class="fa-stack fa-2x">
	                  <i class="fa fa-circle fa-stack-2x"></i>
	                  <i class="fa fa-comments fa-stack-1x fa-inverse"></i>
	                </span>
	                <strong>Forum</strong>
	            </a>
	        </div>
	    </div>
	</section>
</div>