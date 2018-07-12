<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/pages">Interesting Pages</a>
            </li>
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link disabled">Hello, {{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/session/destroy">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/registration">Registration</a>
                </li>

                    <a class="nav-link" href="/session">Login</a>
                </li>
            @endif
        </ul>
    </div>
    <p class="text-right">
        <a class="navbar-brand" href="/cart">
            <img src="/uploads/cart.jpg"  width="40" height="40" alt="">
        </a>
    </p>
</nav>