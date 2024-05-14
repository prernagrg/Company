@extends('Company.admin.inc.main')
@section('container')
<div class="container">
    <a href="{{route('Files.index')}}" class="btn btn-sm btn-secondary float-end" role="button">View Files</a>
    <div class="shadow p-3">
        <form action="{{route('Files.update', $file->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-3">
                <label for="" class="form-label">Title</label>
                <input type="text" class="form-control" value="{{$file->title}}" name="title" placeholder="Image title here">
            </div>
            <div class="my-3">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" name="img" >
                <img src="{{asset('uploads/'. $file->img)}}" width="30%" height="auto" alt="">
            </div>
            <div class="my-3">
                <button class="btn btn-primary btn-md" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection