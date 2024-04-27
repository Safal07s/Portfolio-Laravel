@extends('backend.layouts.main')
@section('content')
    <main id="main" class="main">


        <div class="pagetitle">
            <h1>Manage Contacts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('contacts.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Contacts</li>
                    <li class="breadcrumb-item active">Manage Contacts</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Contacts</h5>

                            <!-- Table with stripped rows -->
                            <a class="btn btn-primary btn-sm " href="{{route('contacts.create')}}" role="button">Add Contacts </a>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$contact->name }}</td>
                                        <td>{{$contact->email }}</td>
                                        <td>{{$contact->subject }}</td>
                                        <td>{{$contact->message}}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm " href="{{route('contacts.edit',$contact->id)}}" role="button">Edit </a>
                                            <a class="btn btn-primary btn-sm " href="{{route('contacts.show',$contact->id)}}" role="button">view </a>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Delete
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog        ">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Modal?
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Do you want to delete this data?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <form action="{{route('contacts.destroy',$contact->id)}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" name='submit'
                                                                    class="btn btn-danger">Delete</button>
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
