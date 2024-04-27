@extends('backend.layouts.main')
@section('content')
    


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Create Services</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('services.index')}}">Home</a></li>
        <li class="breadcrumb-item">Services</li>
        <li class="breadcrumb-item active">Create Services</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Create Services</h5>

             


            <!-- Multi Columns Form -->
            <form class="row g-3" action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Icon</label>
                <input type="text" class="form-control" name="icon" id="inputName5">
              </div>
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="inputName5">
              </div>
              <div class="col-md-6">
                <!-- <textarea name="description" id="" cols="30" rows="10">Description</textarea> -->
                <label for="inputEmail5" class="form-label">Description</label>
                <textarea id="summernote" name="description" class="form-control" id="inputEmail5" cols="30" rows="3"></textarea>
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

{{-- <script>
  $(document).ready(function() {
    $('#summernote').summernote();
  });
</script> --}}
@endsection
