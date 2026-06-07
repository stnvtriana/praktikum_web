<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <style>
    body {
            background-color: rgb(214, 117, 117);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 5px;
        }
    </style>
  <body>
        <nav class="navbar navbar-expand-lg bg-danger-subtle">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Siti Novi Triana Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="portofolio.html">Portofolio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="aboutMe.php">About Me</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </div>
  </div>
</nav>

<!-- Carousel -->
 <div class="container mt-4">
   <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="backround.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>

</div>
</div>
<!-- akhir Carousel -->

 <!-- colom -->
<hr>
<div class="container text-xxl-end" > 
  <div class="row">
    <div class="col"> 
      Menampilkan projek yang sudah saya kerjakan selama belajar web development, dengan menggunakan Bootstrap, 
      saya dapat membuat tampilan yang responsif dan menarik untuk menampilkan projek-projek saya.
    </div>
    <div class="col order-5">
        Saya dapat menggunakan berbagai komponen Bootstrap seperti card, carousel, 
        dan grid system untuk menyusun konten dengan cara yang terstruktur dan mudah dibaca.
    </div>
  </div>
</div>
<!--Akhir colom-->

<hr>
<div class="container text-xxl-end">
  <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="profil.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Projek membuat profil pribadi adalah awal dari saya belajar web development, dengan membuat halaman web yang menampilkan informasi pribadi saya, 
    saya dapat memahami dasar-dasar HTML, CSS.</p>
    <a href="profil.html" class="card-link">profil.html</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="perhitungan.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Projek selanjutnya yang saya kerjakan adalah membuat perhitungan sederhana menggunakan HTML, CSS, dan JavaScript.</p>
  </div>
</div>
    </div>
    <div class="col">
     <div class="card" style="width: 18rem;">
  <img src="login.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Projek terakhir yang saya kerjakan adalah membuat halaman login sederhana menggunakan HTML, CSS, dan JavaScript.</p>
  </div>
</div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>