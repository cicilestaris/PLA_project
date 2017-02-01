<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>SINDANISTRA</title>

     <!-- Bootstrap -->
    <link href="<?php echo base_url('asset/admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('asset/admin/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('asset/admin/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('asset/admin/vendors/iCheck/skins/flat/green.css'); ?>" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('asset/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('asset/admin/vendors/jqvmap/dist/jqvmap.min.css'); ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('asset/admin/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('asset/admin/build/css/custom.min.css'); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo site_url('Home/index');?>" class="site_title"><i class="fa fa-paw"></i> <span>SINDANISTRA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="asset/admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?php echo site_url('Home/table_nms');?>"><i class="fa fa-table"></i> NMS </a>
                  <li><a href="<?php echo site_url('Link');?>"><i class="fa fa-table"></i> Transport Users </a></li>
                  <li><a href="<?php echo site_url('Report');?>"><i class="fa fa-table"></i> Report </a></li>
				  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="asset/admin/production/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sistem Inventaris Data Teknis Transport</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
          
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data NMS</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                      </div>
                    <td>
                       <a href="<?php echo site_url('Home/insert_single_nms');?>"><button type="submit" class="btn btn-primary">Insert Single Data</button></a>
                    </td>
                     <td>
                       <a href="<?php echo site_url('Home/insert_double_nms');?>"><button type="submit" class="btn btn-success">Insert Multiple Data</button></a>
                      </td>
             
                  <div class="x_content"><table id="datatable-buttons" class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NMS</th>
                          <th>Lokasi</th>
                          <th>Merk</th>
                          <th>NE</th>
                          <th>Rak</th>
                          <th>Shelf</th>
                          <th>Slot</th>
                          <th>Port</th>
                          <th>Board</th>
                    <!--       <th>Kapasitas</th> -->
                          <th>Frekuensi</th>
                          <th>User</th>
                        <!--   <th>Deskripsi</th> -->
                          <th>Edit data</th>
                        </tr>
                      </thead>


                      <tbody>
            <?php 
            $no = 0;
            foreach($port as $portt){
              $no++;
              $i=$portt->id_merk;
                if($portt->board=="11LTX" || $portt->board=="15LTX" || $portt->board=="52TQX" || $portt->board=="55TQX" || $portt->board=="55TQX(STND)" || $portt->board=="96LTX" || $portt->board=="TQX" || $portt->board=="V2T210"){
                  $kap = "10gb";
                }elseif($portt->board=="12LSC"){
                  $kap = "100gb";
                }elseif($portt->board=="12TDX") {
                  $kap = "2x100gb";
                }elseif($portt->board=="52TOM" || $portt->board=="TOM") {
                  $kap = "1gb";
                }elseif($portt->board=="55TTX"){
                  $kap = "10x10gb";
                }elseif ($portt->board=="96LSC" || $portt->board=="V1T410") {
                  $kap = "100gb";
                }
              ?>
                        <tr>
                          <td><?php echo $no?></td>
                          <td><?php echo $portt->nama_nms?></td>
                          <td><?php echo $portt->nama_lokasi?></td>
                          <td><?php echo $merk[$i-1]->nama_merk?></td>
                          <td><?php echo $portt->nama_ne?></td>
                          <td><?php echo $portt->rack?></td>
                          <td><?php echo $portt->shelf?></td>
                          <td><?php echo $portt->slot?></td>
                          <td><?php echo $portt->port?></td>
                          <td><?php echo $portt->board?></td>
          <!--                 <td><?php echo $kap?></td> -->
                          <td><?php echo $portt->frekuensi?></td>
                          <td><?php echo $portt->user?></td>
                         <!--  <td><?php echo wordwrap($portt->deskripsi,15,"<br>\n")?></td> -->
                          <td>
                          <a href="<?php echo site_url('Home/edit_nms/'.$portt->id_port);?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="<?php echo site_url('Home/delete_nms/'.$portt->id_port);?>" class="btn btn-danger btn-xs" onclick="return doconfirm();"><i class="fa fa-trash-o"></i> Delete </a>
                          <!-- Trigger the modal with a button -->
                          <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Details<?php echo $portt->id_port?></button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Data Transport Detail </h4>
                            </div>
                            <div class="modal-body">
                              <p>Data Transport</p>
                                <table>
                                  <tr>
                                    <td>NO</td>
                                    <td>:</td>
                                    <td><?php echo $portt->id_port?></td>
                                  </tr>
                                  <tr>
                                    <td>NMS</td>
                                    <td>:</td>
                                    <td><?php echo $portt->nama_nms?></td>
                                  </tr>
                                  <tr>
                                    <td>NMS</td>
                                    <td>:</td>
                                    <td><?php echo $portt->user?></td>
                                  </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                         </td>
                        </tr>
                <?php }?>  
                      </tbody>
                    </table>
                    <br />
					<ul class="pagination">
                          <li ><?php echo $this->pagination->create_links(); ?></li>
                    </ul
					<br />
					<br />
                 </div>
              </div>
        <!-- /page content -->
     
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

      <!-- jQuery -->
    <script src="<?php echo base_url('asset/admin/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('asset/admin/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('asset/admin/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('asset/admin/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('asset/admin/vendors/Chart.js/dist/Chart.min.js'); ?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('asset/admin/vendors/gauge.js/dist/gauge.min.js'); ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('asset/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('asset/admin/vendors/iCheck/icheck.min.js'); ?>"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('asset/admin/vendors/skycons/skycons.js'); ?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('asset/admin/vendors/Flot/jquery.flot.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/Flot/jquery.flot.pie.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/Flot/jquery.flot.time.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/Flot/jquery.flot.stack.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/Flot/jquery.flot.resize.js'); ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('asset/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/flot-spline/js/jquery.flot.spline.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/flot.curvedlines/curvedLines.js'); ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('asset/admin/vendors/DateJS/build/date.js'); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('asset/admin/vendors/jqvmap/dist/jquery.vmap.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js'); ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('asset/admin/vendors/moment/min/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendors/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('asset/admin/build/js/custom.min.js'); ?>"></script>
    
    <!-- Datatables -->
    <script>
    function doconfirm(){
      job = confirm("Are you sure to delete permanently?");
        if (job!=true){
          return false;
        }
    }
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>