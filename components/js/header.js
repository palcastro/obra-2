class Header extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
      this.innerHTML = `

<style>
.buscador{
  margin-right: 30px;
}

.nav-item+:hover{
  text-decoration:underline;
}

</style>

<<<<<<< Updated upstream
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-2">INICIO</a></li>
            <li><a href="#" class="nav-link px-2 link-2">CITAS</a></li>
            <li><a href="#" class="nav-link px-2 link-2">PERSOAS</a></li>
            <li><a href="#" class="nav-link px-2 link-2">EMPRESAS</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
          </form>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://media-exp1.licdn.com/dms/image/C4D03AQFgRczxLlaU1A/profile-displayphoto-shrink_200_200/0/1517346451533?e=1649894400&v=beta&t=-OI1lH6bVgom993wUDkODtrl6qUV19jx-RfVhP2WsA0" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">Novo usuario...</a></li>
              <li><a class="dropdown-item" href="#">Axustes</a></li>
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Saírt</a></li>
            </ul>
          </div>
=======
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
      <div class="container-fluid">
      <a class="navbar-brand mx-4" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </svg></a>


    
        <div class="collapse navbar-collapse " id="navbarColor01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/index.php">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/citas/index.php">CITAS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/persoas/index.php">PERSOAS</a>
          </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/empresas/index.php">EMPRESAS</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/login/logout.php">SAÍR</a>
            </li>
          </ul>
         </div>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="input-group">
        <input class="form-control border rounded-start" type="text" placeholder="..." id="example-search-input">
        <span class="input-group-append">
            <button  class="btn btn-secondary rounded-0 rounded-end buscador" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"  class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
            </button>
        </span>
 </div>
        </form>
      
>>>>>>> Stashed changes
        </div>
      </div>
    </nav>

      `;
    }
  }
<<<<<<< Updated upstream
}
customElements.define("header-component", Header);
=======
  
  customElements.define('header-component', Header);
>>>>>>> Stashed changes
