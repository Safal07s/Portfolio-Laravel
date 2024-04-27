@extends('backend.layouts.main')
@section('content')
    

<main id="main" class="main">

  <div class="pagetitle">
    <h1>View Files</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('files.index')}}">Home</a></li>
        <li class="breadcrumb-item">Files</li>
        <li class="breadcrumb-item active">View File</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">View Files</h5>

     

           
            <a class="btn btn-success btn-sm " href="{{route('files.index')}}" role="button">Manage Files </a>
            <form action="{{route('files.show',$files->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="mb-3">
                <label for="input1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" readonly value="{{$files->title}}" id="input1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="input1" class="form-label">Description</label>
                <textarea class="form-control" id="input1" readonly name="description" rows="3">{{$files->description}}</textarea>
              </div>

              <div class="mb-3">
                <img src="{{ asset('uploads/' . $files->img)}}" alt="" width="100" height="100">
              </div>

       





            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
