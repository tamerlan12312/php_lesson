<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary navbar-dark ">
  <div class="container">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="blogs.php">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-blogs.php">Admin Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-categories.php">Admin Categories</a>
        </li>
      </ul>
      <ul class="navbar-nav  mb-2 mb-lg-0">
      <?php  if(isset($_COOKIE["auth"])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome, <?php echo $_COOKIE["auth"]["username"] ;?></a>
        </li>
      <?php else :?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
      <?php endif ;?>
      </ul>
      <form class="d-flex" role="search" action="blogs.php" method="GET">
        <input class="form-control me-2" name="q" type="search"  placeholder="Search" aria-label="Search">
        <button class="btn btn-danger" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>