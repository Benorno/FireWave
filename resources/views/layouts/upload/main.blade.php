<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-white mt-4">Upload Files...</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card-body bg-danger rounded rounded-5 p-3 mt-3 mx-auto shadow" style="width: 50rem; height: 15rem">
                <div class="text-center text-white mt-5">
                    <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="file" class="form-control-file btn btn-dark rounded rounded-pill p-3" id="file">
                        </div>
                        <button type="submit" class="btn btn-outline-dark border border-2 border-dark rounded rounded-pill mt-4">Upload <i class="bi bi-upload"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center">
                <img src="https://i.postimg.cc/fbNT0BWR/upload.png" alt="upload_files_img" class="w-50 mx-auto">
            </div>

        </div>
    </div>
</div>
