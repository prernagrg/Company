@extends('Company.admin.inc.main')
@section('container')
<div class="container py-4 ">
    <a class="btn btn-secondary btn-md float-end m-3" href="{{route('About.index')}}" role="button">View about </a>
   <div class="shadow p-3 ">
    <form action="{{route('About.update',$about->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="my-3 ">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control" value="{{$about->title}}" name="title" placeholder="Write title here" >
        </div>
        <div class="my-3 ">
            <label for="" class="form-label">Sub-title</label>
            <input type="text" class="form-control" value="{{$about->subtitle}}" name="subtitle" placeholder="write the subtitle here">
        </div>
        <div class="my-3 ">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="3" rows="3" class="form-control" placeholder="Write the description here">{{$about->description}}</textarea>
        </div>
        <div class="my-3">
            <button class="btn btn-primary btn-md "  type="submit">upadte</button>
        </div>
    </form>
   </div>
</div>
@endsection