@extends('layouts.template')

@section('konten')
    <div class="w-50 mt-4 center border rounded px-3 py-3 mx-auto bg-body rounded shadow-sm">
        <h1>Login</h1>
        <form action="/session/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
@endsection