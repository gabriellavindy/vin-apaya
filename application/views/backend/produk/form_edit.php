<div class="content-wrapper">
	<section class="content-header">
        <h1>Produk Form</h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?=site_url('admin/produk') ?>"> Produk</a></li>
            <li class="active"> Form</li>
        </ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="box box-warning">
			<div class="box-body">
				<form id="myForm" method="post" action="<?=$form_action;?>">
					<div class="form-group">
						<label class="title">Nama</label>
            			<div class="control">
							<input value="<?=$data->nama;?>" type="text" name="nama" class="inputbox" placeholder="Nama" size="40">
						</div>
					</div>
					<div class="form-group">
						<label class="title">Harga</label>
            			<div class="control">
							<input value="Rp. <?=$this->angka->rp($data->harga);?>" type="text" name="harga" class="inputbox" placeholder="Harga" size="40">
						</div>
					</div>
					<div class="form-group">
						<label class="title">Kualitas</label>
            			<div class="control">
							<select name="id_kualitas" id="id_kualitas" class="form-control" data-placeholder="Pilih Kualitas" style="width:270px;">
								<option value="">-- Pilih Kualitas --</option>
								<?php foreach($kualitas_list as $kualitas){?>
									<option value="<?=$kualitas->id;?>" <?=$kualitas->id==$data->id_kualitas ? 'selected' : '';?>><?=$kualitas->nama;?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="title">Jenis Produk</label>
            			<div class="control">
							<select name="id_jenis" id="id_jenis" class="form-control" data-placeholder="Pilih Jenis Produk" style="width:270px;">
								<option value="">-- Pilih Jenis Produk --</option>
								<?php foreach($jenis_produk_list as $jenis_produk){?>
									<option value="<?=$jenis_produk->id;?>" <?=$jenis_produk->id==$data->id_jenis ? 'selected' : '';?>><?=$jenis_produk->nama;?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="title">Keterangan</label>
            			<div class="control">
							<textarea name="keterangan" class="inputbox" placeholder="Keterangan" rows="3" style="width:270px;"><?=$data->keterangan;?></textarea>
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
</script>