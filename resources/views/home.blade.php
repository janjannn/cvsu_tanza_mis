@extends('layouts.app')

@section('content')
<style>
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
    padding-top: 90px; /* Optional: Adjust padding */
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
    color: white; /* Updated to white */
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
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar" style="margin-top: -20px; position: fixed; height: 100%; overflow-y: auto;">
            <div class="position-sticky">
                <!-- Dashboard Header -->
                <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    Dashboard
                </h5>
                <!-- End Dashboard Header -->

                <!-- Active Year Badge -->
                <div class="col-md-12">
                    <div class="badge bg-warning text-dark">
                        <span class="fs-6">Active Year: {{ $activeYear->year }} | Quarter: {{ $activeYear->quarter }}</span>
                    </div>
                </div>

                <!-- Navigation Links -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('view_reports'); return false;">{{ __('View Reports') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboardContent('view_form'); return false;">{{ __('Submit Report') }}</a>
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
                <h1 id="dashboardTitle" class="h2 dashboard-title">Dashboard</h1>
            </div>

            <div class="card">
                <div class="card-body" id="dashboardContent">
                    <!-- Content will be loaded dynamically -->
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
        case 'printreport':
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
            dashboardTitle.innerText = 'Submit Report'; // Update the title for submit report
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
