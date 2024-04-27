@extends('backend.layouts.main')
@section('content')
    

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Update Services</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('services.index')}}">Home</a></li>
        <li class="breadcrumb-item">Services</li>
        <li class="breadcrumb-item active">Update Services</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Update Services</h5>

           


            <!-- Multi Columns Form -->
            <a class="btn btn-success btn-sm " href="{{route('services.index')}}" role="button">Manage Services </a>

            <form class="row g-3" action="{{route('services.show',$services->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Icon</label>
                <input type="text" class="form-control" readonly name="icon" value="{{$services->icon}}" id="inputName5">
              </div>
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Title</label>
                <input type="text" class="form-control" readonly name="title" value="{{$services->title}}" id="inputName5">
              </div>
              <div class="col-md-6">
                <!-- <textarea name="description" id="" cols="30" rows="10">Description</textarea> -->
                <label for="inputEmail5" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="inputEmail5" readonly cols="30" rows="3">{{$services->description}}</textarea>
              </div>


              
            </form><!-- End Multi Columns Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
