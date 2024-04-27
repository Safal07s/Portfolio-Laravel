@extends('backend.layouts.main')
@section('content')
    

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Update SKills</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('skills.index')}}">Home</a></li>
        <li class="breadcrumb-item">SKills</li>
        <li class="breadcrumb-item active">Update SKills</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Update SKills</h5>
            <!-- Multi Columns Form -->
            <a class="btn btn-success btn-sm " href="{{route('skills.index')}}" role="button">Manage Skills </a>
            <form class="row g-3" action="{{route('skills.update',$skills->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$skills->title}}" id="inputName5">
              </div>
              <div class="col-md-6">
                <!-- <textarea name="description" id="" cols="30" rows="10">Description</textarea> -->
                <label for="inputEmail5" class="form-label">Description</label>
                <textarea class="form-control" name="description"   id="inputEmail5" cols="30" rows="3">{{$skills->description}} </textarea>
              
                <!-- <input type="textarea" class="form-control" name="description"  id="inputEmail5"> -->
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
