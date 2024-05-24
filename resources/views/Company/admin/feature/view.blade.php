@extends('Company.admin.inc.main')
@section('container')
<div class="container py-3">
    <a class="btn btn-secondary btn-md m-3 float-end" href="{{route('Feature.index')}}" role="button">View features </a>
    <div class="shadow p-2">
        <form action="{{route('Feature.show',$feature->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-3 ">
                <label for="" class="form-label">icon</label>
                <input type="text" value="{{$feature->icon}}" @readonly(true) class="form-control" name="icon" >

            </div>
            <div class="my-3 ">
                <label for="" class="form-label">title</label>
                <input type="text" value="{{$feature->title}}" @readonly(true) class="form-control" name="title" >
            </div>
        </form>
    </div>
</div>
@endsection()