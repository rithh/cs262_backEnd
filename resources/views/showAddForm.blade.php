@extends('layout.master')
{{-- @include('layout.slider') --}}
@section('contents')
    <div class="container">
        <div class="login-form">
            <form method="post" action="{{ url('add') }}">
                @if (session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
                <h2>Add to Bus table</h2>
                @csrf
                {{-- <div class="form-group">
                    <input type="text" name="logo" placeholder="Logo">
                </div> --}}
                <div class="form-group">
                    <input type="text" name="op" placeholder="Operator" list="operators">
                    <datalist id="operators">
                        <option value="Virak Buntham">
                        <option value="Cambodia Post">
                        <option value="Chan Moly Roth">
                        <option value="MBUS">
                        <option value="Mey Hong Transport">
                        <option value="Seila Angkor Khmer Express">
                        <option value="Larryta Express">
                    </datalist>
                </div>
                <div class="form-group">
                    <input type="text" name="dp" placeholder="Departing from" list="location-depart">
                    <datalist id="location-depart">
                        <option value="Phnom Penh">
                        <option value="Siem Reap">
                        <option value="Sihanouk Ville">
                    </datalist>
                </div>
                <div class="form-group">
                    <input type="text" name="dt" placeholder="Departing at">
                </div>
                <div class="form-group">
                    <input type="text" name="ai" placeholder="Arriving in" list="location-arrive">
                    <datalist id="location-arrive">
                        <option value="Phnom Penh">
                        <option value="Siem Reap">
                        <option value="Sihanouk Ville">
                        <option value="Poipet">
                    </datalist>
                </div>
                <div class="form-group">
                    <input type="text" name="aa" placeholder="Arriving at">
                </div>
                <div class="form-group">
                    <input type="text" name="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <input type="text" name="sa" placeholder="Available seats">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection
