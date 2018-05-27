<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>MY BLOG</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/style.css" media="screen" type="text/css" />
</head>

<body>
  <html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700"> -->

  </head>

  <body>

    <div class="container">

      <div id="login">

        <form action="<?php echo base_url('index.php/admin/daftar/daftar'); ?>" method="post">

          <fieldset class="clearfix">
            <p><span class="fontawesome-user"></span>
              <input name="nama" type="text" value="Nama Lengkap" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required>
            </p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-email"></span>
              <input name="email" type="text" value="Email" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required>
            </p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-user"></span>
              <input name="username" type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required>
            </p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span>
              <input name="password" type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required>
            </p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p>
              <input type="submit" value="Sign Up">
            </p>
          </fieldset>

        </form>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>
