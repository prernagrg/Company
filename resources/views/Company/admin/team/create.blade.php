@extends('Company.admin.inc.main')
@section('container')
<div class="container py-4 ">
    <a class="btn btn-secondary btn-md float-end m-3" href="{{route('Team.index')}}" role="button">View team  </a>
   <div class="shadow p-3 ">
    <form action="{{route('Team.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-3 ">
            <label for="" class="form-label">Image</label>
           <div>
            <div class="input-group">
                <input type="text" class="form-control" disabled name="img" id="image" >
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   Choose Image
                </button>
                
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
                                    <label class="my-2">
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
        </div>
        <div class="my-3 ">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="write the Name here">
        </div>
        <div class="my-3 ">
            <label for="" class="form-label">Position</label>
            <input type="text" name="position" class="form-control" placeholder="Write the position here">
        </div>
        <div class="my-3">
            <button class="btn btn-primary btn-md "  type="submit">create</button>
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