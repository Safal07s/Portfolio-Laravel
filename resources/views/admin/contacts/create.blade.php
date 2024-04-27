@extends('backend.layouts.main')
@section('content')
    

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Create Contacts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('contacts.index')}}">Home</a></li>
        <li class="breadcrumb-item">Contacts</li>
        <li class="breadcrumb-item active">Create Contacts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Create Contacts</h5>

           


            <!-- Multi Columns Form -->
            <form class="row g-3" action="{{route('contacts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Your Name</label>
                <input type="text" class="form-control" name="name" id="inputName5">
              </div>
              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail5">
              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Subject</label>
                <input type="text" class="form-control" name="subject" id="inputPassword5">
              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="inputPassword5" cols="30" rows="1"></textarea>
                <!-- <input type="text"  name="message" id="inputPassword5"> -->
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
