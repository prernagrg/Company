@extends('Company.admin.inc.main')
@section('container')
@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible " role="alert">
        {{Session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container p-3">
<a href="{{route('Portfolio.create')}}" class="btn btn-md btn-secondary float-end">Create portfolio</a>
<table class="table table-responsive ">
    <thead>
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">app1</th>
            <th scope="col">app2</th>
            <th scope="col">app3</th>
            <th scope="col">card1</th>
            <th scope="col">card2</th>
            <th scope="col">card3</th>
            <th scope="col">web1</th>
            <th scope="col">web2</th>
            <th scope="col">web3</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($portfolios as $portfolio )
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td><a href="{{asset('uploads/'. $portfolio->app1)}}"><img src="{{asset('uploads/'. $portfolio->app1)}}" height="100p" width="100px" alt=""></a></td>
            <td><a href="{{asset('uploads/'. $portfolio->app2)}}"><img src="{{asset('uploads/'. $portfolio->app2)}}" height="100p" width="100px" alt=""></a></td>
            <td><a href="{{asset('uploads/'. $portfolio->app3)}}"><img src="{{asset('uploads/'. $portfolio->app3)}}" height="100p" width="100px" alt=""></a></td>
            <td><a href="{{asset('uploads/'. $portfolio->card1)}}"><img src="{{asset('uploads/'. $portfolio->card1)}}" height="100p" width="100px" alt=""></a></td>
            <td><a href="{{asset('uploads/'. $portfolio->card2)}}"><img src="{{asset('uploads/'. $portfolio->card2)}}" height="100p" width="100px" alt=""></a></td>
            <td><a href="{{asset('uploads/'. $portfolio->card3)}}"><img src="{{asset('uploads/'. $portfolio->card3)}}" height="100p" width="100px" alt=""></a></td>
            <td><a href="{{asset('uploads/'. $portfolio->web1)}}"><img src="{{asset('uploads/'. $portfolio->web1)}}" height="100p" width="100px" alt=""></a></td>
            <td><a href="{{asset('uploads/'. $portfolio->web2)}}"><img src="{{asset('uploads/'. $portfolio->web2)}}" height="100p" width="100px" alt=""></a></td>
            <td><a href="{{asset('uploads/'. $portfolio->web3)}}"><img src="{{asset('uploads/'. $portfolio->web3)}}" height="100p" width="100px" alt=""></a></td>
            <td>
                <a class="btn btn-primary btn-sm " href="{{route('Portfolio.edit',$portfolio->id)}}" role="button">Edit</a>
                <a class="btn btn-info btn-sm " href="{{route('Portfolio.show',$portfolio->id)}}" role="button">View</a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$portfolio->id}}">
                    Delete
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{$portfolio->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog  ">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel{{$portfolio->id}}">Do you want to delete this item?</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 Are you sure?😟
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                  <form action="{{route('portfolio.destroy', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
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
{{$portfolios->links()}}
</div>
@endsection