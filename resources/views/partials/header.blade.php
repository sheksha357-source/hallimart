<header style="background:#eee; padding:10px;">
    <h3>Welcome {{ session('username') }}</h3>
    <p>{{ session('email') }}</p>

    <form method="POST" action="/logout" style="display:inline">
        @csrf
        <button type="submit">Logout</button>
    </form>
</header>
<hr>
