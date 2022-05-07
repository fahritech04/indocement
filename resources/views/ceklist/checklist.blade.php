<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Division</title>

 {{-- CDN Bootstrap --}}
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
{{-- Navbar --}}
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Indocement</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="ml-auto" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
      </div>
    </div>
  </div>
</nav>
{{-- Akhir Navbar --}}

<div class="container mt-5">
 <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h1 class="card-title">PRE-START CHECK KENDARAAN</h1>
    <p class="card-text">Pastikan Kendaraan Anda di Check & dalam Kondisi Baik Sebelum Digunakan</p>
    
    <div class="card">
     <div class="card-header">
      Plant/Divisi
     </div>
     <div class="card-body">
      <div class="mb-3 col-4">
       <label class="form-label">Plant / Divisi</label>
       <input type="text" class="form-control" name="plant">
      </div>
     </div>
    </div>
    
    <div class="card mt-3">
     <div class="card-header">
      Jenis Kendaraan
     </div>
     <div class="card-body">

      <div class="form-check">
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
       <label class="form-check-label" for="flexCheckDefault">
         Dump Truck
       </label>
      </div>

      <div class="form-check">
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
       <label class="form-check-label" for="flexCheckDefault">
         Trailer
       </label>
      </div>
      
      <div class="form-check">
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
       <label class="form-check-label" for="flexCheckDefault">
         Bulk Truck
       </label>
      </div>

     </div>
    </div>

    <div class="card mt-3">
     <div class="card-header">
      Plant/Divisi
     </div>
     <div class="card-body">
      <div class="mb-3 col-4">
       <label class="form-label">Plant / Divisi</label>
       <input type="text" class="form-control" name="plant">
      </div>
     </div>
    </div>

  </div>
</div>
</div>
</body>
</html>