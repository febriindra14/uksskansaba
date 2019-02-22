<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<title>Obat</title>
<section class='content-header'>
    <ol class='breadcrumb'>
       <li><a href='<?php echo base_url('siswa')?>'><i class='glyphicon glyphicon-home'></i>  Home</a></li>
        <li class='active'>Data obat</li>
    </ol>
</section>  
<section class='content'>   
    <div class='row'>
        <div class='col-xs-12'>
        <div class='box box-primary'>
            <div class='box-header with-border'>
                <h3 class='box-title'><?php echo anchor(site_url('obat/excel'), ' <i class="glyphicon glyphicon-print"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
                </h3>
            </div>
        <div class='box-body table-responsive'>
            <div id="reload">
         <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Nama obat</th>
                    <th>Fungsi</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    $no=1;
                    foreach($obat as $a){?>
                     <tr>
                         <td><?php echo $no++;?></td>
                         <td><?php echo $a->nama_obat;?></td>
                         <td><?php echo $a->fungsi;?></td>
                         <td><?php echo $a->jenis_obat;?></td>
                         <td><?php echo $a->jumlah;?></td>
                      </tr>
                     <?php }?>                
            </tbody>
        </table>
                            </div>
                        </div> <!-- box body -->
               </div> <!-- box primary -->
        </div> <!-- col -->
    </div> <!-- row -->    
</section>    