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
        <h1>Pesanan</h1>
        <ul class="breadcrumb">
            <li><a href="<?=site_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Pesanan</li>
        </ul>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="<?=site_url('admin/order/add');?>" class="btn"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>

                    <div class="box-body">
                        <table id="order_table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5px" align="center">No</th>
                                    <th width="85px">Aksi</th>
                                    <th>Nama Customer</th>
                                    <th>Produk</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Tanggal Konfirmasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(count($data_list)){?>
                                    <?php $i=1;?>
                                    <?php foreach($data_list as $data){?>
                                        <tr <?php if($data->finish==1){;?>style="background-color: #ffd0d0;<?php } ?>">
                                            <td><?=$i++;?></td>
                                            <td>
                                                <a href="<?=site_url("admin/order/edit/{$data->id}");?>" class="tiptip" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="<?=site_url("admin/order/delete/{$data->id}");?>" class="tiptip dialog confirm" title="Delete" data-title="Konfirmasi Delete" data-modal="true" data-message="Apakah Anda Yakin ingin menghapus produk ini?"><i class="fa fa-trash-o"></i></a>
                                                <?php if($data->finish==0){?>
                                                    <a href="<?=site_url("admin/order/finish/{$data->id}/1");?>" class="tiptip dialog confirm" title="Finish" data-title="Konfirmasi Finish" data-modal="true" data-message="Apakah Anda yakin data sudah finish?"><i class="fa fa-check-square-o"></i></a>
                                                <?php }else{?>
                                                    <a href="<?=site_url("admin/order/finish/{$data->id}/0");?>" class="tiptip dialog confirm" title="Unfinish" data-title="Konfirmasi Unfinish" data-modal="true" data-message="Apakah Anda yakin data belum finish?"><i class="fa fa-check text-success"></i></a>
                                                <?php }?>
                                                 <a href="<?=site_url("admin/order/gallery/{$data->id}");?>" class="tiptip " title="Gallery"><i class="fa fa-picture-o"></i></a>
                                            </td>
                                            <td><?=$data->nama_customer;?></td>
                                            <td><?=$data->nama_produk;?></td>
                                            <td><?=$data->tanggal_order;?></td>
                                            <td><?=$data->tanggal_konfirmasi;?></td>
                                        </tr>
                                    <?php } ?>
                                <?php }else{ ?>
                                    <tr>
                                        <td colspan="3">Tidak ada data</td>
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
        $('#order_table').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
    });
</script>