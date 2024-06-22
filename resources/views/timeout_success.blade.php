@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Time Out Successful</h1>
        <p>You have successfully timed out.</p>
        <a href="{{ url('/print-dtr/'.$id) }}" class="btn btn-primary">Print DTR</a>
    </div>
@endsection
