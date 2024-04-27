@extends('backend.layouts.main')
@section('content')
    

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Update Facts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('facts.index')}}">Home</a></li>
        <li class="breadcrumb-item">Facts</li>
        <li class="breadcrumb-item active">Update Facts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Update Facts</h5>

           


            <!-- Multi Columns Form -->
            <a class="btn btn-success btn-sm " href="{{route('facts.index')}}" role="button">Manage Facts </a>
            <form class="row g-3" action="{{route('facts.update',$facts->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Numbers</label>
                <input type="number" class="form-control" name="numbers" value="{{$facts->numbers}}" id="inputName5">
              </div>
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$facts->title}}" id="inputName5">
              </div>
             
              
              <div class="col-md-12">
                <button type="submit" class="btn btn-danger" name="submit">Update</button>
              </div>
            </form><!-- End Multi Columns Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
