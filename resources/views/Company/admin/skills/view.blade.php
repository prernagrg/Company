@extends('Company.admin.inc.main')
@section('container')
<div class="container py-3">
    <a class="btn btn-secondary btn-md m-3 float-end" href="{{route('Skills.index')}}" role="button">View skills </a>
    <div class="shadow p-2">
        <form action="{{route('Skills.show' , $skill->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-3 ">
                <label for="" class="form-label">language</label>
                <input type="text" class="form-control" @readonly(true) value="{{$skill->language}}" name="language" >
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">Percent</label>
                <input type="number" min="0" max="100"  class="form-control" @readonly(true) value="{{$skill->percent}}" name="percent" placeholder="1 t0 100%">
            </div>
        
        </form>
    </div>
</div>
@endsection()