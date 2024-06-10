@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            Submitted Report List
                        </div>
                        <div class="col-md-3">
                            <form class="form-inline">
                                <div class="input-group">
                                    <input id="searchInput" type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="searchReports()">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="admin-report-list" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#byfaculty" role="tab" aria-controls="byfaculty" aria-selected="true">By Faculty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#byquarter" role="tab" aria-controls="byquarter" aria-selected="false">By Quarter</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="byfaculty" role="tabpanel">
                            <div class="accordion" id="reportAccordion">
                                @foreach ($data as $usersCollection)
                                <div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{str_replace(' ','-',$usersCollection['name'])}}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{str_replace(' ','-',$usersCollection['name'])}}" aria-expanded="false" aria-controls="collapse{{ str_replace(' ','-',$usersCollection['name']) }}">
                                                {{$usersCollection['name']}}
                                            </button>
                                        </h2>
                                        @if($usersCollection['reports'] != null)
                                        @foreach ($usersCollection['reports'] as $report)
                                        <div id="collapse{{str_replace(' ','-',$usersCollection['name'])}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#reportAccordion">
                                            <div class="accordion-body d-flex justify-content-between align-items-center">
                                                <a href="/report/view/{{$report->id}}">
                                                    <strong>
                                                        
                                                        "",
                                                        $yearDisplay = $years[($report->year)-1]->year,
                                                        $quarterDisplay = $years[($report->year)-1]->quarter,
                                                        
                                                        Year {{$yearDisplay}} Quarter {{$quarterDisplay}}
                                                    </strong>
                                                </a>
                                                <div class="btn-group" role="group">
                                                    <button class="btn btn-primary btn-sm me-2" onclick="editReport({{ $report->id }})">Edit</button>
                                                    <button class="btn btn-warning btn-sm me-2" onclick="archiveReport({{ $report->id }})">Archive</button>
                                                    <button class="btn btn-info btn-sm me-2" onclick="printReport({{ $report->id }})">Print</button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div id="collapse{{str_replace(' ','-',$usersCollection['name'])}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#reportAccordion">
                                            <div class="accordion-body">
                                                <strong>No report to display</strong>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="byquarter" role="tabpanel">
                            <p class="card-text">By quarter list.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function searchReports() {
        var input, filter, accordion, items, headers, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        accordion = document.getElementById("reportAccordion");
        items = accordion.getElementsByClassName("accordion-item");

        for (i = 0; i < items.length; i++) {
            headers = items[i].getElementsByClassName("accordion-header");
            txtValue = headers[0].textContent || headers[0].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                items[i].style.display = "";
            } else {
                items[i].style.display = "none";
            }
        }
    }

    function clearSearch() {
        document.getElementById("searchInput").value = "";
        searchReports();
    }

    function editReport(id) {
        // Redirect to the edit page for the specific report
        window.location.href = `/report/edit/${id}`;
    }

    function deleteReport(id) {
        if (confirm("Are you sure you want to delete this report?")) {
            // Send a DELETE request to the server to delete the report
            fetch(`/report/delete/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => {
                if (response.ok) {
                    location.reload();
                } else {
                    alert("Failed to delete the report.");
                }
            }).catch(error => {
                console.error('Error:', error);
                alert("Failed to delete the report.");
            });
        }
    }

    function printReport(id) {
        // Redirect to the print page for the specific report
        window.location.href = `/report/print/${id}`;
    }
</script>
@endsection
