<div class="container">
      <form class="form-signin" action="<?php echo base_url('index.php/checklogin');?>" method="post" id="loginForm">
        <h2 class="form-signin-heading"><img src="<?php echo base_url('assets/img/hms_icon.png'); ?>" />User Login</h2>
        <input type="text" class="input-block-level" placeholder="Username" name="username" id="username">
        <input type="password" class="input-block-level" placeholder="Password" name="password" id="password">
        <button class="btn btn-large btn-primary" type="submit" name="login" id="login">Sign in</button> 
        
        <div id="report"></div>
      </form>
</div> <!-- /container -->