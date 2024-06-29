<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: rgba(223, 205, 235, 0.8);">
                <div class="card-header" style="background-color: #AD88C6;">
                    <h5 class="card-title text-black">{{ __('List of Faculties') }}</h5>
                </div>
                <div class="card-body">
                    <div class="text-end mt-3">
                        <a class="btn btn-primary" href="{{ route('register') }}" role="button">Add Faculty</a>
                    </div>
                    @if($users->isEmpty())
                        <p>No registered faculty.</p>
                    @else
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Department</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <select class="custom-select" id="dept{{ $user->id }}" name="department">
                                            <option value="DAS" {{ $user->department == 'DAS' ? 'selected' : '' }}>Department of Arts and Sciences</option>
                                            <option value="DIT" {{ $user->department == 'DIT' ? 'selected' : '' }}>Department of Information Technology</option>
                                            <option value="DOM" {{ $user->department == 'DOM' ? 'selected' : '' }}>Department of Management</option>
                                            <option value="TED" {{ $user->department == 'TED' ? 'selected' : '' }}>Teacher Education Department</option>
                                            <option value="STAFF" {{ $user->department == 'STAFF' ? 'selected' : '' }}>Staff</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="custom-select" id="desig{{ $user->id }}" name="designation">
                                            <option value="none">None</option>
                                            @foreach ($designations as $designation)
                                                <option value="{{ $designation->value }}" {{ $user->designation == $designation->value ? 'selected' : '' }}>
                                                    {{ $designation->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="btn btn-outline-success" type="button" onClick='updateFaculty({{ $user->id }})' value="Save">
                                        <a href="{{ route('delete.faculty', $user->id) }}" class="btn btn-outline-danger" role="button"
                                           onclick="return confirm('Are you sure you want to delete this faculty?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
