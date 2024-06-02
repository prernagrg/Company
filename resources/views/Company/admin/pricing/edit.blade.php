@extends('Company.admin.inc.main')
@section('container')
<div class="container py-3">
    <a class="btn btn-secondary btn-md m-3 float-end" href="{{route('Pricing.index')}}" role="button">View Pricings </a>
    <div class="shadow p-2">
        <form action="{{route('Pricing.update',$pricing->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-3 ">
                <label for="course" class="form-label">Course</label>
              <select name="course" value="{{$pricing->course}}" id="course" class="form-control">
                <option value="free">Free</option>
                <option value="business">Business</option>
                <option value="developer">Developer</option>
                <option value="ultimate">Ultimate</option>
              </select>
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">Price</label>
                <input type="number" value="{{$pricing->price}}" class="form-control" name="price" placeholder="price in dollars">
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">Course 1</label>
                <input type="text" value="{{$pricing->course1}}" class="form-control" name="course1" placeholder="course1">
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">Course 2</label>
                <input type="text" value="{{$pricing->course2}}" class="form-control" name="course2" placeholder="course2">
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">Course 3</label>
                <input type="text" value="{{$pricing->course3}}" class="form-control" name="course3" placeholder="course3">
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">Course 4</label>
                <input type="text" value="{{$pricing->course4}}" class="form-control" name="course4" placeholder="course4">
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">Course 5</label>
                <input type="text" value="{{$pricing->course5}}" class="form-control" name="course5" placeholder="course5">
            </div>
            <div class="my-3 ">
                <label for="optional" class="form-label">Optional</label>
                <select name="optional" value="{{$pricing->optional}}" class="form-control" placeholder="optional for course 4 and 5" id="optional">
                    <option value="na">na</option>
                    <option value="null">null</option>
                </select>
            </div>
           
            <div class="my-3">
                <button class="btn btn-primary btn-md "  type="submit">update</button>
            </div>
        </form>
    </div>
</div>
@endsection()