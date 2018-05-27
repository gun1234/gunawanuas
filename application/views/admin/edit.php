<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/font-awesome-4.6.3/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/ionicons-master/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BLOG</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>My</b>BLOG</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo base_url('index.php/admin/post/logout'); ?>">
              Log Out <i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class=" treeview">
          <a href="<?php echo base_url('index.php/admin/post/index'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="active treeview">
          <a href="<?php echo base_url('index.php/admin/post/add'); ?>">
            <i class="fa fa-book"></i> <span>Add Article</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Article
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Article</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box box-info">
            <div class="box-header">
              <!-- <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3> -->
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <?php foreach($post_article as $post_isi){ ?>
              <form role="form" action="<?php echo base_url('index.php/admin/post/aksi_update'); ?>" enctype="multipart/form-data" method="post">
                <div class="box-body">
                  <input type="text" name="id" value="<?php echo $post_isi->id ?>">
                  <div class="form-group">
                    <label for="title">Judul article</label>
                    <input type="text" class="form-control" required="required" name="title" id="title" value="<?php echo $post_isi->title ?>">
                  </div>
                  <div class="form-group">
                    <label for="html_content">Header article</label>
                    <input type="text" class="form-control" required="required" name="html_content" id="html_content" value="<?php echo $post_isi->html_content ?>">
                  </div>
                  <div class="form-group">
                    <label for="images_article">Gambar</label>
                    <input type="file" name="image" id="images_article">
                    <!-- <input type="text" name="image"> -->
                    <p class="help-block">Example block-level help text here.</p>
                  </div>
                  <label for="images_article">Konten Article</label>
                  <textarea required="required" pattern="[A-Za-z0-9]{1,20}" name="markdown_content" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <?php echo $post_isi->markdown_content ?>
                  </textarea>
                  

                  <?php 
                    $where = $this->session->userdata("id");
                    $query = $this->post_model->detail_data(array('id'=>$where),'user')->result();
                    foreach ($query as $row)
                    {
                   
                  ?>
                  <input type="text" name="full_name"  value="<?php echo $row->nama_lengkap ?>">
                  <input type="text" name="datetime" value="<?php echo date("Y-m-d h:i")  ?>">
                  <input type="text" name="author" value="<?php echo $row->username ?>">
                  <input type="text" name="status" value="<?php echo $row->status ?>">
                  <input type="text" name="slug" value="<?php echo $row->id ?>">

                  <?php } ?>
                  </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
              <?php } ?>
              
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.5
    </div>
    <strong>Copyright &copy; 2018 
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/jQueryUI/jquery-ui.min.js"></script>

<script src="<?php echo base_url() ?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
</body>
</html>
