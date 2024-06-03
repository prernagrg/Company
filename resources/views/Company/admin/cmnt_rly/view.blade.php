@extends('Company.admin.inc.main')
@section('container')
<div class="container py-4 ">
    <a class="btn btn-secondary btn-md float-end m-3" href="{{route('Cmnt_rly.index')}}" role="button">View cmnt_rly  </a>
   <div class="shadow p-3 ">
    <form action="{{route('Cmnt_rly.show',$cmnt_rly->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="my-3 ">
            <label for="" class="form-label">Image</label>
           <div>
            <div class="input-group">
                <input type="text" value="{{$cmnt_rly->img}}" class="form-control" disabled name="img" id="image" >
             
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog        ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Choose Image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <style>
                                    [type=radio]:checked+img{
                                        outline: 2px solid red;
                                    }
                                </style>
                                @foreach ($files as $file )
                                    <label >
                                        <input type="radio" name="img" value="{{$file->img}}" style="opacity: 0" />
                                        <img src="{{asset('uploads/'. $file->img)}}" alt="" height="100px" width="100px">
                                    </label>
                                @endforeach
                                <div>
                                    {{$files->links()}}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstFunction()">Save </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
           <img src="{{asset('uploads/'. $cmnt_rly->img)}}" height="auto" width="25%" alt="">
        </div>
        <div class="my-3 ">
            <label for="" class="form-label">Name</label>
            <input @readonly(true) value="{{$cmnt_rly->name}}" type="text" class="form-control" name="name" placeholder="write the Name here">
        </div>
        <div class="my-3 ">
            <label for="" class="form-label">date</label>
            <input @readonly(true) type="text" value="{{$cmnt_rly->date}}" name="date" class="form-control" placeholder="Write the date here">
        </div>
        <div class="my-3 ">
            <label for="" class="form-label">description</label>
            <textarea @readonly(true) type="text" rows="2" name="description" class="form-control" placeholder="Write the description here">{{$cmnt_rly->description}}</textarea>
      
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