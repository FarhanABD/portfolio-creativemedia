@extends('admin.layouts.layout')

@section('content')
      <section class="section">
        <div class="section-header">
          <h1>Dashboard</h1>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Admin</h4>
                </div>
                <div class="card-body">
                  @csrf
                  {{$totalAdmins}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Portfolio Category</h4>
                </div>
                <div class="card-body">
                  {{ $totalCategory }}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-warning">
                <i class="far fa-file"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Services</h4>
                </div>
                <div class="card-body">
                  {{ $totalService }}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-success">
                <i class="fas fa-circle"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Blog Category</h4>
                </div>
                <div class="card-body">
                  {{ $blogCategory }}
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="horizontal-scroll">
          <div class="card" style="width: 16rem;">
            <img src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
            </div>
          </div>
  
          <div class="card" style="width: 16rem;">
            <img src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
              <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
            </div>
          </div>
  
          <div class="card" style="width: 16rem;">
            <img src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
              <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 16rem;">
            <img src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
              <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 16rem;">
            <img src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
              <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
            </div>
          </div>          
        </div>

        
      </section>
@endsection