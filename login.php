<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
     <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<nav class="navbar is-light">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="login.html">
                    <span class="icon is-large">
                <i class="fas fa-home"></i>
              </span>
                    <span>Home</span>
                </a>
                <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                    <!-- navbar link go here -->
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="login.php" class="button is-success">
                                <span class="icon"><i class="fas fa-user"></i></span>
                                <span>Login</span>
                            </a>
                            <a href="register.php" class="button is-primary">
                                <span class="icon"><i class="fas fa-list"></i></i></span>
                                <span>Register</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<?php
// require './utilities/connection.php';
require 'setenv.php';

//additional php code for this page goes here

?>



    <!-- START PAGE CONTENT -->
    <h1 class="title">Login</h1>
    <form action="authentication.php" method="POST">
    <div class="field">
  <p class="control has-icons-left">
    <input name="username" class="input" type="text" placeholder="Username" required>
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input name="password" class="input" type="password" placeholder="Password" required>
    <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control">
    <button class="button is-success">
      Login
    </button>
  </p>
</div>
</form>
<!-- END PAGE CONTENT -->
<!-- 
