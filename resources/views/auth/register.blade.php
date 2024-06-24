{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{

    }
    .container{
        margin-top: 50px;
        width: 480px;

    }
    .form{
        background-color: rgba(255, 255, 255, 0.848);
        padding: 10px;
        height: 350px;
        border-radius: 5px;
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<body>
    <div class="container">
        <h3 class="text-center">Register</h3>
        <form action="{{route('signup-submit')}}" method="post" class="form" >
            @csrf
            <div class="mt-4">
                <label for="">Username</label>
                <input type="text" name="name" id="" class="form-control">
                @if ($errors->first('name'))
                <p class="text-danger">{{$errors->first('name')  }}</p>
            @endif
            </div>
            <div class="mt-4">
                <label for="">Email</label>
                <input type="emial" name="email" id="" class="form-control">
                @if ($errors->first('email'))
                <p class="text-danger">{{$errors->first('email')  }}</p>
            @endif
            </div>
            <div class="mt-4 ">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
                @if ($errors->first('password'))
                <p class="text-danger">{{$errors->first('password')  }}</p>
            @endif
            </div>
            <div class="mt-4">
                <button class="btn btn-primary float-end mb-3">Sign Up</button>
            </div>
            <a href="{{route('login')}}">Back to login</a>
        </form>
    </div>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{

    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form action="{{route('signup-submit')}}" method="post" class="form" >
        <h3>Register</h3>
        @csrf
        <div class="">
            <label for="">Username</label>
            <input type="text" name="name" id="" class="form-control">
            @if ($errors->first('name'))
            <p class="text-danger">{{$errors->first('name')  }}</p>
        @endif
        </div>
        <div class="">
            <label for="">Email</label>
            <input type="emial" name="email" id="" class="form-control">
            @if ($errors->first('email'))
            <p class="text-danger">{{$errors->first('email')  }}</p>
        @endif
        </div>
        <div class="">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
            @if ($errors->first('password'))
            <p class="text-danger">{{$errors->first('password')  }}</p>
        @endif
        </div>
        <div class="">
            <button class="btn btn-primary float-end mb-3">Sign Up</button>
        </div>
        <a href="{{route('login')}}">Back to login</a>
    </form>
</body>
</html>



