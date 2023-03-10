<div class="container bg-dark rounded rounded-bottom-5 shadow">
    <div class="row">
        <div class="col">
            <img src="https://i.postimg.cc/jdLy9xfN/firewave-website-favicon-white.png" alt="small-logo" class="w-auto"
                 style="scale: 0.8">
        </div>
        <div class="col d-none d-sm-block">
            <div class="btn-group float-end pt-5 me-3">
                <a class="btn btn-outline-danger rounded rounded-pill me-2" href="{{ route('files') }}">My Files <i
                        class="bi bi-folder2-open"></i></a>
                <a class="btn btn-outline-danger rounded rounded-pill me-2" href="{{ route('upload') }}"><i
                        class="bi bi-upload"></i></a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger rounded rounded-pill">
                        Logout <i class="bi bi-box-arrow-in-left"></i>
                    </button>
                </form>
            </div>
        </div>
        {{--   resize nav for samll devices     --}}
        <div class="col d-block d-sm-none">
            <div class="btn-group float-end pt-5 me-3">
                <a class="btn btn-outline-danger rounded rounded-pill me-2" href="{{ route('files') }}"><i
                        class="bi bi-folder2-open"></i></a>
                <a class="btn btn-outline-danger rounded rounded-pill me-2" href="{{ route('upload') }}"><i
                        class="bi bi-upload"></i></a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger rounded rounded-pill"><i
                            class="bi bi-box-arrow-in-left"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
