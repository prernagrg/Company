@extends('Company.admin.inc.main')
@section('container')
<div class="container py-3">
    <a class="btn btn-secondary btn-md m-3 float-end" href="{{route('Faqs.index')}}" role="button">View FAQS </a>
    <div class="shadow p-2">
        <form action="{{route('Faqs.update',$faq->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-3 ">
                <label for="" class="form-label">question</label>
                <input type="text" value="{{$faq->question}}" class="form-control" name="question" placeholder="Write Question here" >
            </div>
            <div class="my-3 ">
                <label for="" class="form-label">answer</label>
                <textarea type="text" rows="2"   class="form-control" name="answer" placeholder="Write your answer here"> {{$faq->answer}}</textarea>
            </div>
           
            <div class="my-3">
                <button class="btn btn-primary btn-md "  type="submit">update</button>
            </div>
        </form>
    </div>
</div>
@endsection()