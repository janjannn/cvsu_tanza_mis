@extends('layouts.app')

@section('content')
<div class="container">
    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar" style="margin-top: -20px; position: fixed; height: 100%; overflow-y: auto;">
        <div class="position-sticky">
            <!-- Dashboard Header -->
            <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                Dashboard
            </h5>
            <!-- End Dashboard Header -->
            <div class="col-md-3 float-right">
                <div class="badge bg-warning text-dark">
                    <span class="fs-6">Active Year:{{ $activeYear->year }} | Quarter:{{ $activeYear->quarter }}</span>
                </div>
            </div>

            <!-- Navigation Links -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showDashboardContent('Reports'); return false;">{{ __('View Reports') }}</a>
                </li>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('report.form') }}" onclick="showDashboardContent('Submit Report'); return false;">{{ __('Submit Report') }}</a>
                </li>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/kiosk">{{ __('Go to Kiosk') }}</a>
                </li>
        </div>
@endsection
