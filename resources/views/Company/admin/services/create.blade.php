@extends('Company.admin.inc.main')
@section('container')
<div class="container py-4 ">
    <a class="btn btn-secondary btn-md float-end m-3" href="{{route('Services.index')}}" role="button">View Services </a>
   <div class="shadow p-3 ">
    <form action="{{route('Services.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-3 ">
            <label for="" class="form-label">Logo</label>
            <input type="text" class="form-control" name="logo" >
        </div>
        <div class="my-3 ">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="write the title here">
        </div>
        <div class="my-3 ">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="3" rows="3" class="form-control" placeholder="Write the description here"></textarea>
        </div>
        <div class="my-3">
            <button class="btn btn-primary btn-md "  type="submit">create</button>
        </div>
    </form>
   </div>
</div>
@endsection