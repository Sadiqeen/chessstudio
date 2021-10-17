@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border border-success">
                <div class="card-body text-center">
                    <h1 class="text-center">ขอบคุณ</h1>
                    <h2 class="text-center">คุณ {{ $name }} สำหรับการสมัคร</h2>
                    <a class="btn btn-success mt-5" href="{{ route('index') }}">กลับหน้าหลัก</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
