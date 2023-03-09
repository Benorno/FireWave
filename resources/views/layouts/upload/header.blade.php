<div class="container bg-dark rounded rounded-bottom-5 shadow">
    <div class="row">
        <div class="col">
            <img src="https://i.postimg.cc/jdLy9xfN/firewave-website-favicon-white.png" alt="small-logo" class="w-auto"
                 style="scale: 0.8">
        </div>
        {{--    User logo dropdown    --}}
        <div class="col">
            <div class="dropdown float-end pt-5 me-3">
                <a class="btn btn-outline-danger rounded rounded-pill" href="{{ route('files') }}">My Files <i class="bi bi-folder2-open"></i></a>
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
