@extends('Company.admin.inc.main')
@section('container')
@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible " role="alert">
        {{Session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container p-3">
<a href="{{route('Blog_single.create')}}" class="btn btn-md btn-secondary float-end">Create blog_single</a>
<table class="table table-responsive ">
    <thead>
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Image</th>
            <th scope="col">title</th>
            <th scope="col">quote</th>
            <th scope="col">description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blog_singles as $blog_single )
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td><a href="{{asset('uploads/'. $blog_single->img)}}"><img src="{{asset('uploads/'. $blog_single->img)}}" height="100p" width="100px" alt=""></a></td>
            <td>{{$blog_single->title}}</td>
            <td>{{$blog_single->quote}}</td>
            <td>{{$blog_single->description}}</td>
            <td>
                <a class="btn btn-primary btn-sm " href="{{route('Blog_single.edit',$blog_single->id)}}" role="button"><i class="fa-regular fa-pen-to-square"></i></a>
                <a class="btn btn-info btn-sm " href="{{route('Blog_single.show',$blog_single->id)}}" role="button"><i class="fa-regular fa-eye"></i></a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$blog_single->id}}">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{$blog_single->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog  ">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel{{$blog_single->id}}">Do you want to delete this item?</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 Are you sure?😟
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                  <form action="{{route('Blog_single.destroy', $blog_single->id)}}" method="POST" enctype="multipart/form-data">
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
{{$blog_singles->links()}}
</div>
@endsection