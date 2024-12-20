<?php
include_once 'loker_buku.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Halaman Utama</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampil_buku.php">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_loker_buku.php">Loker_buku</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
$loker_buku = new LokerBuku();
$loker = $loker_buku->tampilDataBuku('Buku Resep Masakan');
if($loker) {

?>

<table class="table">
  <thead>
    <tr>
    <th>Loker</th>
	<th>Judul</th>
	<th>Nama Pengarang</th>
    <th>Tahun Terbit</th>
	<th>Penerbit</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($loker as $row){
    ?>
    <tr>
    <td><?=$row['loker_buku']?></td>
    <td><?=$row['judul_buku']?></td>
    <td><?=$row['nama_pengarang']?></td>
    <td><?=$row['tahun_terbit']?></td>
    <td><?=$row['penerbit']?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<?php
 }else{
?>

<p>data ilang</p>
<?php
 }
 ?>

</body>
</html>