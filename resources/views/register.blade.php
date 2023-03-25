@extends('layout.master')

@section('contents')
    <div class="register-form">
        <form method="post" action="{{ route('register') }}">
            <h2>Registration</h2>
            @if (session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Username" class="form-control p_input">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control p_input">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control p_input">
            </div>
            <div class="form-group">
                <input type="password" name="admin_pw" placeholder="Admin Password" class="form-control p_input">
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
@stop
