@extends('theme')
@section('theme')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <div class="container">
<div class="row">
  <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
  <br>
  <h3><b>CONTACT US</b></h3>
  <br>
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact</li>
  </ol>
</nav>
  </div>
</div>
<div class="row">
  <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
  <br>
    <table class="table table-borderless">
      <tr>
        <td><h4><b>ENQUERY / FEEDBACK</b></h4></td>
      </tr>
      <tr>
        <td><input type="text" class="form-control" placeholder="Enter your name"></td>
      </tr>
      <tr>
        <td><input type="text" class="form-control" placeholder="Enter your adderss"></td>
      </tr>
      <tr>
        <td><input type="text" class="form-control" placeholder="Enter your email-id"></td>
      </tr>
      <tr>
        <td><input type="text" class="form-control" placeholder="Enter your contact no:"></td>
      </tr>
      <tr>
        <td><textarea cols="10" rows="5" class="form-control" placeholder="Enter your feedback"></textarea></td>
      </tr>
      <tr>
        <td><button class="btn btn-outline-primary">Submit</button></td>
      </tr>
    </table>
  </div>
  <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
  <br>
    <table class="table table-borderless">
      <tr>
        <td><h4><b>CONTACT INFO / HILL CAMPUS</b></h4></td>
      </tr>
      <tr>
        <td><b><p>Address:&nbsp;&nbsp;&nbsp;Rajagiri College of Social Sciences (Autonomous),</p></b>
        <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rajagiri P.O,</p></b>
        <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kalamassery, Cochin - 683 104,</p></b>
        <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerala, India.</p></b>
        <b><p>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;admin@rajagiri.edu (Office)</p></b>
        <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rcssadmission@rajagiri.edu (Admissions)</p></b>
        <b><p>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 484 - 2911111 / 2911507</p></b>
        <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 484 - 2532862</p></b>
        </tr>
    </table>
  </div>
</div>
</div>
@endsection