@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Register</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        value="{{ old('name') }}" placeholder="">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                        value="{{ old('email') }}" placeholder="">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                        value="{{ old('phone') }}" placeholder="">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
