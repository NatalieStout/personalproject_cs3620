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
                        <a href="profile.php" class="button">
                                <span class="icon"><i class="fas fa-film"></i></span>
                                <span>Movies</span>
                            </a>
                            <a href="login.php" class="button is-danger">
                                <span class="icon"><i class="fas fa-user"></i></span>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<form method="POST" action="./movie_insert.php" >
    <br> Add New Show <br>
    Title:<input class="input is-normal" type="text" name="title" placeholder="Title" /><br />
    Creator:<input class="input is-normal" type="text" name="writerproducer" placeholder="John Doe" /><br />
    Release Date:<input class="input is-normal" type="text" name="releasedate" placeholder="01-01-2021" /><br />
    <input class="button is-info" type="submit" value="Add New Show" />
</form>