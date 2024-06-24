@component('header')
<table class="table table-striped align-middle table-hover p-5" style="table-layout:fixed;">
    <h2 class="text-center mt-3 mb-3"><b><u>LIST OF SHOPS</u></b></h2>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>DESCRIPTION</th>
            <th>IMAGE</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shop as $val)
        <tr>
            <td>{{$val->id }}</td>
            <td>{{$val->name}}</td>
            <td>{{$val->price}}</td>
            <td>{{$val->qty}}</td>
            <td>{{$val->description}}</td>
            <td>
                <img width="100px" src="{{url('upload/'.$val->image)}}" alt="">
            </td>
            <td>
                <a href="{{route('edit-shop',$val->id)}}" class="btn btn-success">Edit</a>
                <button class="btn btn-danger " id="btn-delete" data-id="{{$val->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
{{-- <div class="modal" id="confirmDeleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure you want to delete this product?</h5>
                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger close" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDeleteBtn" class="btn btn-primary">Yes, delete it.</a>
            </div>
        </div>
    </div>
</div> --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this product?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('delete-shop')}}" method="post">
            @csrf
            <input type="hidden" name="remove_id" id="remove_id">
            <div class="modal-footer">
                <button type="button" class="btn btn-danger close" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<script>
    $(document).ready(function () {
        // $('.delete-btn').click(function () {
        //     var productId = $(this).data('id');
        //     $('#confirmDeleteBtn').attr('href', "{{ route('delete-shop', ':id') }}".replace(':id', productId));
        //     $('#confirmDeleteModal').modal('show');
        // });

        // $('.close').click(function () {
        //     $('#confirmDeleteModal').modal('hide');
        // });

        $('body').on('click','#btn-delete',function(){
            const postId=$(this).attr('data-id');
            $('#remove_id').val(postId);

        })
    });
</script>
@endcomponent
@component('footer')
@endcomponent
