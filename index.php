<?php
include'koneksi.php';
    
    $lists = array();
    $sql = "SELECT * from mahasiswas";
    $exc = $koneksi->query($sql); if ($exc->num_rows > 0) { while ($row = $exc->
fetch_assoc()){ $lists[] = $row; } } $koneksi->close(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />

    <style>
      body {
        background-image: url("https://cdn0-production-images-kly.akamaized.net/itTG7aBOb4kObQde9CB20rMlJz4=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/813545/original/080167000_1424263004-neraka.jpg");
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Dark Ars</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Form -->
    <div class="container p-5 my-5 mx-auto bg-dark rounded-2">
      <h3 class="text-center text-white">Input Mahasiswa</h3>
      <form action="create.php" method="post" class="text-white">
        <div class="mb-3">
          <label>NIM :</label>
          <input
            type="text"
            class="form-control"
            name="nim"
            required
            placeholder="Masukan Nomor Induk Mahasiswa"
          />
        </div>
        <div class="mb-3">
          <label>Nama :</label>
          <input
            type="text"
            class="form-control"
            name="nama"
            required
            placeholder="Masukkan Nama Lengkap ........"
          />
        </div>
        <div class="mb-3">
          <label>Kelas :</label>
          <input
            type="text"
            class="form-control"
            name="kelas"
            required
            placeholder="Kalian Kelas Berapa Sih !!!"
          />
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>

    <!-- Table -->
    <div class="container">
      <table class="table table-bordered text-center table-dark">
        <thead>
          <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
foreach ($lists as $list){
    ?>
          <tr>
            <th scope="row"><?php echo $list["nim"]; ?></th>
            <td><?php echo $list["nama"]; ?></td>
            <td><?php echo $list["kelas"]; ?></td>
            <td>
              <a
                class="btn btn-success"
                href="edit.php?id=<?php echo $list['id']; ?> "
                >Edit</a
              >
              <a
                class="btn btn-danger"
                href="delete.php?id=<?php echo $list['id'];?> "
              >
                Delete</a
              >
            </td>
          </tr>
          <?php
}
    ?>
        </tbody>
      </table>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
