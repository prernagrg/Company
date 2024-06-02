@extends('Company.admin.inc.main')
@section('container')
<div class="container py-4 ">
    <a class="btn btn-secondary btn-md float-end m-3" href="{{route('Portfolio_img.index')}}" role="button">View images  </a>
   <div class="shadow p-3 ">
    <form action="{{route('Portfolio_img.store',$portfolio_img->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="my-3 ">
            <label for="" class="form-label">Image</label>
           <div>
            <div class="input-group">
           <a href="{{asset('uploads/'. $portfolio_img->img)}}"><img src="{{asset('uploads/' . $portfolio_img->img)}}" width="100%" height="auto" alt=""></a>
        </div>
       
    </form>
   </div>
</div>
<script>
    function firstFunction(){
        var x = document.querySelector('input[name=img]:checked').value;
        document.getElementById('image').value = x;

    }
</script>
@endsection