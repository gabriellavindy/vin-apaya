<div class="content-wrapper">
	<section class="content-header">
        <h1>Forum</h1>
        <ul class="breadcrumb">
            <li><a href="<?=site_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?=site_url('admin/forum') ?>"> Forum</a></li>
            <li class="active"> Form</li>
        </ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="box box-warning">
			<div class="box-body">
				<form id="myForm" method="post" action="<?=$form_action;?>">
					<div class="form-group">
						<label class="title">Email</label>
            			<div class="control">
							<input value="" type="text" name="email" class="inputbox" placeholder="Email" size="40">
						</div>
					</div>
					<div class="form-group">
						<label class="title">Subjek</label>
            			<div class="control">
							<input value="" type="text" name="subjek" class="inputbox" placeholder="Subjek" size="40">
						</div>
					</div>
					<div class="form-group">
						<label class="title">Pesan</label>
            			<div class="control">
							<textarea name="pesan" class="inputbox" placeholder="Pesan" rows="3" style="width:270px;"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="title">Tanggal</label>
            			<div class="control">
							<input type="text" class="form-control" id="tanggal" value="" style="width:270px;">
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
	    $('#tanggal').datepicker({
	      autoclose: true
	    });
    });
</script>