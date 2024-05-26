@extends('Company.admin.inc.main')
@section('container')
<div class="container py-4">
    <a class="btn btn-secondary btn-md float-end m-3" href="{{ route('Portfolio.index') }}" role="button">View team</a>
    <div class="shadow p-3">
        <form action="{{ route('Portfolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @for($i = 1; $i <= 3; $i++) {{-- Loop for app1, app2, app3 --}}
            <div class="my-3">
                <label for="app{{ $i }}" class="form-label">app{{ $i }}</label>
                <div class="input-group">
                    <input type="text" class="form-control" disabled name="app{{ $i }}" id="app{{ $i }}">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{ $i }}">Choose Image</button>
                </div>
            </div>
            @endfor
            @for($i = 1; $i <= 3; $i++) {{-- Loop for app1, app2, app3 --}}
            <div class="my-3">
                <label for="web{{ $i }}" class="form-label">web{{ $i }}</label>
                <div class="input-group">
                    <input type="text" class="form-control" disabled name="web{{ $i }}" id="web{{ $i }}">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{ $i }}">Choose Image</button>
                </div>
            </div>
            @endfor
            @for($i = 1; $i <= 3; $i++) {{-- Loop for app1, app2, app3 --}}
            <div class="my-3">
                <label for="card{{ $i }}" class="form-label">card{{ $i }}</label>
                <div class="input-group">
                    <input type="text" class="form-control" disabled name="card{{ $i }}" id="card{{ $i }}">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{ $i }}">Choose Image</button>
                </div>
            </div>
            @endfor

            <!-- Repeat similar structure for other input fields -->

            <div class="my-3">
                <button class="btn btn-primary btn-md" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal structure -->
@foreach ($files as $index => $file)
<div class="modal fade" id="exampleModal{{ $index + 1 }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $index + 1 }}"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel{{ $index + 1 }}">Choose Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <style>
                    [type=radio]:checked+img {
                        outline: 2px solid red;
                    }
                </style>
               
                <label>
                    <input type="radio" name="img{{ $index + 1 }}" value="{{ $file->img }}" style="opacity: 0">
                    <img src="{{ asset('uploads/'. $file->img) }}" alt="" height="100px" width="100px">
                </label>
              
                <div>
                    {{ $files->links() }}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                onclick="saveImage({{ $index + 1 }}, 'app')">Save app</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                onclick="saveImage({{ $index + 1 }}, 'web')">Save web</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                onclick="saveImage({{ $index + 1 }}, 'card')">Save card</button>
            
            
            </div>
        </div>
    </div>
</div>
@endforeach


<script>
    function saveImage(index,type) {
        var x = document.querySelector('input[name=img' + index + ']:checked').value;
        document.getElementById(type + index).value = x;
    }
</script>
@endsection
