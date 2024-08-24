<nav class="navbar navbar-expand-lg bg-white text-black">
  <div class="container-fluid p-2">
    <a class="navbar-brand flex text-m font-bold" href="index.php">
      <img class="w-10 px-2" src="./src/music/assets/music.svg" alt="">
      Music Shop
    </a>

    <div class="ml-auto block">
      <?php if (isset($_SESSION['name'])) { ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">หน้าหลัก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./products.php">สินค้าทั้งหมด</a>
            </li>
          </ul>
        </div>

        <div class="">
          <?php echo $_SESSION['name'] ?>
          <!-- logout -->
          <a href="./procress/logout.php?logout" class="bg-red-500 text-white px-3 py-1 rounded-md">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </div>

      <?php } else { ?>
        <a href="login.php" class="me-3">Login</a>
      <?php } ?>
    </div>
  </div>
</nav>