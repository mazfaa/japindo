<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>LPK Japindo Cianjur</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Chivo Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Chivo&display=swap" rel="stylesheet" />
  <!-- My CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
  @include('components.navbar')

  {{ $slot }}

  <!-- Footer -->
  <footer class="text-white pt-5 px-5" style="background: rgb(7, 59, 101);">
    <div class="container">
      <div class="row text-center" style="font-size: 14px;">
        <div class="col-4">
          <h3>Social Media</h3>
          <p>Ikuti berita terkini mengenai pelatihan kami melalui media social kami.</p>

          <div class="social-media">
            <a href="" class="nav-link d-inline-block me-3">
              <i class="bi bi-facebook"></i>
            </a>

            <a href="" class="nav-link d-inline-block me-3">
              <i class="bi bi-instagram"></i>
            </a>

            <a href="" class="nav-link d-inline-block">
              <i class="bi bi-twitter"></i>
            </a>
          </div>
        </div>

        <div class="col-4">
          <h3>Contact Us</h3>
          <p style="line-height: 1.6;">
            <i class="bi bi-telephone"></i> &nbsp; (0263) 2929989 <br />
            <i class="bi bi-envelope"></i> &nbsp; lpkjapindo@yahoo.co.id <br />
            <i class="bi bi-envelope"></i> &nbsp; ramdhan2605@yahoo.ne.jp <br />
            {{-- <i class="bi bi-geo-alt"></i> &nbsp; Kp. Cirata Panjang RT 02 RW 04, Desa Ciherang, Kecamatan Karangtengah, Cianjur, Jawa Barat --}}
          </p>
        </div>

        <div class="col-4">
          <h3>Page Menu</h3>
          <p style="line-height: 1.6;">
            <a class="nav-link d-inline-block me-3" href="/home">Home</a>
            <a class="nav-link d-inline-block me-3" href="/about">About</a>
            <a class="nav-link d-inline-block me-3" href="/contact">Contact</a>
            <a class="nav-link d-inline-block me-3" href="/service">Service</a>
            <a class="nav-link d-inline-block me-3" href="/blog">Blog</a>
          </p>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <p class="text-center" style="font-size: 13px; font-weight: 400;">&copy; 2023 Japindo Cianjur. Created by Muhammad Azfa Asykarulloh</p>
    </div>
  </footer>
  <!-- /Footer -->

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>