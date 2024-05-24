@extends('Company.admin.inc.main')
@section('container')
<div class="container py-3">
    <a class="btn btn-secondary btn-md m-3 float-end" href="{{route('Feature.index')}}" role="button">View features </a>
    <div class="shadow p-2">
        <form action="{{route('Feature.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-3 ">
                <label for="" class="form-label">icon</label>
                <input type="text" class="form-control" name="icon" >
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">title</label>
                <input type="text"  class="form-control" name="title" >
            </div>
           
            <div class="my-3">
                <button class="btn btn-primary btn-md "  type="submit">create</button>
            </div>
        </form>
    </div>
</div>
@endsection()