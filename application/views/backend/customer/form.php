<div class="content-wrapper">
	<section class="content-header">
        <h1>Customer Form</h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?=site_url('admin/customer') ?>"> Customer</a></li>
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