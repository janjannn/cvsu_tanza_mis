@extends('layouts.app')

@section('content')
<style>
    .reveal {
        animation: textReveal 1s ease-in-out;
    }

    @keyframes textReveal {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron text-center" style="margin-top: 190px;">
                    <h1 class="display-4 reveal">Cavite State University<br>Tanza Campus <br>Management Information<br>System</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
