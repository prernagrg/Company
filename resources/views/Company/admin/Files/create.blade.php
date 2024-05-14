@extends('Company.admin.inc.main')
@section('container')
<div class="container py-3">
    <a href="{{route('Files.index')}}" class="btn btn-sm btn-secondary m-3 float-end" role="button">View Files</a>
    <div class="shadow p-3">
        <form action="{{route('Files.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-3">
                <label for="" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Image title here">
            </div>
            <div class="my-3">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" name="img" >
            </div>
            <div class="my-3">
                <button class="btn btn-primary btn-md" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection