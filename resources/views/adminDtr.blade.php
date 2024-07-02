<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card" style="background-color: rgba(223, 205, 235, 0.8);">
                <div class="card-header">
                    <span>User List</span>
                </div>
                <div class="card-body">
                    <ol class="list-group">
                        @foreach ($users as $user)
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">{{$user->name}}</div>
                                </div>
                                <div>

                                    <button id="download{{$user->id}}" data-download="{{route('download-dtr',['userId'=>$user->id])}}" class="btn"  onclick="printPdf('{{$user->id}}')"  data-bs-toggle="tooltip" data-bs-placement="top" title="Print">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                            <path
                                                d="M19 7h-1V2H6v5H5a3 3 0 0 0-3 3v7a2 2 0 0 0 2 2h2v3h12v-3h2a2 2 0 0 0 2-2v-7a3 3 0 0 0-3-3zM8 4h8v3H8V4zm0 16v-4h8v4H8zm11-8h-4v-2h4v2z"></path>
                                        </svg>
                                    </button>

                                    <button class="btn clipboard" data-title="Copied!"
                                            title="Share" data-clipboard-action="copy" data-clipboard-text="{{route('download-dtr',['userId'=>$user->id])}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                            <path
                                                d="M3 12c0 1.654 1.346 3 3 3 .794 0 1.512-.315 2.049-.82l5.991 3.424c-.018.13-.04.26-.04.396 0 1.654 1.346 3 3 3s3-1.346 3-3-1.346-3-3-3c-.794 0-1.512.315-2.049.82L8.96 12.397c.018-.131.04-.261.04-.397s-.022-.266-.04-.397l5.991-3.423c.537.505 1.255.82 2.049.82 1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3c0 .136.022.266.04.397L8.049 9.82A2.982 2.982 0 0 0 6 9c-1.654 0-3 1.346-3 3z"></path>
                                        </svg>
                                    </button>

                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
