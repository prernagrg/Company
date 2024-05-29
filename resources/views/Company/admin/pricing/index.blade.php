@extends('Company.admin.inc.main')
@section('container')
@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible " role="alert">
        {{Session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container p-3">
<a href="{{route('Pricing.create')}}" class="btn btn-md btn-secondary float-end">Create pricings</a>
<table class="table table-responsive " style="width: 50%">
    <thead>
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Course</th>
            <th scope="col">Price</th>
            <th scope="col">Course1</th>
            <th scope="col">Course2</th>
            <th scope="col">Course3</th>
            <th scope="col">Course4</th>
            <th scope="col">Course5</th>
            <th scope="col">optional</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pricings as $pricing )
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td>{{$pricing->course}}</td>
            <td>{{$pricing->price}}</td>
            <td>{{$pricing->course1}}</td>
            <td>{{$pricing->course2}}</td>
            <td>{{$pricing->course3}}</td>
            <td>{{$pricing->course4}}</td>
            <td>{{$pricing->course5}}</td>
            <td>{{$pricing->optional}}</td>
            <td class="action">
                <a class="btn btn-primary btn-sm "  href="{{route('Pricing.edit',$pricing->id)}}" role="button">Edit</a>
                <a class="btn btn-info btn-sm " href="{{route('Pricing.show',$pricing->id)}}" role="button">View</a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pricing->id}}">
                    Delete
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{$pricing->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog  ">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel{{$pricing->id}}">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 Are you sure?😟
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                  <form action="{{route('Pricing.destroy', $pricing->id)}}" method="POST" enctype="multipart/form-data">
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
{{$pricings->links()}};
</div>
@endsection