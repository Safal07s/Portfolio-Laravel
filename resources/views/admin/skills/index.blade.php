@extends('backend.layouts.main')
@section('content')
    


<main id="main" class="main">


  <div class="pagetitle">
    <h1>Manage Skills</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('skills.index')}}">Home</a></li>
        <li class="breadcrumb-item">SKills</li>
        <li class="breadcrumb-item active">Manage Skills</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Manage Skills</h5>

            <!-- Table with stripped rows -->
            <a class="btn btn-primary btn-sm " href="{{route('skills.create')}}" role="button">Add skills </a>
            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               @foreach ($skills as $skill )
                   
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{$skill->title}}</td>
                    <td>{{$skill->description}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm " href="{{route('skills.edit',$skill->id)}}" role="button"> Edit</a>
                        <a class="btn btn-primary btn-sm " href="{{route('skills.show',$skill->id)}}" role="button"> View</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         Delete
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog        ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Modal.</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to delete this data?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('skills.destroy',$skill->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" name="submit"  class="btn btn-primary">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                  </tr>
                  @endforeach
               

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
