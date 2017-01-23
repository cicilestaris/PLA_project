<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                  <li><a><i class="fa fa-table"></i> NMS </a>
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
                    <img src="images/img.jpg" alt="">John Doe
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
                <h3>Sistem Inventory Data Teknis Transport</h3>
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

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Network System Management</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

           
                   <form class="form-horizontal form-label-left" <?php echo form_open_multipart('Home/proses_edit_nms'); ?> 
                      <span class="section">Edit Data</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama NMS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama_nms" value="<?php echo $port->nama_nms; ?>" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Lokasi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="nama_lokasi" value="<?php echo $port->nama_lokasi; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Merk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <select class="form-control" name="id_merk" value="<?php echo $port->id_merk; ?>" >
                                <?php foreach ($merk as $merkk){ ?>
                                <option <?php if($merkk->id_merk==$port->id_merk){echo "selected='selected'";}?> value="<?php echo $merkk->id_merk; ?>"><?php echo $merkk->nama_merk ?></option>
                                <?php } ?>
                              </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Nama NE<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  id="number" name="nama_ne" value="<?php echo $port->nama_ne; ?>"
                          required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">rack <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  id="website" name="rack" required="required" value="<?php echo $port->rack; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Shelf <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  type="text" name="shelf" value="<?php echo $port->shelf; ?>" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Slot</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="slot" value="<?php echo $port->slot; ?>" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Port</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="port" value="<?php echo $port->port; ?>" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Board <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="board" value="<?php echo $port->board; ?>" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Frekuensi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" required="required" name="frekuensi" value="<?php echo $port->frekuensi; ?>" class="form-control col-md-7 col-xs-12"></input>
                        </div>
                      </div>
                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">USER <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="text" required="required" name="user" value="<?php echo $port->user; ?>" class="form-control col-md-7 col-xs-12"></input>
                        </div>
                      </div>
                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Deskripsi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" required="required" name="deskripsi" value="<?php echo $port->deskripsi; ?>" class="form-control col-md-7 col-xs-12"></input>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                         <input name="id_port" type="text" value="<?php echo $port->id_port; ?>" hidden/>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                    <div class="form-group" style="margin-top:-49px; margin-left: 150px; position: absolute;">
                      <div class="col-md-6 col-md-offset-3">
                          <a href="<?php echo site_url('Home/table_nms');?>"><button type="submit" class="btn btn-primary">Cancel</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
    <script src="<?php echo base_url('/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- validator -->
    <script src="<?php echo base_url('/vendors/validator/validator.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('/build/js/custom.min.js'); ?>"></script>

    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->
  </body>
</html>