@extends('Company.admin.inc.main')
@section('container')
@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible " role="alert">
        {{Session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container py-3">
<a href="{{route('Portfolio_details.create')}}" class="btn btn-md btn-secondary float-end">Create details</a>
<table class="table table-responsive ">
    <thead>
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">category</th>
            <th scope="col">client</th>
            <th scope="col">date</th>
            <th scope="col">project URl</th>
            <th scope="col">details</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($portfolio_details as $portfolio_detail )
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td>{{$portfolio_detail->category}}</td>
            <td>{{$portfolio_detail->client}}</td>
            <td>{{$portfolio_detail->date}}</td>
            <td>{{$portfolio_detail->project_url}}</td>
            <td>{{$portfolio_detail->details}}</td>
            <td>
                <a class="btn btn-primary btn-sm " href="{{route('Portfolio_details.edit',$portfolio_detail->id)}}"  role="button"><i class="fa-regular fa-pen-to-square"></i></a>
                <a class="btn btn-info btn-sm " href="{{route('Portfolio_details.show',$portfolio_detail->id)}}" role="button"><i class="fa-regular fa-eye"></i></a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$portfolio_detail->id}}">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{$portfolio_detail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog  ">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel{{$portfolio_detail->id}}">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 Are you sure?😟
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                  <form action="{{route('Portfolio_details.destroy', $portfolio_detail->id)}}" method="POST" enctype="multipart/form-data">
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
{{$portfolio_details->links()}};
</div>
@endsection