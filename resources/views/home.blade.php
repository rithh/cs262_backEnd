@extends('layout.master')
{{-- @include('layout.slider') --}}
@section('contents')
    <div class="container">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">Operator</th>
                    <th scope="col">Depart From</th>
                    <th scope="col">Depart Time</th>
                    <th scope="col">Arrive at</th>
                    <th scope="col">Booked Seats</th>
                    <th scope="col">Total</th>
                    <th scope="col">Order made on</th>
                </tr>
            </thead>
            @foreach ($tpl_admin as $bus)
                <tbody>
                    <tr>
                        <td>{{ $bus->username }}</td>
                        <td>{{ $bus->op_name }}</td>
                        <td>{{ $bus->depart_from }}</td>
                        <td>{{ $bus->depart_time }}</td>
                        <td>{{ $bus->arrive_at }}</td>
                        <td>{{ $bus->booked_seats }}</td>
                        <td>${{ $bus->total }}</td>
                        <td>{{ $bus->created_at }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
