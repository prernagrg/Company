@extends('Company.admin.inc.main')
@section('container')
<div class="container py-3">
    <a class="btn btn-secondary btn-md m-3 float-end" href="{{route('Client.index')}}" role="button">View clients </a>
    <div class="shadow p-2">
        <form action="{{route('Client.update',$client->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
               <img src="{{asset('uploads/'. $client->img)}}" width="30%" height="auto" alt="">

            </div>
            <div class="my-3">
                <button class="btn btn-primary btn-sm" type="submit">update</button>
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
@endsection()