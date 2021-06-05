@extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Product
        </div>
        <div class="card-body">
          @include('admin.partials.messages')
          <table class="table table-hover">
            <tr>
              <th>#</th>
              <th>Product Title</th>
              <th>Price</th>
              <th>Quality</th>
              <th>Action</th>
            </tr>

            @foreach($products as $product)
            <tr>
              <td>#</td>
              <td>{{ $product->title}}</td>
              <td>{{ $product->price}}</td>
              <td>{{ $product->quantity}}</td>
              <td>
                <a class="btn btn-info" href="{{route('admin.product.edit', $product->id)}}">Edit</a>
                <a href="#deleteModal{{ $product->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                 <!--Delete Modal -->
                <div class="modal fade" id="deleteModal{{ $product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are Sure To Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form action="{{ route('admin.product.delete', $product->id) }}"  method="post">
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-danger" >Primary Delete</button>
                        </form>
                         <div class="modal fade" id="deleteModal{{ $product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>



              </td>

              
              
            </tr>
            @endforeach
          </table>
          
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
