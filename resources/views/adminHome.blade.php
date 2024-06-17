@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Side panel navigation -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar" style="margin-top: -20px; position: fixed; height: 100%; overflow-y: auto;">
            <div class="position-sticky">
                <!-- Dashboard Header -->
                <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    Dashboard
                </h5>
                <!-- End Dashboard Header -->

                <!-- Navigation Links -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('faculties'); return false;">{{ __('View Faculties') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('print_report'); return false;">{{ __('Print Report') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('academic_year'); return false;">{{ __('Set Academic Year/Quarter') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('designations'); return false;">Designations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('email_reminder'); return false;">{{ __('Email Reminder') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" onclick="showDashboardContent('view_reports'); return false;">{{ __('View Reports') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('view_form'); return false;">{{ __('View Form') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('users_sched'); return false;">{{ __('Users Schedule') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kiosk">{{ __('Go to Kiosk') }}</a>
                    </li>
                </ul>
                <!-- End Navigation Links -->
            </div>
        </nav>
        <!-- End side panel navigation -->

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 id="dashboardTitle" class="h2">Dashboard</h1>
            </div>

            <div class="card">
                <div class="card-body" id="dashboardContent">
                    @include('stats')
                </div>
            </div>
        </main>
        <!-- End main content -->
    </div>
</div>

<script>
    function showDashboardContent(content) {
        let dashboardContent = document.getElementById('dashboardContent');
        let dashboardTitle = document.getElementById('dashboardTitle');

        // Clear previous content
        dashboardContent.innerHTML = '';

        // Update the title inside the <h1> tag based on the content parameter
        switch(content) {
            case 'faculties':
                dashboardTitle.innerText = 'View Faculties';
                fetchContent('{{ route('faculties') }}');
                break;
            case 'print_report':
                dashboardTitle.innerText = 'Print Report';
                //fetchContent('');
                break;
            case 'academic_year':
                dashboardTitle.innerText = 'Set Academic Year/Quarter';
                fetchContent('{{ route('years') }}');
                break;
            case 'designations':
                dashboardTitle.innerText = 'Designations';
                fetchContent('{{ route('designations') }}');
                break;
            case 'email_reminder':
                dashboardTitle.innerText = 'Email Reminder';
                //fetchContent('');
                break;
            case 'view_reports':
                dashboardTitle.innerText = 'View Reports';
                fetchContent('{{ route('report.view') }}');
                break;
            case 'view_form':
                dashboardTitle.innerText = 'View Form';
                fetchContent('{{ route('report.form') }}');
                break;
            default:
                dashboardTitle.innerText = 'Dashboard';
                displayDashboard();
        }
    }

    function fetchContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                document.getElementById('dashboardContent').innerHTML = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function displayDashboard() {
        let dashboardContent = document.getElementById('dashboardContent');
        let dashboardTitle = document.getElementById('dashboardTitle');
        dashboardTitle.innerText = 'Dashboard';

        // Fetch dashboard statistics
        fetch('{{ route('dashboard.stats') }}')
            .then(response => response.json())
            .then(data => {
                document.getElementById('totalFaculties').innerText = data.totalFaculties;
                document.getElementById('totalDesignations').innerText = data.totalDesignations;
                document.getElementById('totalReports').innerText = data.totalReports;
                document.getElementById('totalForms').innerText = data.totalForms;
            })
            .catch(error => {
                console.error('Error fetching dashboard statistics:', error);
            });
    }

    // Display the main dashboard by default
    displayDashboard();
</script>
@endsection
