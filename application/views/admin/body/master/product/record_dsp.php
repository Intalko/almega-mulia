<?php $udata = $this->session->userdata('user_data'); //print_r($udata);exit;?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar
      <small>produk</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Master</li>
      <li class="active"><a href="<?=base_url()?>kategori">Daftar produk</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Kategori</th>
                  <th>Produk</th>
                  <th>Tanggal Buat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($data)){?>
                  <?php foreach($data as $val){?>
                    <tr>
                      <td><?=$val['nama_kategori']?></td>
                      <td><?=$val['nama_produk']?></td>
                      <td><?=$val['date_created']?></td>
                      <td align="center">
                        <a href="<?=base_url()?>Admin/Seo/Perbarui/1/<?=$val['id']?>" class="btn btn-primary">Perbarui SEO</a>
                        <a href="<?=base_url()?>Admin/Product/Perbarui/<?=$val['id']?>" class="btn btn-primary">Perbarui</a>
                        <a href="<?=base_url()?>Admin/Product/Delete/<?=$val['id']?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data?')" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  <?php }?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>kategori</th>
                  <th>produk</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
