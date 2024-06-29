<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header" style="background-color: rgba(223, 205, 235, 0.8);">
                    <div class="row">
                        <div class="col-md-9">
                            Submitted Report List
                        </div>
                    </div>
                </div>
                <div class="card" style="background-color: rgba(223, 205, 235, 0.8);">
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
                                <div class="accordion" id="accordionExample">

                                    @foreach ($data as $usersCollection)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{str_replace(' ','-',$usersCollection['name'])}}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{str_replace(' ','-',$usersCollection['name'])}}" aria-expanded="false" aria-controls="collapse{{ str_replace(' ','-',$usersCollection['name']) }}">
                                                {{$usersCollection['name']}}
                                            </button>
                                        </h2>
                                        <div id="collapse{{str_replace(' ','-',$usersCollection['name'])}}" class="accordion-collapse collapse" aria-labelledby="heading{{str_replace(' ','-',$usersCollection['name'])}}" data-bs-parent="#accordionExample">
                                            @if($usersCollection['reports'] != null)
                                                @foreach ($usersCollection['reports'] as $report)
                                                <div class="accordion-body d-flex justify-content-between">
                                                    <div>
                                                        <a href="/report/view/{{$report->id}}">
                                                            <strong>
                                                            {{
                                                                "",
                                                                $yearDisplay = $years[($report->year)-1]->year,
                                                                $quarterDisplay = $years[($report->year)-1]->quarter,
                                                            }}
                                                            Year {{$yearDisplay}} Quarter {{$quarterDisplay}}
                                                            </strong>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-danger btn-sm" onclick="deleteReport({{$report->id}})">Delete</button>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                <div class="accordion-body">
                                                    <strong>No report to display</strong>
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
</div>

<script>
    function deleteReport(reportId) {
        // Confirm deletion
        if (confirm('Are you sure you want to delete this report?')) {
            // Make a DELETE request to the server
            fetch('/report/delete/' + reportId, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => {
                if (response.ok) {
                    location.reload();
                } else {
                    alert('Failed to delete report.');
                }
            });
        }
    }
</script>
