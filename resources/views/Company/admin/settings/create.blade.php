@extends('Company.admin.inc.main')
@section('container')
<div class="container py-3">
    <a class="btn btn-secondary btn-md m-3 float-end" href="{{route('Settings.index')}}" role="button">View settings </a>
    <div class="shadow p-2">
        <form action="{{route('Settings.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-3 ">
                <label for="" class="form-label">site key</label>
                <input type="text" class="form-control" name="site_key" >
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">site value</label>
                <input type="text"  class="form-control" name="site_value"/>
            </div>
           
            <div class="my-3">
                <button class="btn btn-primary btn-md "  type="submit">create</button>
            </div>
        </form>
    </div>
</div>
@endsection()