<?php
defined('BASEPATH') OR exit ('No direct script access allowed');?>

<!DOCTYPE html>
<html>
    <head>
       
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/home.png');?>">

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style3.css');?>">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css');?>">
    </head>
    <body>
        <div class="wrapper">

            <div class="header">
                <h3 style="text-align: center;">UKS SMEA</h3>
            </div> 
            
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <ul class="list-unstyled components">
                    <li class="atas">MENU</li>

                    <li class="<?php if($page == 'administrator'){echo 'active';} ?>">
                        <a href="<?php echo base_url('administrator');?>"> <i class="glyphicon glyphicon-home"></i> Home</a>
                    </li>

                    <li class="<?php if($page == 'user'){echo 'active';} ?>">
                       <a href="<?php echo base_url('user');?>">
                           <i class="glyphicon glyphicon-user"></i> User
                       </a> 
                    </li>

                    <li class="<?php if($page == 'inventaris'){echo 'active';} ?>">
                        <a href="<?php echo base_url('inventaris');?>">
                          <i class="glyphicon glyphicon-wrench"></i> Inventaris
                        </a>
                    </li>
                    
                    <li class="<?php if($page == 'buku_kunjungan'){echo 'active';} ?>">
                          <a href="<?php echo base_url('buku_kunjungan');?>">
                             <i class="glyphicon glyphicon-book"></i> Buku kunjungan
                          </a>
                    </li>

                    <li class="<?php if($page == 'proker'){echo 'active';} ?>">
                          <a href="<?php echo base_url('proker');?>">
                            <i class="glyphicon glyphicon-tag"></i> Proker
                          </a>
                    </li>

                    <li class="<?php if($page == 'anggota'){echo 'active';} ?>">
                        <a href="<?php echo base_url('anggota');?>">
                          <i class="glyphicon glyphicon-user"></i> Anggota
                        </a>
                    </li>
                    <li class="<?php if($page == 'obat'){echo 'active';} ?>">
                        <a href="<?php echo base_url('obat');?>">
                          <i class="glyphicon glyphicon-plus"></i> Obat
                        </a>
                    </li>
                    <li class="<?php if($page == 'pengurus'){echo 'active';} ?>">
                        <a href="<?php echo base_url('pengurus');?>">
                          <i class="glyphicon glyphicon-list"></i> Pengurus
                        </a>
                    </li>
                    <li class="<?php if($page == 'profil'){echo 'active';} ?>">
                        <a href="<?php echo base_url('profil');?>">
                          <i class="glyphicon glyphicon-th"></i> Profil
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <i class="glyphicon glyphicon-list"></i>
                            </button>
                        </div> 
                    
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url('login/logout');?>">Logout</a></li>
                        </ul>

                    </div>
                </nav>

            <section class="konten">
                <?php echo $administrator;?>    
            </section>    
            
        <footer class="footer" style="height: 32px; padding: 0 20px;">
            <strong>2019 - <a href="https://www.instagram.com/ptravahomebase">uksskansaba</a></strong>
        </footer>  
           
            </div>

        </div>

        <!-- jQuery CDN -->
         <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-1.10.2.min.js');?>"></script>
         <!-- Bootstrap Js CDN -->
         <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

         <script type="text/javascript" src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js');?>"></script>
         <script type="text/javascript" src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js');?>"></script>

         <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });

            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
         </script>
    </body>
</html>