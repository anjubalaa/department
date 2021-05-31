@extends('theme')
@section('theme')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <div class="container">
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <h3><b>GALLERY</b>  - Virtual Tour</h3>
            
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
  </ol>
</nav>
        </div>
    </div>
    <div class="ratio ratio-16x9">
      <iframe src="https://www.youtube.com/embed/GYVaHjj3EnU " title="YouTube video"></iframe>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <div class="card" style="width: 20rem;">
  <img src="https://rajagiri.edu/uploads/image-gallery/2/1.jpg" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"> Class Rooms</p>
      </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <div class="card" style="width: 20rem;">
  <img src="https://rajagiri.edu/uploads/image-gallery/3/6.jpg" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"> Labs</p>
     </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
            <br>
            <div class="card" style="width: 20rem;">
  <img src="https://rajagiri.edu/uploads/image-gallery/5/LibKal1.jpg" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"> Library</p>
     </div>
</div>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <div class="card" style="width: 20rem;">
  <img src="https://rajagiri.edu/uploads/image-gallery/6/sports.jpg" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"> Sports Facility</p>
      </div>
</div>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
            <br>
            <div class="card" style="width: 20rem;">
  <img src="https://rajagiri.edu/uploads/image-gallery/8/recreated%20facility2.jpg" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"> Recreational Faculty</p>
     </div>
</div>
        </div>
    </div>
    <hr>
</div>
@endsection