<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<title>Pengurus</title>
<section class='content-header'>
    <ol class='breadcrumb'>
        <li><a href='<?php echo base_url('administrator')?>'><i class='glyphicon glyphicon-home'></i> Home</a></li>
        <li class='active'>Data pengurus</li>
    </ol>
</section>  
<section class='content'>   
    <div class='row'>
        <div class='col-xs-12'>
        <div class='box box-primary'>
            <div class='box-header with-border'>
                <h3 class='box-title'><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" title="tambah data" onclick="add_pengurus()"><span class="glyphicon glyphicon-plus"></span> Tambah </a>
                <?php echo anchor(site_url('pengurus/excel'), ' <i class="glyphicon glyphicon-print"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
                </h3>
            </div>
        <div class='box-body table-responsive'>
            <div id="reload">
         <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Nama </th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
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
                                <td>
                                    <button class="btn btn-warning" title="edit" onclick="edit_pengurus(<?php echo $a->id_pengurus;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                    <button class="btn btn-danger" title="hapus" onclick="delete_pengurus(<?php echo $a->id_pengurus;?>)"><i class="glyphicon glyphicon-trash"></i></button>


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

                    <input type="hidden" name="id_pengurus" class="form-control">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama_lengkap" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jabatan</label>
                        <div class="col-md-5">
                            <select name="jabatan" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Ketua">Ketua</option>
                                <option value="Wakil ketua">Wakil ketua</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Humas">Humas</option>
                            </select>
                                <span class="help-block"></span>
                        </div>
                    </div> 

                </div>

                <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true"><i class="fa fa-arrow-left"></i>Batal</button>
                    <button id="btnSave" onclick="save()" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
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


    function add_pengurus()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_pengurus(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('pengurus/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id_pengurus"]').val(data.id_pengurus);
            $('[name="nama_lengkap"]').val(data.nama_lengkap);
            $('[name="jabatan"]').val(data.jabatan);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit pengurus'); // Set title to Bootstrap modal title

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
          url = "<?php echo site_url('pengurus/pengurus_add')?>";
      }
      else
      {
        url = "<?php echo site_url('pengurus/pengurus_update')?>";
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

    function delete_pengurus(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('pengurus/pengurus_delete')?>/"+id,
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