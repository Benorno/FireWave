<h1>Profile</h1>
<a href="{{ route('logout') }}" class="link-secondary"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
