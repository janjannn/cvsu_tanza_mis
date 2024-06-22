@extends('layouts.app')

@section('content')
<style>
    .reveal {
        animation: textReveal 1s ease-in-out;
        color: white; /* Set text color to white */
        font-size: 4rem; /* Increase font size to 4rem */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow for better readability */
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

    /* Style for the fixed background image */
    .background-image {
        background-image: url('{{ asset('imgs/logooo.jpg') }}'); /* Replace 'background.jpg' with your image path */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1; /* Ensure the background stays behind other content */
    }

    /* Style for the content to ensure it's on top of the background */
    .content {
        position: relative;
        z-index: 1; /* Make sure content is on top of the background */
    }

    .jumbotron {
        margin-top: 190px;
        size: 500px;

    }
</style>

<div class="background-image"></div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron text-center">
                    <h1 class="display-4 reveal">Cavite State University<br>Tanza Campus <br>Management Information<br>System</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
