 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-cyan elevation-4">
            <!-- Brand Logo -->
            <a href="inicio.php" class="brand-link">
                <img src="../dist/img/IntelyTec.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Intely Tec</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../dist/img/mbappe.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION["usuario_nombre"]; ?></a>
                    </div>

                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Gestión de Inventario
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../pages/categoria.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Control de Categorías</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../pages/subCategoria.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Control de SubCategorías</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../pages/marca.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Control de Marcas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../pages/404.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Control de Productos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../pages/404.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Control de Inventario</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../pages/404.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Control de Ubicaciones</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../pages/404.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Control de Movimientos</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <script>

    document.getElementById("salir").addEventListener("click", salir);

    function salir(event) {
        event.preventDefault();
        swal({
                title: "¿Seguro que quieres cerrar la sesión?",
                text: "Ten en cuenta que saldras completamente del sistema!",
                icon: "warning",
                buttons: {
                    cancel: "Cancelar",
                    confirm: {
                        text: "Confirmar",
                        value: true,
                        visible: true,
                        className: "btn-danger",
                        closeModal: true,
                    },
                },
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Utilizar fetch para enviar datos al servidor
                    fetch('delete/deleteSalir.php', {
                            method: 'POST',
                            body: JSON.stringify({
                                salir: "salir",
                            }),
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            // Procesar la respuesta del servidor (puedes mostrar un mensaje de éxito o error aquí)
                            if (data.success) {
                                //se redirige al usuario una vez inicia sesión
                                setTimeout(function() {
                                    window.location.href =
                                        "../index.php";
                                }, 1000);
                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Error al tratar de cerrar la sesión'
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Toast.fire({
                                icon: 'error',
                                title: 'Error al conectar con el servidor'
                            });
                        });
                } else {
                    Toast.fire({
                        icon: 'warning',
                        title: 'Operación cancelada'
                    });
                }
            });
    }
    </script>