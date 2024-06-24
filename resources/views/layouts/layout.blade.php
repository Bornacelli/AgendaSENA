<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDA</title>
    <link href="{!! asset('assets/img/senaico.svg') !!}" rel="icon">


    <!-- DataTablets Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.css') }}">
    <!-- Vendor CSS Files -->
    <link href="{!! asset('assets/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- FullCalendar -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.13/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.13/index.global.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('assets/js/newMotivo.js') }}"></script>
    <script src="{{ asset('assets/js/main2.js') }}"></script>


    <script type="text/javascript">
        var baseURL= {!! json_encode(url('/')) !!}
    </script>

</head>

<body>
    <div class="d-flex conteiner w-100">
        <header id="header" class="">
            <div class="container-header align-content-start d-flex flex-column gap-5">
                <img src="{{ asset('assets/img/senalogo.svg') }}" class="logosena" alt="logosena">
                <div class="container-link d-flex flex-column gap-4 justify-start align-items-start ms-2">

                    <hr class="mt-0 mb-0 ms-3 " style="background-color: #fff">

                    <div class="container">
                        <a class="fw-semibold ms-4 text-decoration-none menuh menuh" href=""> <i
                                class="bi bi-house me-2"></i>Inicio</a>
                    </div>
                    {{-- <div class="container">
                        <a class="fw-semibold ms-4  text-decoration-none menuh" href=""><i
                                class="bi bi-person-gear me-2"></i>Administradores</a>
                    </div> --}}


                    {{-- <hr class="mt-0 mb-0 ms-3"> --}}
                    <div class="container">
                        <a class="fw-semibold ms-4  text-decoration-none menuh" href="{{ route('users.index') }}"><i
                                class="bi bi-people me-2"></i>Usuarios</a>
                    </div>
                    <div class="container">
                        <a class="fw-semibold ms-4  text-decoration-none menuh" href="{{ url('/evento') }}"><i
                                class="bi bi-calendar me-2"></i>Calendario</a>
                    </div>


                    <div class="container"> <a class="fw-semibold ms-4  text-decoration-none menuh"
                            href="{{ url('/evento') }}"><i class="bi bi-journal-check me-2"></i>Agenda</a>
                    </div>

                    <hr class="mt-0 mb-0 ms-3" style="background-color: #fff">


                    <div class="container"> <a class="fw-semibold ms-4  text-decoration-none menuh"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                class="bi bi-person-x me-2"></i>Cerrar sesion</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>

                </div>

            </div>

        </header>
        <main class="main">
            <nav>
                <p class="fw-semibold "></p>

                <p class="fw-semibold nbre mt-3"><i class="bi bi-person-gear me-2"></i>{{ Auth::User()->full_name  }}</p>
                <a type="button" class=" text-decoration-none menuh text-dark" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="d-md-none bi bi-list"></i>
                </a>

                <!-- Modal Navigation -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 colorim" id="exampleModalLabel">Menú De Navegación</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div
                                    class="fs-6 fw-semibold  d-flex flex-column gap-4  justify-start align-items-start">
                                    <a class=" colorim text-decoration-none menuh " href="" > <i
                                            class="bi bi-house me-2"></i>Inicio</a>
                                    <a class=" colorim text-decoration-none menuh" href=""><i
                                            class="bi bi-person-gear me-2"></i>Administradores</a>


                                    <a class=" colorim text-decoration-none menuh" href=""><i
                                            class="bi bi-people me-2"></i>Usuarios</a>
                                    <a class=" colorim text-decoration-none menuh" href=""><i
                                            class="bi bi-calendar me-2"></i>Calendario</a>
                                    <a class=" colorim text-decoration-none menuh"
                                        href=""><i
                                            class="bi bi-journal-check me-2"></i>Agenda</a>

                                    <a class=" colorim text-decoration-none menuh" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"><i
                                            class="bi bi-person-x me-2"></i>Cerrar sesion</a>
                                    <form id="logout-form" action="" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="contenido">
                @yield('content')
            </div>
        </main>
    </div>

    <!--Script-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/agenda.js') }}"></script>


    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const containers = document.querySelectorAll(".container-link .container");

            const lastRoute = localStorage.getItem("lastRoute");
            if (!lastRoute) {
                containers[0].classList.add("active");
            } else {
                containers.forEach(function(container) {
                    const url = container.querySelector("a").getAttribute("href");
                    if (url === lastRoute) {
                        container.classList.add("active");
                    }
                });
            }

            containers.forEach(function(container) {
                container.addEventListener("click", function(event) {
                    event.preventDefault();

                    if (container.querySelector("a").getAttribute("href") !==
                        "{{ route('logout') }}") {
                        containers.forEach(function(c) {
                            c.classList.remove("active");
                        });
                        container.classList.add("active");
                        const url = container.querySelector("a").getAttribute("href");
                        localStorage.setItem("lastRoute", url);
                        window.location.href = url;
                    }
                });
            });
        });
    </script> --}}
</body>

</html>