<div class="container">
    @if(isset($success))
        <div class="alert alert-success alert-dismissible " role="alert">
            {{ $message }}
        </div>
    @endif
        @if(count($files) === 0)
            <div class="alert alert-info" role="alert">
                No files found. <a href="{{ route('files') }}" class="alert-link">Go Back</a>.
                <button class="btn-close float-end" type="button" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
        @endif
    <div class="row">
        <div class="col">
            <h1 class="text-center my-4 text-danger">My Files</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Uploaded</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody >
                @foreach ($files as $file)
                    <tr>
                        <td>{{ $file->name }}</td>
                        <td>{{ $file->created_at->format('M d, Y') }}</td>
                        <td>
                            <a href="{{ route('download', ['id' => $file->id]) }}" class="btn btn-sm btn-success rounded rounded-pill"><i class="bi bi-download"></i></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-danger rounded rounded-pill ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-trash"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('file.delete', ['id' => $file->id]) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete "{{ $file->name }}"?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>You are about to delete this file. <b>This action cannot be undone.</b></p>
                                                <p>Are you sure you want to delete this file?</p>
                                                <div class="form-check">
                                                    <input class="form-check-input bg-danger-subtle" type="checkbox" value="" id="flexCheckDefault" required>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Delete file from server.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                    <button type="submit" class="btn btn-sm btn-danger rounded rounded-pill">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
