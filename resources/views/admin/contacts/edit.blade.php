@extends('backend.layouts.main')
@section('content')
    

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Update Contacts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('contacts.index')}}">Home</a></li>
        <li class="breadcrumb-item">Contacts</li>
        <li class="breadcrumb-item active">Update Contacts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Update Contacts</h5>
            
           


            <!-- Multi Columns Form -->
            <a class="btn btn-success btn-sm " href="{{route('contacts.index')}}" role="button">Manage Contacts </a>

            <form class="row g-3" action="{{route('contacts.update',$contacts->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Your Name</label>
                <input type="text" class="form-control" name="name" value="{{$contacts->name}}" id="inputName5">
              </div>
              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{$contacts->email}}" id="inputEmail5">
              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Subject</label>
                <input type="text" class="form-control" name="subject" value="{{$contacts->subject}}" id="inputPassword5">
              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="inputPassword5" cols="30" rows="1">{{$contacts->message}}</textarea>
                <!-- <input type="text"  name="message" id="inputPassword5"> -->
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
