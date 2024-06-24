@component('header')
<div class="container " style="display: flex; justify-content: center;gap:100px;margin-top: 20px">
    <div class="card" style="width: 18rem;">
        <img src="{{ url('upload/',$crud->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$crud->name}}</h5>
          <p class="card-text text-danger">{{$crud->price}}$</p>
        <a href="{{route('home')}}" class="btn btn-danger">Cancel</a>

        </div>
      </div>
      <div class="qr" style="width: 500px;">
            <h2 class="text-center">You need to pay {{$crud->price}}$</h2>
            <div class="pay" style="width:100%; padding: 20px; display: flex; justify-content: center">
                <img width="200px" src="/qr.jpg" alt="">
            </div>
            <p class="text-center">Scan Now</p>
      </div>
</div>
@endcomponent
@component('footer')

@endcomponent
