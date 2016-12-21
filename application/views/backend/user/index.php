<script language="javascript">
    $(function(){
         <?php if($notif){?>
             <?php if($notif['type'] == 'success'){?>
                noticeSuccess();
             <?php }else{?>
                noticeFailed();
             <?php } ?>
         <?php } ?>
    });
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>User</h1>
        <ul class="breadcrumb">
            <li><a href="<?=site_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">User</li>
        </ul>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="<?=site_url('admin/user/add');?>" class="btn"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>

                    <div class="box-body">
                        <table id="user_table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5" align="center">No</th>
                                    <th width="30px">Aksi</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Nama Group</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(count($data_list)){?>
                                    <?php $i=1;?>
                                    <?php foreach($data_list as $data){?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td>
                                                <a href="<?=site_url("admin/user/edit/{$data->id}");?>" class="tiptip" title="Edit"><i class="fa fa-edit"></i></a>
                                                <?php if($data->id_grup != 1){?>
                                                    <a href="<?=site_url("admin/user/delete/{$data->id}");?>" class="tiptip dialog confirm" title="Delete" data-title="Konfirmasi Delete" data-modal="true" data-message="Apakah Anda Yakin ingin menghapus user ini?"><i class="fa fa-trash-o"></i></a>
                                                <?php } ?>
                                            </td>
                                            <td><?=$data->username;?></td>
                                            <td><?=$data->nama;?></td>
                                            <td><?=$data->nama_grup;?></td>
                                        </tr>
                                    <?php } ?>
                                <?php }else{ ?>
                                    <tr>
                                        <td colspan="6">Tidak ada data</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(function () {
        $('#user_table').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
    });
</script>