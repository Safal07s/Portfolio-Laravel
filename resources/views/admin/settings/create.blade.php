@extends('backend.layouts.main')
@section('content')
    

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Create Settings</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('settings.index')}}">Home</a></li>
        <li class="breadcrumb-item">Setings</li>
        <li class="breadcrumb-item active">Create Setings</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Create Settings</h5>

            <!-- Multi Columns Form -->
            <form class="row g-3" action="{{route('settings.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label for="inputName5" class="form-label">Site_key</label>
                <input type="text" class="form-control" name="site_key" id="inputName5">
              </div>
              <div class="mb-3">
                <label for="inputName5" class="form-label">Site_value</label>
                <input type="text" class="form-control" name="site_value" id="inputName5">
              </div>
             
             
              
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- End Multi Columns Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
