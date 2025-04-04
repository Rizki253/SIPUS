<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/sidebar.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="{{ Cookie::get('theme') }}" data-bs-theme="{{ Cookie::get('theme') }}">
  @include('layouts.navbar')
  @include('layouts.sidebar')
  
  <section class="container-fluid">
    {{-- <div class="text">Dashboard</div> --}}
    @yield('container')
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/js/sidebar.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    let imgPreview = document.querySelector('.img-preview');
    imgPreview.style.width = '200px';
    
    function previewImage(){
      // tangkap inputan imagenya yang berasal dari input dengan id="image"
      let image = document.querySelector('#file_gambar');
      // ambil tag img kosong tadi
      let imgPreview = document.querySelector('.img-preview');
  
      imgPreview.style.display = 'block';
      imgPreview.style.width = '200px';
  
      // ambil data gambar
      let oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
  
      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
</body>
</html>