<div class="container rounded rounded-bottom-5 shadow">
    <div  class="row py-2 mb-2 rounded rounded-bottom-5" style="background-color: #252525">
        {{--    logo size difference on small devices   --}}
        <div class="col-3 d-block d-sm-none">
            <a href="/"><img
                    src="https://i.postimg.cc/Fs9cpCn8/logo-no-background.png"
                    alt="firewave-logo" class="w-100 "></a>
        </div>
        <div class="col-3 d-none d-sm-block">
            <a href="/"><img
                    src="https://i.postimg.cc/Fs9cpCn8/logo-no-background.png"
                    alt="firewave-logo" class="w-75 my-3"></a>
        </div>
        <div class="col">
            <div class="float-end mt-3">
                @guest
                    <a href="{{ route('login') }}" class="text-decoration-none btn btn-outline-danger rounded-pill me-2">Login <i class="bi bi-door-open"></i></a>
                    <a href="{{ route('register') }}" class="link-secondary">Register</a>
                @else
                    <a href="{{ route('files') }}" class="text-decoration-none btn btn-outline-danger rounded-pill me-2"><b>My Files</b> <i class="bi bi-play"></i></a>
                    <a href="{{ route('logout') }}" class="link-secondary"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
</div>
