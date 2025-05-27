
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    </head>
    <body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="col-9">
                <p class="fs-1">Listado de Proyectos</p>
                <table class="table">
                    <thead> <!--datos de cabecera -->
                        <tr> <!-- fila -->
                        <th scope="col">id</th> <!--columna de la fila -->
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha de creación</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr> -->
                        @foreach($proyectos as $proyecto)
                        <tr>
                            <th scope="row">{{$proyecto->id}}</th>
                            <td>{{$proyecto->titulo}}</td>
                            <td>{{$proyecto->descripcion}}</td>
                            <td>{{$proyecto->created_at}}</td>
                            <td>
                                <a href="{{ route('project.edit', $proyecto->id) }}" class="btn btn-outline-warning">Editar</a>
                            </td>
                            <td>  
                                <form action="{{ route('project.destroy', $proyecto->id) }}" method="POST" onsubmit="return confirmarEliminacion()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Eliminar</button>

                            </form>
                            </td>
                        </tr>
                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-primary" href="http://127.0.0.1:8000/project/create" role="button">Guardar un proyecto</a>
        <div class="row">
            <div class="col">
                <footer>Hecho por Judith Uruchima</footer>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"
    ></script>
    <script>
    function confirmarEliminacion() {
        return confirm('¿Estás seguro de que deseas eliminar este proyecto? Esta acción no se puede deshacer.');
    }
</script>
</body>
</html>