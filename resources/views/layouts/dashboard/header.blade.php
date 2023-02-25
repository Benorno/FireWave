<div class="container bg-dark rounded rounded-bottom-5 shadow">
    <div class="row">
        <div class="col">
            <img src="https://i.postimg.cc/sxTRr48v/beatwave-website-favicon-white.png" alt="small-logo" class="w-auto"
                 style="scale: 0.8">
        </div>
{{--    searchbar    --}}
        <div class="col">
            <form class="d-flex pt-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Search for a song..." aria-label="Search">
                <button class="btn btn-outline-danger rounded rounded-pill" type="submit"><i class="bi bi-search"></i>
                </button>
            </form>
        </div>
{{--    User logo dropdown    --}}
        <div class="col">
            <div class="dropdown float-end pt-5 me-3">
                <a class="btn btn-outline-danger dropdown-toggle rounded rounded-pill" href="#" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item rounded rounded-pill" href="{{ route('profile') }}">Profile</a></li>
                    <li><a class="dropdown-item rounded rounded-pill" href="#">Account Settings</a></li>
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
