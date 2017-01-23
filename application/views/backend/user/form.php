<div class="content-wrapper">
	<section class="content-header">
        <h1>User Form</h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?=site_url('admin/user') ?>"> User</a></li>
            <li class="active"> Form</li>
        </ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="box box-warning">
			<div class="box-body">
				<form id="myForm" method="post" action="<?=$form_action;?>">
					<div class="form-group">
						<label class="title">User Grup</label>
            			<div class="control">
							<select name="id_grup" id="id_grup" class="form-control" data-placeholder="Pilih Grup" style="width:270px;">
								<option value="">-- Pilih Grup --</option>
								<?php foreach($user_grup_list as $user_grup){?>
									<option value="<?=$user_grup->id;?>"><?=$user_grup->nama;?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="title">Username</label>
            			<div class="control">
							<input value="" type="text" name="username" class="inputbox" placeholder="Username" size="40">
						</div>
					</div>
					<div class="form-group">
						<label class="title">Password</label>
            			<div class="control">
							<input type="password" name="password" class="inputbox" placeholder="Password" size="40">
						</div>
					</div>
					<div class="form-group">
						<label class="title">Konfirmasi Password</label>
            			<div class="control">
							<input type="password" name="password2" class="inputbox" placeholder="Password" size="40">
						</div>
					</div>
					<div class="form-group">
						<label class="title">Nama</label>
            			<div class="control">
							<input value="" type="text" name="nama" class="inputbox" placeholder="Nama" size="40">
						</div>
					</div>

					<!-- input states -->
					<!-- <div class="form-group has-success">
						<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
						<input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
						<span class="help-block">Help block with success</span>
					</div>
					<div class="form-group has-warning">
						<label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input withwarning</label>
						<input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
						<span class="help-block">Help block with warning</span>
					</div>
					<div class="form-group has-error">
						<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input witherror</label>
						<input type="text" class="form-control" id="inputError" placeholder="Enter ...">
						<span class="help-block">Help block with error</span>
					</div> -->

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
			// rules: {
   //              username:{
			// 		remote:'<?=site_url('admin/user/validation/username/'.$data->id);?>'
			// 	},
			// 	nama:{
			// 		remote:'<?=site_url('admin/user/validation/nama/'.$data->id);?>'
			// 	},
			// 	<?php if(!$data){ ?>
			// 	password:{
			// 		required:true
			// 	},
			// 	<?php } ?>
			// 	password2: {
			// 		equalTo: "input[name=password]"
			// 	},
			// },
			// messages: {
   //              username:{
			// 		remote:'Username telah terdaftar sebelumnya'
			// 	},
			// 	nama:{
			// 		remote:'Nama user telah terdaftar sebelumnya'
			// 	},
			// 	password2:{
			// 		equalTo:'Password baru dan konfirmasi password harus sama'
			// 	},
			// },
			// onkeyup: false,
			// onclick: false,
			// onchange : false,
			// onfocusout : false
			// any other options and/or rules
		});
        $("button[type=reset]").click(function(){
            $("#myForm").trigger("reset");
            return false;
        });
    });
</script>