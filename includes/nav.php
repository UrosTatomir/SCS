<nav class="navbar fixed-top navbar-expand-lg  navbar-dark" style="background-color: #06342D;">
    <a class="navbar-brand" href="../view/routes.php?pagescs=showhome" style="font-family: cursive, sans-serif; font-size:18px; color: #FDE600;">
        Estavela SCS i Gavrilovic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../view/routes.php?pagescs=showhome">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../view/routes.php?pagescs=showinsert">Insert Data SCS</a>
                    <a class="dropdown-item" href="../view/routes.php?pagescs=showinsertgavrilovic">Data Gavrilovic</a>
                    <a class="dropdown-item" href="../view/routes.php?page=showassign">Assigning a vehicle to the driver</a>
                    <a class="dropdown-item" href="../view/routes.php?page=showdrivers">Show Drivers</a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class=" float-right">
            <button type="button" class="btn btn-outline"><a href="#" class="badge badge-success">En</a></button>
            <button type="button" class="btn btn-outline"><a href="#" class="badge badge-info">Sr</a></button>
        </div>
    </div>
</nav> 