<div class="content-wrapper">
	<section class="content-header">
        <h1>Pesanan Form</h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?=site_url('admin/order') ?>"> Pesanan</a></li>
            <li class="active"> Form</li>
        </ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="box box-warning">
			<div class="box-body">
				<form id="myForm" method="post" action="<?=$form_action;?>">
					<div class="form-group">
						<label class="title">User</label>
            			<div class="control">
							<select name="id_user" id="id_user" class="form-control" data-placeholder="Pilih User" style="width:270px;">
								<option value="">-- Pilih User --</option>
								<?php foreach($user_list as $user){?>
									<option value="<?=$user->id;?>"><?=$user->nama;?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="title">Customer</label>
            			<div class="control">
							<select name="id_customer" id="id_customer" class="form-control" data-placeholder="Pilih Customer" style="width:270px;">
								<option value="">-- Pilih Customer --</option>
								<?php foreach($customer_list as $customer){?>
									<option value="<?=$customer->id;?>"><?=$customer->nama;?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="title">Produk</label>
            			<div class="control">
							<select name="id_produk" id="id_produk" class="form-control" data-placeholder="Pilih Produk" style="width:270px;">
								<option value="">-- Pilih Produk --</option>
								<?php foreach($produk_list as $produk){?>
									<option value="<?=$produk->id;?>"><?=$produk->nama;?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="title">Type Foto</label>
            			<div class="control">
							<select name="id_type" id="id_type" class="form-control" data-placeholder="Pilih Type" style="width:270px;">
								<option value="">-- Pilih Type --</option>
								<?php foreach($type_foto_list as $type_foto){?>
									<option value="<?=$type_foto->id;?>"><?=$type_foto->nama;?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="title">Tanggal Pemesanan</label>
            			<div class="control">
							<input type="text" class="form-control" id="tgl_order" value="" style="width:270px;">
		                </div>
					</div>
					<div class="form-group">
						<label class="title">Tanggal Konfirmasi</label>
            			<div class="control">
							<input type="text" class="form-control" id="tgl_konfirm" value="" style="width:270px;">
		                </div>
					</div>

			        <div class="form-button">
			            <button class="btn" type="reset">Reset Form</button>
			            <button class="btn btn-primary" type="submit">Submit Form</button>
			        </div>
				</form>
			</div>
		</div>
	</section>
</div>
<script type="text/javascript">
    $(function(){
        $("#myForm").validate({
			ignore: [],
		});
        $("button[type=reset]").click(function(){
            $("#myForm").trigger("reset");
            return false;
        });
    });
    $('#tgl_order').datepicker({
      autoclose: true
    });
    $('#tgl_konfirm').datepicker({
      autoclose: true
    });
</script>