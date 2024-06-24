<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
     .container{
        background-color: #d6e1df;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 3px 3px 3px rgb(104, 105, 105);
    }
    h2{
        text-align: center;

    }
</style>
<body>
    <div class="container w-50">
        <h2><b><u>EDIT SHOPS</u></b></h2>
       <form action="{{route('edit-shop-submit',$crud->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" value="{{$crud->name}}"  name="name" id="" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="price">Price</label>
            <input type="text" name="price" id="" class="form-control" value="{{$crud->price}}">
        </div>
        <div class="mb-3">
            <label for="qty">Qty</label>
            <input type="text" name="qty" id="" class="form-control" value="{{$crud->qty}}">
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="" class="form-control">
            <img class="mt-2"  width="80px" src="{{url('upload/',$crud->image)}}" alt="">
            <input name="old_image" type="hidden" value="{{$crud->image}}">
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="5" class="form-control">{{$crud->description}}</textarea>
        </div>

        <a href="{{route('crud')}}" class="btn btn-danger">Cancel</a>
         <button class="btn btn-primary">Save</button>
       </form>
    </div>
</body>
</html>
