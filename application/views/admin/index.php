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

</head>
<body class="hold-transition skin-blue sidebar-mini">

<div style="background-color:#3c8dbc;">
	<audio src="<?=base_url()?>audio/audio.mp3" controls></audio>
	<video width="320" height="240" controls>
	  <source src="<?=base_url()?>video/movie.mp4" type="video/mp4">
	  Your browser does not support the video tag.
	</video>
</div>

<div class="wrapper">	

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Artikel Blog</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Artikel</b>BLOG</span>
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
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
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
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <?php 
          $where = $this->session->userdata("id");
          $query = $this->post_model->detail_data(array('id'=>$where),'user')->result();
          foreach ($query as $row)
          {
          // echo "$row->username";
        ?>
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url() ?>images/<?php echo "$row->photo"; ?>" alt="User profile picture">
              
              <h3 class="profile-username text-center"><?php echo "$row->username"; ?></h3>

              <p class="text-muted text-center"><?php echo "$row->nama_lengkap"; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Status</b> <a class="pull-right"><?php echo "$row->status"; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Article post</b> <a class="pull-right">5</a>
                </li>
                
              </ul>

              <a href="#" class="btn btn-primary btn-block">Edit Profil <i class="fa fa-pencil"></i> </a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
               <?php echo "$row->edukasi"; ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?php echo "$row->alamat"; ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Hobi</strong>

              <p>
                <span class="label label-success"><?php echo "$row->Hobi"; ?></span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>
                <?php echo "$row->Pekerjaan"; ?>
              </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <?php } ?>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#settings" data-toggle="tab">Settings Account</a></li>
            </ul>
            <div class="tab-content">
               <?php 
                $slug = $this->session->userdata("id");
                $query2 = $this->post_model->detail_data(array('slug'=>$slug),'post')->result();
                foreach ($query2 as $row_post)
                {
                  $post_user = $this->post_model->detail_data(array('id'=>$slug),'user')->result();
                  foreach ($post_user as $user_post)
                  {
              ?>
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url() ?>images/<?php echo "$user_post->photo"; ?>" alt="user image">
                        <span class="username">
                          <a href="#"><?php echo "$user_post->nama_lengkap"; ?></a>
                          <a href="<?php echo base_url('index.php/admin/post/edit/'.$row_post->id.'') ?>" class="pull-right" data-toggle="tooltip" title="" data-original-title="Edit article">
                            <span class="label label-primary">
                              Edit
                              <i class="fa fa-pencil"></i>
                            </span>
                          </a>
                          <a href="<?php echo base_url('index.php/admin/post/aksi_delete/'.$row_post->id.'') ?>" class="pull-right" data-toggle="tooltip" title="" data-original-title="Hapus article">
                            <span class="label label-danger">
                              Hapus
                              <i class="fa fa-trash"></i>
                            </span>
                          </a>
                        </span>
                    <span class="description">Shared publicly - <?php echo "$row_post->datetime"; ?></span>
                  </div>
                  <!-- /.user-block -->
                  <div class="col-md-12"><h3 class="box-title"><?php echo "$row_post->title"; ?></h3></div>
                  <img class="img-responsive pad" src="<?php echo base_url() ?>images/<?php echo "$row_post->image"; ?>" alt="Photo">

                  <p>
                    <?php echo "$row_post->markdown_content"; ?>
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>
                  
      
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="clearfix">
                </div>
                <!-- /.post -->

               
              </div>

              <?php } } ?>

              <div class="tab-pane" id="settings">
                <?php 
                  $acc = $this->session->userdata("id");
                  $query3 = $this->post_model->detail_data(array('id'=>$acc),'user')->result();
                  foreach ($query3 as $row3)
                  {
                  // echo "$row->username";
                ?>
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo $row3->email ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Skill</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputName" value="<?php echo $row3->username ?>">
                    </div>
                  </div>

                  <?php } ?>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Ubah</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
      

    </section>
    <!-- /.content -->
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
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() ?>assets/admin/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
