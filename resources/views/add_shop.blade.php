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
        margin-top: 50px;
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
        <h2><b><u>ADD SHOPS</u></b></h2>
        <form action="{{ route('add-shop-submit')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="" class="form-control">
                @if ($errors->first('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="price">Price</label>
                <input type="text" name="price" id="" class="form-control">
                @if ($errors->first('price'))
                <p class="text-danger">{{$errors->first('price')  }}</p>
            @endif
            </div>
            <div class="mb-3">
                <label for="qty">QTY</label>
                <input type="text" name="qty" id="" class="form-control">
                @if ($errors->first('qty'))
                <p class="text-danger">{{$errors->first('qty')  }}</p>
            @endif
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" id="" class="form-control">
                @if ($errors->first('image'))
                <p class="text-danger">{{$errors->first('image')  }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                @if ($errors->first('description'))
                <p class="text-danger">{{$errors->first('description')  }}</p>
                @endif
            </div>
            <a href="{{route('home')}}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
