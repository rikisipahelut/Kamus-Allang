<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kamus Bahasa Allang</title>

  <!-- Bootstrap core CSS -->
  <link href="/asset_sb_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/asset_sb_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/asset_sb_admin/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="/asset_sb_admin/css/landing-page.min.css" rel="stylesheet">
  <link rel="icon" href="/asset_sb_admin/img/logo1.ico">

  <meta name="csrf-token" content="{{csrf_token()}}">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/asset_sb_admin/img/Logo1.ico" width="30" height="30" alt="" loading="lazy"> Kamus Hina Allang</a>
      <a class="btn btn-primary" href="/auth/login">Login</a>
    </div>
  </nav>

  

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
    <div class="row">
        <div class="col-8 offset-2">
          <div class="alert alert-warning alert-dismissible fade show text-left" id="alert" role="alert">
              <Strong>Sou Salamate, <br></Strong> Aplikasi ini masih dalam tahap peyempurnaan
              atau pengembangan.<br><Strong>Selamat menggunakan.</strong>
              <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        </div>
    </div>

      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-1">Kamus Bahasa Allang</h1>
          <h5 class="mb-5">Mari lestarikan sebelum bahasa ini punah</h5>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <!-- <form method="" action=""> -->
          <!-- @csrf -->
            <div class="form-row">
              <div class="col-12 col-md-12 mb-2 mb-md-0">
                <input type="text" name="cari" class="form-control form-control-lg @error('cari') is-invalid @enderror text-center" placeholder="Masukan Kata Yang Anda Cari" 
                id="keyword">
                @error('cari')
									<div class="invalid-feedback badge-danger">
										{{$message}}
									</div>
							 	@enderror
              </div>
              <!-- <div class="col-12 col-md-3">
                <button type="submit" name="submit" class="btn btn-block btn-lg btn-primary" id="tombol-cari">Cari</button>
              </div> -->
            </div>
          <!-- </form> -->
        </div>
      </div>
    </div>
  </header>
  @yield('container')
  <div class="container" id="container" style="display:none;">
   

  </div>
  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#" data-toggle="modal" data-target="#about">Tentang kami</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#" data-toggle="modal" data-target="#exampleModal">Kontak</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#" data-toggle="modal" data-target="#kontributor">Kontributor</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website {{date('Y')}}. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-linkedin fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Modal For Contact-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-light" id="exampleModalLabel">Kontak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      	<p>Anda ingin berkontribusi untuk memajukan bahasa allang</p>
        <h4><i class="fas fa-phone"></i><span> 0852-5408-4865</span></h4>
        <h4><i class="fas fa-envelope"></i> rikisipahelut@gmail.com</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
  </div>
  <!-- Modal For About-->
  <div class="modal fade" id="about" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="aboutLabel">Tentang kami</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <blockquote class="card-body">
          <h4>Kamus Bahasa Allang</h4>
          <p>Kamus bahasa allang versi web ini, dibuat untuk memudahkan setiap orang dari berbagai
          kalangan dan semua usia untuk bisa belajar bahasa allang, dengan harapan dapat memperbanyak penutur bahasa allang,
          agar bahasa ini tidak punah.</p>

          <footer class="blockquote-footer">Knei Ite Lepa Sou, Upu Yesus Loperia </footer>
    
        </blockquote>
        

       


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
  </div>

  <!-- Modal For Contact-->
  <div class="modal fade" id="kontributor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-light" id="exampleModalLabel">Kontributor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-left">
          <div class="col-3">
            <img src="/asset_sb_admin/img/femy_berang.jpg" alt="" class="rounded-circle img-thumbnail bg-secondary" width="100" high="100">
          </div>
          <div class="col-9  pt-2">
            <h6><i class="fas fa-user-circle"></i> Femy Lalihatu</h6>
            <h6><i class="fas fa-envelope"></i> femylalihatu@gmail.com</h6>
            <p><i class="fas fa-hands-helping"></i> <em class="text-muted">Sebagai Kontributor Bahasa Allang</em></p>
          </div>
        </div>
        <hr>
        <div class="row text-left">
          <div class="col-3">
            <img src="/asset_sb_admin/img/roi.jpg" alt="" class="rounded-circle img-thumbnail  bg-secondary" width="100" high="100">
          </div>
          <div class="col-9  pt-2">
            <h6><i class="fas fa-user-circle"></i> El Roi Sipahelut</h6>
            <h6><i class="fas fa-envelope"></i> sipahelutroi@gmail.com</h6>
            <p><i class="fas fa-hands-helping"></i> <em  class="text-muted">Sebagai Kontributor Bahasa Allang</em></p>
          </div>
        </div>
        <hr>
        <div class="row text-left">
          <div class="col-3">
            <img src="/asset_sb_admin/img/riki.jpg" alt="" class="rounded-circle img-thumbnail  bg-secondary" width="100" high="100">
          </div>
          <div class="col-9  pt-2">
            <h6><i class="fas fa-user-circle"></i> Korezy Sipahelut, S.Kom</h6>
            <h6><i class="fas fa-envelope"></i> rikisipahelut@gmail.com</h6>
            <p><i class="fas fa-hands-helping"></i> <em  class="text-muted">Sebagai Web Developer</em></p>
          </div>
        </div>
        
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="asset_sb_admin/vendor/jquery/jquery.min.js"></script>
  <script src="asset_sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset_sb_admin/js/cari.js"></script>
</body>

</html>
