<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Adiputro Project</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/features/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    
    <style>
p.space {
    line-height: 400%;
}

@media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

.spasi{
    margin: top 10px;
}
.intro {
  height: 100%;
}

.gradient-custom-2 {
  /* fallback for old browsers */
  background: #6a11cb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to top, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to top, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
</head>


<body class="gradient-custom-2 h-100">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="facebook" viewBox="0 0 16 16">
    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
  </symbol>
  <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
  </symbol>
  <symbol id="twitter" viewBox="0 0 16 16">
    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
  </symbol>
</svg>

<div class="px-4 pt-5 text-center">
<img class="d-block mx-auto mb-4" src="{{ asset('img/New2.png') }}" width="100" height="70">
    <h1 class="display-11 fs-3 fw-bold text-white">Survei Berdasarkan Tingkat Kepuasan </h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 fs-6 text-white">Dimohon untuk membaca pertanyaan dan mengisi form dengan teliti dan hati-hati ! </p>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
    </div>


            <form action="{{route('post.four')}}" method="POST" class="needs-validation" novalidate>
          @csrf
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-7 col-xl-5">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5 ">
            <p>Penilaian Anda secara keseluruhan :</p>

            <div class="list-group mx-0 w-auto">
    <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="radio" name="simpulan" id="listGroupRadios1" value="Tidak Memenuhi Pengharapan (ekspektasi) Anda" required>
      <span>
      Tidak Memenuhi Pengharapan (ekspektasi) Anda
      </span>
    </label>
    <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="radio" name="simpulan" id="listGroupRadios2" value="Cukup Memenuhi Pengharapan (ekspektasi) Anda">
      <span>
      Cukup Memenuhi Pengharapan (ekspektasi) Anda
      </span>
    </label>
    <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="radio" name="simpulan" id="listGroupRadios3" value="Memenuhi Pengharapan (ekspektasi) Anda">
      <span>
      Memenuhi Pengharapan (ekspektasi) Anda
      </span>
    </label>
    <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="radio" name="simpulan" id="listGroupRadios3" value="Melebihi Pengharapan (ekspektasi) Anda">
      <span>
      Melebihi Pengharapan (ekspektasi) Anda
      </span>
    </label>
  </div>

          </div>
        </div>
</br>

<div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <p>Saran Tambahan</p>

            <div class="form-floating mb-3">
            <textarea type="text" class="form-control rounded-3" id="floatingInput" rows="4" placeholder="text" name="saran"></textarea>
          </div>
          </div>
        </div>

<div class="form-floating mb-3">
</div>
<button type="submit" class="btn btn-md btn-primary w-100">Kirim</button>
          </form>
</div>
</div>
</div>
</div>
</br>
</br>
  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="mb-3 mb-md-0 text-white">&copy; 2023 AdiPutro, Inc</span>
    </div>

  </footer>
</div>
<script>
  (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
  </script>
</body>
</html>