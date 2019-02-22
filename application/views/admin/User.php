<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<title>User</title>
<section class='content-header'>
    <ol class='breadcrumb'>
        <li><a href='<?php echo base_url('administrator')?>'><i class='glyphicon glyphicon-home'></i> Home</a></li>
        <li class='active'>Data user</li>
    </ol>
</section>  
<section class='content'>   
    <div class='row'>
        <div class='col-xs-12'>
        <div class='box box-primary'>
            <div class='box-header with-border'>
                <h3 class='box-title'>
                <?php echo anchor(site_url('#'), ' <i class="glyphicon glyphicon-print"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
                </h3>
            </div>
        <div class='box-body table-responsive'>
            <div id="reload">
         <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    $no=1;
                    foreach($user as $a){?>
                     <tr>
                         <td><?php echo $no++;?></td>
                         <td><?php echo $a->username;?></td>
                         <td><?php echo $a->nama_lengkap;?></td>
                         <td><?php echo $a->email;?></td>
                         <td><?php echo $a->no_telp;?></td>
                                <td>
                                    <button class="btn btn-warning" title="edit"><i class="glyphicon glyphicon-pencil"></i></button>
                                    <button class="btn btn-danger" title="hapus"><i class="glyphicon glyphicon-trash"></i></button>
                                </td>
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