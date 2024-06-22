
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card" style="background-color: rgba(223, 205, 235, 0.8);"> <!-- Semi-transparent purple background -->
                <div class="card-header" style="background-color: #AD88C6;">
                    <li class="nav-item nav-link text-black">{{ __('Designations') }}</li>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Value</th>
                        </thead>
                        <tbody>
                        @foreach($designations as $designation)
                        <tr>
                            <td>{{ $designation->name }}</td>
                            <td>{{ $designation->value }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
