@extends('Company.admin.inc.main')
@section('container')
<div class="container py-3">
    <a class="btn btn-secondary btn-md m-3 float-end" href="{{route('Skills.index')}}" role="button">View skills </a>
    <div class="shadow p-2">
        <form action="{{route('Skills.update', $skill->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-3 ">
                <label for="" class="form-label">language</label>
                <input type="text" class="form-control" value="{{$skill->language}}" name="language" >
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">Percent</label>
                <input type="number" min="0" max="100"  class="form-control" value="{{$skill->percent}}" name="percent" placeholder="1 t0 100%">
            </div>
           
            <div class="my-3">
                <button class="btn btn-primary btn-md "  type="submit">update</button>
            </div>
        </form>
    </div>
</div>
@endsection()