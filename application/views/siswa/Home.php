<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<title>Siswa</title>
<section class="content-header">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('siswa')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
        <div class="row">
    
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                <h3><?php echo $inventaris ?></h3> 
                  <p>Inventaris</p>
                </div>
                <div class="icon">
                  <i class="fa fa-wrench"></i>
                </div>
              <a href="<?php echo base_url('inventaris/alat');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                <h3><?php echo $buku ?></h3> 
                  <p>Buku kunjungan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
              <a href="<?php echo base_url('buku_kunjungan/buku');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                <h3><?php echo $proker ?></h3> 
                  <p>Kegiatan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-rocket"></i>
                </div>
              <a href="<?php echo base_url('proker/kegiatan');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                <h3><?php echo $obat ?></h3> 
                  <p>Obat</p>
                </div>
                <div class="icon">
                  <i class="fa fa-plus"></i>
                </div>
              <a href="<?php echo base_url('obat/medical');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                <h3><?php echo $pengurus ?></h3> 
                  <p>Pengurus</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list"></i>
                </div>
              <a href="<?php echo base_url('pengurus/pembesar');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

        </div><!-- /.row -->
</section><!-- /.content -->