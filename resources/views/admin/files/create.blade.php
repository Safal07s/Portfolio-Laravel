@extends('backend.layouts.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Create Files</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('files.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Files</li>
                    <li class="breadcrumb-item active">Add File</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Files</h5>




                            <form action="{{route('files.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="input1" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="input1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="input1" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="img" id="input1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                                </div>

                                <button type="submit" class="btn btn-danger btn-sm" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
