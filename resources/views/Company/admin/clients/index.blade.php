@extends('Company.admin.inc.main')
@section('container')
@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible " role="alert">
        {{Session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container p-3">
<a href="{{route('Client.create')}}" class="btn btn-md btn-secondary float-end">Create client</a>
<table class="table table-responsive ">
    <thead>
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client )
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td><a href="{{asset('uploads/'. $client->img)}}"><img src="{{asset('uploads/'. $client->img)}}" height="100p" width="100px" alt=""></a></td>
            <td>
                <a class="btn btn-primary btn-sm " href="{{route('Client.edit',$client->id)}}" role="button">Edit</a>
                <a class="btn btn-info btn-sm " href="{{route('Client.show',$client->id)}}" role="button">View</a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$client->id}}">
                    Delete
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog  ">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel{{$client->id}}">Do you want to delete this item?</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 Are you sure?😟
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                  <form action="{{route('Client.destroy', $client->id)}}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger btn-sm " role="button"  type="submit">Delete </button>
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
{{$clients->links()}}
</div>
@endsection