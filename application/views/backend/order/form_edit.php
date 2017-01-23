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
									<option value="<?=$user->id;?>" <?=$user->id==$data->id_user ? 'selected' : '';?>><?=$user->nama;?></option>
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
									<option value="<?=$customer->id;?>" <?=$customer->id==$data->id_customer ? 'selected' : '';?>><?=$customer->nama;?></option>
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
									<option value="<?=$produk->id;?>" <?=$produk->id==$data->id_produk ? 'selected' : '';?>><?=$produk->nama;?></option>
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
									<option value="<?=$type_foto->id;?>" <?=$type_foto->id==$data->id_type ? 'selected' : '';?>><?=$type_foto->nama;?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="title">Tanggal Pemesanan</label>
            			<div class="control">
							<input type="text" class="form-control" id="tanggal_order" name="tanggal_order" value="<?=$this->waktu->mysql_to_js_date($data->tanggal_order);?>" style="width:270px;">
		                </div>
					</div>
					<div class="form-group">
						<label class="title">Tanggal Konfirmasi</label>
            			<div class="control">
							<input type="text" class="form-control" id="tanggal_konfirmasi" name="tanggal_konfirmasi" value="<?=$this->waktu->mysql_to_js_date($data->tanggal_konfirmasi);?>" style="width:270px;">
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
        $("#myForm").validate();
        $("button[type=reset]").click(function(){
            $("#myForm").trigger("reset");
            return false;
        });
    });
    $('#tanggal_order').datepicker({
        defaultDate: "+1w",
        dateFormat:'dd/mm/yyyy',
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 1,
        onClose: function( selectedDate ) {
            $(this).prev('input').datepicker( "option", "maxDate", selectedDate );
        }
    });
    $('#tanggal_konfirmasi').datepicker({
        defaultDate: "+1w",
        dateFormat:'dd/mm/yyyy',
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 1,
        onClose: function( selectedDate ) {
            $(this).prev('input').datepicker( "option", "maxDate", selectedDate );
        }
    });
</script>