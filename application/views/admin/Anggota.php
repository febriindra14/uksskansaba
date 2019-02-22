<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<title>Anggota</title>
<section class='content-header'>
    <ol class='breadcrumb'>
        <li><a href='<?php echo base_url('administrator')?>'><i class='glyphicon glyphicon-home'></i> Home</a></li>
        <li class='active'>Data anggota</li>
    </ol>
</section>  
<section class='content'>   
    <div class='row'>
        <div class='col-xs-12'>
        <div class='box box-primary'>
            <div class='box-header with-border'>
                <h3 class='box-title'><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" title='tambah data' onclick="add_anggota()"><span class="glyphicon glyphicon-plus"></span> Tambah </a>
               <?php echo anchor(site_url('anggota/excel'), ' <i class="glyphicon glyphicon-print"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
                </h3>
            </div>
        <div class='box-body table-responsive'>
            <div id="reload">
         <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Kelas</th>
                    <th>Jabatan</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    $no=1;
                    foreach($anggota as $a){?>
                     <tr>
                         <td><?php echo $no++;?></td>
                         <td><?php echo $a->nama_lengkap;?></td>
                         <td><?php echo $a->jenis_kelamin;?></td>
                         <td><?php echo $a->kelas;?></td>
                         <td><?php echo $a->jabatan;?></td>
                         <td><?php echo $a->no_telp;?></td>
                         <td><?php echo $a->email;?></td>
                         <td><?php echo $a->alamat;?></td>
                                <td>
                                    <button class="btn btn-warning" title="edit" onclick="edit_anggota(<?php echo $a->kd_anggota;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                    <button class="btn btn-danger" title="hapus" onclick="delete_anggota(<?php echo $a->kd_anggota;?>)"><i class="glyphicon glyphicon-trash"></i></button>


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

                    <input type="hidden" name="kd_anggota" class="form-control">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama_lengkap" class="form-control" type="text" placeholder="nama" style="width:335px;" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-xs-3" >JK</label>
                        <div class="col-md-5">
                            <select name="jenis_kelamin" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                                <span class="help-block"></span>
                        </div>
                    </div>  
                <div class="form-group">
                        <label class="control-label col-xs-3" >Kelas</label>
                        <div class="col-md-5">
                            <select name="kelas" class="form-control">
                                <option value="">Pilih</option>
                                <option value="XII TKJ 1">XII TKJ 1</option>
                                <option value="XII TKJ 2">XII TKJ 2</option>
                                <option value="XII MM 1">XII MM 1</option>
                                <option value="XII MM 2">XII MM 2</option>
                                <option value="XII RPL 1">XII RPL 1</option>
                                <option value="XII RPL 2">XII RPL 2</option>
                                <option value="XII AK 1">XII AK 1</option>
                                <option value="XII AK 2">XII AK 2</option>
                                <option value="XII AK 3">XII AK 3</option>
                                <option value="XII AK 4">XII AK 4</option>
                                <option value="XII PS">XII PS</option>
                                <option value="XII AP 1">XII AP 1</option>
                                <option value="XII AP 2">XII AP 2</option>
                                <option value="XII PM 1">XII PM 1</option>
                                <option value="XII PM 2">XII PM 2</option>
                                <option value="XII PM 3">XII PM 3</option>
                                <option value="XI TKJ 1">XI TKJ 1</option>
                                <option value="XI TKJ 2">XI TKJ 2</option>
                                <option value="XI MM 1">XI MM 1</option>
                                <option value="XI MM 2">XI MM 2</option>
                                <option value="XI RPL 1">XI RPL 1</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI AK 1">XI AK 1</option>
                                <option value="XI AK 2">XI AK 2</option>
                                <option value="XI AK 3">XI AK 3</option>
                                <option value="XI AK 4">XI AK 4</option>
                                <option value="XI PS">XI PS</option>
                                <option value="XI AP 1">XI AP 1</option>
                                <option value="XI AP 2">XI AP 2</option>
                                <option value="XI PM 1">XI PM 1</option>
                                <option value="XI PM 2">XI PM 2</option>
                                <option value="XI PM 3">XI PM 3</option>
                                <option value="X TKJ 1">X TKJ 1</option>
                                <option value="X TKJ 2">X TKJ 2</option>
                                <option value="X MM 1">X MM 1</option>
                                <option value="X MM 2">X MM 2</option>
                                <option value="X RPL 1">X RPL 1</option>
                                <option value="X RPL 2">X RPL 2</option>
                                <option value="X AK 1">X AK 1</option>
                                <option value="X AK 2">X AK 2</option>
                                <option value="X AK 3">X AK 3</option>
                                <option value="X AK 4">X AK 4</option>
                                <option value="X PS">X PS</option>
                                <option value="X AP 1">X AP 1</option>
                                <option value="X AP 2">X AP 2</option>
                                <option value="X PM 1">X PM 1</option>
                                <option value="X PM 2">X PM 2</option>
                                <option value="X PM 3">X PM 3</option>
                            </select>
                                <span class="help-block"></span>
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
                <div class="form-group">
                        <label class="control-label col-xs-3">Telepon</label>
                        <div class="col-xs-9">
                            <input name="no_telp" class="form-control" type="text" placeholder="telepon" style="width:335px;" required>
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-xs-3" >Email</label>
                        <div class="col-xs-9">
                            <input name="email" class="form-control" type="text" placeholder="aku@gmail.com" style="width:335px;" required>
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-xs-3">Alamat</label>
                        <div class="col-xs-9">
                            <input name="alamat" class="form-control" type="text" placeholder="nama" style="width:335px;" required>
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


    function add_anggota()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_anggota(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('anggota/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="kd_anggota"]').val(data.kd_anggota);
            $('[name="nama_lengkap"]').val(data.nama_lengkap);
            $('[name="jenis_kelamin"]').val(data.jenis_kelamin);
            $('[name="kelas"]').val(data.kelas);
            $('[name="jabatan"]').val(data.jabatan);
            $('[name="no_telp"]').val(data.no_telp);
            $('[name="email"]').val(data.email);
            $('[name="alamat"]').val(data.alamat);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit anggota'); // Set title to Bootstrap modal title

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
        url = "<?php echo site_url('anggota/anggota_add')?>";
      }
      else
      {
        url = "<?php echo site_url('anggota/anggota_update')?>";
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

    function delete_anggota(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('anggota/anggota_delete')?>/"+id,
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