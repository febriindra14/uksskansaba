<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<title>Pengurus</title>
<section class='content-header'>
    <ol class='breadcrumb'>
         <li><a href='<?php echo base_url('siswa')?>'><i class='glyphicon glyphicon-home'></i> Home</a></li>
        <li class='active'>Data pengurus</li>
    </ol>
</section>  
<section class='content'>   
    <div class='row'>
        <div class='col-xs-12'>
        <div class='box box-primary'>
            <div class='box-header with-border'>
                <h3 class='box-title'><?php echo anchor(site_url('pengurus/excel'), ' <i class="glyphicon glyphicon-print"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
                </h3>
            </div>
        <div class='box-body table-responsive'>
            <div id="reload">
         <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Nama pengurus</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    $no=1;
                    foreach($pengurus as $a){?>
                     <tr>
                         <td><?php echo $no++;?></td>
                         <td><?php echo $a->nama_lengkap;?></td>
                         <td><?php echo $a->jabatan;?></td>
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