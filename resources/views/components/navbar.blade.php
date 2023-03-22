<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
            <a href=""><img id="logoimg" src="{{asset('img/logo.png')}}"alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Trips </a>
                        <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Montain Bike</a></li>
                                <li><a class="dropdown-item" href="#">Paddle</a></li>
                                <li><a class="dropdown-item" href="#">Surf</a></li>
                                <li><a class="dropdown-item" href="#">Skate boarding</a></li>
                                <li><a class="dropdown-item" href="#">Climbing</a></li>
                                <li><a class="dropdown-item" href="#">Cano</a></li>
                            </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>