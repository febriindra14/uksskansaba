<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<title>Obat</title>
<section class='content-header'>
    <ol class='breadcrumb'>
        <li><a href='<?php echo base_url('administrator')?>'><i class='glyphicon glyphicon-home'></i> Home</a></li>
        <li class='active'>Data obat</li>
    </ol>
</section>  
<section class='content'>   
    <div class='row'>
        <div class='col-xs-12'>
        <div class='box box-primary'>
            <div class='box-header with-border'>
                <h3 class='box-title'><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" title="tambah data" onclick="add_obat()"><span class="glyphicon glyphicon-plus"></span> Tambah </a>
                <?php echo anchor(site_url('obat/excel'), ' <i class="glyphicon glyphicon-print"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
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
                    <th>Jenis obat</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
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
                                <td>
                                    <button class="btn btn-warning" title="edit" onclick="edit_obat(<?php echo $a->kd_obat;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                    <button class="btn btn-danger" title="hapus" onclick="delete_obat(<?php echo $a->kd_obat;?>)"><i class="glyphicon glyphicon-trash"></i></button>


                                </td>
                      </tr>
                     <?php }?>                
            </tbody>
        </table>

        <!-- MODAL ADD -->
        <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah data</h3>
            </div>
             <form action="#" id="form" class="form-horizontal">   
                <div class="modal-body">

                    <input type="hidden" name="kd_obat" class="form-control">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama obat</label>
                        <div class="col-xs-9">
                            <input name="nama_obat" class="form-control" type="text" placeholder="obat" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Fungsi</label>
                        <div class="col-xs-9">
                            <input name="fungsi" class="form-control" type="text" placeholder="fungsi" style="width:335px;" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis obat</label>
                        <div class="col-md-5">
                            <select name="jenis_obat" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Cair">Cair</option>
                                <option value="Padat">Padat</option>
                            </select>
                                <span class="help-block"></span>
                        </div>
                    </div>  
                <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah</label>
                        <div class="col-xs-9">
                            <input name="jumlah" class="form-control" type="text" placeholder="jumlah" style="width:100px;" required>
                        </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true"><i class="fa fa-arrow-left"></i>Batal</button>
                    <button id="btnSave" onclick="save()" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
                
              </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

                            </div>
                        </div> <!-- box body -->
               </div> <!-- box primary -->
        </div> <!-- col -->
    </div> <!-- row -->    
</section>    

<script type="text/javascript">
  $(document).ready( function () {
      $('#mytable').DataTable();
  } );
    var save_method; //for save method string
    var table;


    function add_obat()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_obat(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('obat/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="kd_obat"]').val(data.kd_obat);
            $('[name="nama_obat"]').val(data.nama_obat);
            $('[name="fungsi"]').val(data.fungsi);
            $('[name="jenis_obat"]').val(data.jenis_obat);
             $('[name="jumlah"]').val(data.jumlah);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Obat'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save()
    {
      var url;
      if(save_method == 'add')
      {
        url = "<?php echo site_url('obat/obat_add')?>";
      }
      else
      {
        url = "<?php echo site_url('obat/obat_update')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function delete_obat(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('obat/obat_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }
  </script>