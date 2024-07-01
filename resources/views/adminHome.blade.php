@extends('layouts.app')

@section('content')
<style>
    /* Style for the fixed background image */
    .background-image {
        background-image: url('{{ asset('imgs/logooo.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    /* Style for the sidebar navigation */
    #sidebar {
        background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
        border-right: 1px solid rgba(0, 0, 0, 0.1); /* Light border for separation */
        height: 100%; /* Full height */
        overflow-y: auto; /* Allow scrolling if content exceeds height */
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        width: 220px; /* Adjust width as needed */
        padding-top: 50px; /* Optional: Adjust padding */
        transition: margin-left 0.3s ease; /* Smooth transition for margin change */
    }

    .sidebar-heading {
        color: #333; /* Dark text color */
        font-size: 1.2rem; /* Example: Adjust font size */
        padding: 10px 20px; /* Example: Adjust padding */
        margin-bottom: 0; /* Optional: Adjust margin */
    }

    .nav-link {
        color: #333; /* Dark text color for links */
        padding: 10px 20px; /* Example: Adjust padding */
        margin-bottom: 0; /* Optional: Adjust margin */
    }

    .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.1); /* Light background color on hover */
    }

    /* Main content styles */
    .main-content {
        margin-left: 220px; /* Adjust based on sidebar width */
        padding: 20px; /* Example: Adjust padding */
        transition: margin-left 0.3s ease; /* Smooth transition for margin change */
    }

    .dashboard-title {
        color: white; /* Example: Adjust title color */
        margin-top: 20px; /* Example: Adjust margin */
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        #sidebar {
            margin-left: -220px; /* Collapse the sidebar on smaller screens */
        }

        .main-content {
            margin-left: 0; /* Adjust main content to start from the left edge */
        }
    }
</style>

<div class="background-image"></div>

<div class="container-fluid">
    <div class="row">
        <!-- Side panel navigation -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light">
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
                        <a class="nav-link" href="/printreport" onclick="showDashboardContent('print_report'); return false;">{{ __('Print Report') }}</a>
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
                        <a class="nav-link" href="#" onclick="showDashboardContent('view_reports'); return false;">{{ __('View Reports') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('view_form'); return false;">{{ __('View Form') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('users_sched'); return false;">{{ __('Users Schedule') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('dtrform'); return false;">{{ __('DTR Form') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kiosk">{{ __('Go to Kiosk') }}</a>
                    </li>
                </ul>
                <!-- End Navigation Links -->
            </div>
        </nav>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <h1 class="h2 dashboard-title">Dashboard</h1>

            <!-- Dashboard Content -->
            <div id="dashboardContent">
                @include('stats')
            </div>
        </main>
        <!-- End main content -->
    </div>
</div>

<script>
    function showDashboardContent(content, userId = null) {
    let dashboardContent = document.getElementById('dashboardContent');
    let dashboardTitle = document.querySelector('.dashboard-title');

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
            fetchContent('{{ route('print.report') }}');
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
            fetchContent('{{ route('faculties') }}');
            break;
        case 'view_reports':
            dashboardTitle.innerText = 'View Reports';
            fetchContent('{{ route('report.view') }}');
            break;
        case 'view_form':
            dashboardTitle.innerText = 'View Form';
            fetchContent('{{ route('report.form') }}');
            break;
        // case 'user_sched':
        //     dashboardTitle.innerText = 'View Form';
        //     fetchContent('{{ route('usersched') }}');
        //     break;
        // case 'dtrform':
        //     dashboardTitle.innerText = 'DTR Form';
        //     fetchContent('{{ route('dtrform') }}');
        //     break;
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
    let dashboardTitle = document.querySelector('.dashboard-title');
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
