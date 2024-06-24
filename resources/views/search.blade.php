@component('header')
    <div class="container mt-3">
       <div class="row gap-4">
        @foreach ($crud as $item)
       <div class="card " style="width: 18rem;" >
            <div class="img" style="width: 100%; height: 60%;">
                <img style="width: 100%; height: 100%;" src="{{url('upload/'.$item->image)}}" class="card-img-top" alt="...">
            </div>
            <div class="card-body" style="width: 100%; height: 40%; ">
            <h5 class="card-title">{{$item->name}}</h5>
            <p>Price :<strong class="text-danger">{{$item->price}}$</strong></p>

            <p class="card-text">{{$item->description}}</p>
            </div>
            <a href="{{route('buyNow',$item->id)}}" style="width: 100px;" class="btn btn-primary mb-3 ">BUY NOW</a>
      </div>
       @endforeach
       </div>
    </div>
    <div class="mx-4 mt-3">
        {{$shop->links()}}
    </div>
@endcomponent
@component('footer')

@endcomponent
