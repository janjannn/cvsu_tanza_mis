@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Time In Successful</h1>
        <p>You have successfully timed in.</p>
        <a href="{{ url('/print-dtr/'.$id) }}" class="btn btn-primary">Print DTR</a>
        <a href="{{ url('/kiosk') }}" class="btn btn-secondary">Quit</a>
    </div>
@endsection
