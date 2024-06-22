@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daily Time Record for {{ $user->name }}</h1>
        <!-- Display DTR details -->
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dtr as $record)
                    <tr>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->time_in }}</td>
                        <td>{{ $record->time_out }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
