@extends('backend.layouts.main')
@section('content')
    

<main id="main" class="main">

  <div class="pagetitle">
    <h1>View Settings</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('settings.index')}}">Home</a></li>
        <li class="breadcrumb-item">Setings</li>
        <li class="breadcrumb-item active">View Setings</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">View Settings</h5>

           


            <!-- Multi Columns Form -->
            <a class="btn btn-success btn-sm " href="{{route('settings.index')}}" role="button">Manage Settings </a>

            <form class="row g-3" action="{{route('settings.show',$settings->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="mb-3">
                <label for="inputName5" class="form-label">Site_key</label>
                <input type="text" class="form-control" readonly  value="{{$settings->site_key}}" id="inputName5">
              </div>
              <div class="mb-3">
                <label for="inputName5" class="form-label">Site_value</label>
                <input type="text" class="form-control" readonly name="site_value" value="{{$settings->site_value}}" id="inputName5">
              </div>
             
             
              
             
            </form><!-- End Multi Columns Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
