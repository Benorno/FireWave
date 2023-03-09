<div class="container bg-dark rounded rounded-bottom-5 shadow">
    <div class="row">
        <div class="col">
            <img src="https://i.postimg.cc/jdLy9xfN/firewave-website-favicon-white.png" alt="small-logo" class="w-auto"
                 style="scale: 0.8">
        </div>
        {{--    searchbar    --}}
        <div class="col">
            <div class="mt-5">
                <form action="{{ route('files.search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control rounded rounded-pill" placeholder="Search..." name="q" value="{{ $searchQuery ?? '' }}">
                        <button class="btn btn-outline-danger rounded rounded-pill ms-2" type="submit"><i class="bi bi-search"></i></button>
                        <a href="{{ route('files') }}" class="btn btn-danger rounded rounded-pill ms-2"><i class="bi bi-x-octagon"></i></a>
                    </div>
                </form>
            </div>
        </div>
        {{--    User logo dropdown    --}}
        <div class="col">
            <div class="dropdown float-end pt-5 me-3">
                <a class="btn btn-outline-danger rounded rounded-pill" href="{{ route('upload') }}"><i class="bi bi-upload"></i></a>
                <a class="btn btn-outline-danger dropdown-toggle rounded rounded-pill" href="#" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item rounded rounded-pill" href="{{ route('user.show') }}">Account Settings</a></li>
                    <li><a href="{{ route('logout') }}" class="dropdown-item text-danger rounded rounded-pill"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <i class="bi bi-box-arrow-in-left"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form></li>
                </ul>
            </div>
        </div>
    </div>
</div>
