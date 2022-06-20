@extends('templates/headerAndFooterTemplate')


@section('title', 'Login')

@section('content')
    @if($errors->any())
<div class="alert danger">
    @foreach($errors->all() as $error)
    <li style="color: red"> {{$error}}</li>
    @endforeach
</div>
@endif


<!-- <h2>LOGIN</h2>
<form action="" method="post">
    @csrf
    <input type="text" name="email"placeholder="email"><br>
    <input type="text" name="password"placeholder="password"><br>
    <input type="submit" value="Login">
    <input type="submit" value="Register">
</form> -->

<section class="vh-100" style="background-color: #eee; ">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                <form class="mx-1 mx-md-4" action="" method="post">

                  
                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="email" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Password</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" value="Login" class="btn btn-success btn-lg">Login</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection


