@extends('backend.layouts.main')
@section('content')
    

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Create SKills</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('skills.index')}}">Home</a></li>
        <li class="breadcrumb-item">SKills</li>
        <li class="breadcrumb-item active">Create SKills</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Create SKills</h5>

           

            <!-- Multi Columns Form -->
            <form class="row g-3" action="{{route('skills.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label for="inputName5" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="inputName5">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" cols="30" rows="3"></textarea>
                <!-- <input type="textarea" class="form-control" name="description" id="inputEmail5"> -->
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
