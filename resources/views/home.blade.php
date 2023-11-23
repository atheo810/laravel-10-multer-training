@extends('layouts.master')

@section('content')
    {{-- <div class="row mt-5">
    @foreach ($addresses as $address)
        <div class="col-md-3">
            <div class="card">
                <h4>{{ $address->user->name }}</h4>
                <p>{{ $address->email }}</p>
                <p>{{ $address->address }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h4>{{ $user->name }}</h4>
                <p>{{ $user->email }}</p>
                <p>{{ $user->address->address }}</p>
            </div>
        </div> 
    @endforeach
</div> --}}
    <main role="main" class="container">
        <div class="col-md-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('upload-file') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Upload</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mt-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <a href="{{ route('download') }}" class="btn btn-primary mt-3">Downoad Here</a>
    </main>
@endsection
