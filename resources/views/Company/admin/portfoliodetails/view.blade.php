@extends('Company.admin.inc.main')
@section('container')
    <div class="container py-3">
        <a class="btn btn-secondary btn-md m-3 float-end" href="{{ route('Portfolio_details.index') }}" role="button">View
            details </a>
        <div class="shadow p-2">
            <form action="{{ route('Portfolio_details.show',$portfolio_detail->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="my-3 ">
                    <label for="" class="form-label">category</label>
                    <input type="text" @readonly(true) value="{{$portfolio_detail->category}}" class="form-control" name="category" placeholder="e.g: Web design">
                </div>
                <div class="my-3 ">
                    <label for="" class="form-label">client</label>
                    <input type="text" @readonly(true) value="{{$portfolio_detail->client}}" class="form-control" name="client" placeholder="e.g: ABC Company">
                </div>
                <div class="my-3 ">
                    <label for="" class="form-label">date</label>
                    <input type="text" @readonly(true) value="{{$portfolio_detail->date}}" class="form-control" name="date" placeholder="write date here">
                </div>
                <div class="my-3 ">
                    <label for="" class="form-label">project_url</label>
                    <input type="text" value="{{$portfolio_detail->project_url}}" @readonly(true) class="form-control" name="project_url"
                        placeholder="paste the link of your project here">
                </div>
                <div class="my-3 ">
                    <label for="" class="form-label">details</label>
                    <textarea type="text" @readonly(true) cols="1" rows="3" class="form-control" name="details" >{{$portfolio_detail->details}}</textarea>
                </div>
            </form>
        </div>
    </div>
@endsection()
