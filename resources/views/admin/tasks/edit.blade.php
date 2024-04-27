<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
    <style>
      .wrapper{
      border-style: solid;
      border-color: rgb(207, 52, 52);
      width: 33rem;
      height: 29rem;
      }

    </style>
</head>
<body>
    <div class="wrapper container mt-4">
        <div class="heading container pt-2">
            <h1>Create Tasks</h1>
        </div>

        <form action="{{route('tasks.update',$tasks->id)}}" method="POST" enctype="multipart/form-data" class="row g-3 d-inline " >
          @csrf
          @method('put')
    
                <div class="col-md-4 w-100">
                  <label for="validationCustom01 text" class="form-label fw-bold">Title</label>
                  <input type="text" name="title" class="form-control w-100 " id="validationCustom01" value=" {{$tasks->title}}" required>
                  
                </div>
                <div class="col-md-4 w-100 ">
                  <label for="validationCustom02" class="form-label fw-bold ">Description</label>
                  <textarea name="description" class="form-control" id="validationCustom02" cols="30" rows="3"> {{$tasks->description}}</textarea>
                  {{-- <input type="text"  id="" value="" required> --}}
                 
                </div>
             
                <div class="col-12 ">
                  <button class="btn btn-primary" name="submmit" type="submit">Update</button>
                </div>
        
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>