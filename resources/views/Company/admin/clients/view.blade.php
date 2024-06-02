@extends('Company.admin.inc.main')
@section('container')
<div class="container py-3">
    <a class="btn btn-secondary btn-md m-3 float-end" href="{{route('Client.index')}}" role="button">View clients </a>
    <div class="shadow p-2">
        <form action="{{route('Client.show',$client->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-3 ">
                <label for="" class="form-label">Image</label>
               <div>
                <div class="input-group">
           
               <img src="{{asset('uploads/'. $client->img)}}" height="auto" width="50%" alt="">

            </div>
            
        </form>
    </div>
</div>

@endsection()