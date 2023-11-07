<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marcas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <h3 class="animation__shake">Cargando...</h3>
            <!-- <img class="animation__shake" src="../dist/img/CR7.jpeg" alt="AdminLTELogo" height="100" width="100"> -->
        </div>

        <!-- Navbar -->
        <?php include("navbar.php"); ?>
        <!-- /.navbar -->

        <!-- Incluir el sidebar -->
        <?php include("sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inventario</a></li>
                                <li class="breadcrumb-item active">Marcas</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /Contenido de la tabla de categoría -->

            <div class="card">
                <div class="card-header">

                    <h3 class="card-title">Lista de marcas</h3>
                    <button type="button" class="btn btn-default mx-2" data-toggle="modal" data-target="#modal-default">
                        Nueva Marca
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Marca</th>
                                <th>Fecha de registro</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Marca</th>
                                <th>Fecha de registro</th>
                                <th>Estado</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.Final del contenido de la tabla de categorías-->
        </div>
        <!-- /.content-wrapper -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Nueva Marca</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-inline" id="formulario" method="post">
                            <div class="input-group input-group-sm">
                                <div class="col-auto">
                                    <label for="Nombre" class="form-check-label">Nombre Marca</label>
                                    <input id="Nombre" name="Nombre" class="form-control " type="text"
                                        placeholder="Nombre" aria-label="Nombre">
                                </div>
                                <div class="col-auto">
                                    <label for="Estado" class="form-check-label">Estado</label>
                                    <select class="form-control" name="estadoMarca" id="estadoMarca">
                                        <option value="">Selecciona un estado</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary" id="guardar"
                                        name="guardar">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Obtener las categorías de la tabla categoría -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtener la referencia de la tabla
        var tableBody = document.querySelector("#example1 tbody");

        // Realizar una solicitud AJAX para obtener los datos de las categorías
        fetch('get/getMarca.php')
            .then(response => response.json())
            .then(data => {
                // Iterar sobre los datos y agregar filas a la tabla
                data.forEach(marca => {
                    var row = tableBody.insertRow();
                    row.insertCell().textContent = marca.id_marca;
                    row.insertCell().textContent = marca.marca_nombre;
                    row.insertCell().textContent = marca.fecha_creacion;
                    row.insertCell().textContent = marca.estado_tipo;
                });

                //Inicializar la DataTable despues que se cargan los datos
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "language": {
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando 0 a 0 de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    },
                    "buttons": [{
                            extend: 'copy',
                            text: 'Copiar'
                        },
                        {
                            extend: 'csv',
                            text: 'CSV'
                        },
                        {
                            extend: 'excel',
                            text: 'Excel'
                        },
                        {
                            extend: 'pdf',
                            text: 'PDF'
                        },
                        {
                            extend: 'print',
                            text: 'Imprimir'
                        },
                        {
                            extend: 'colvis',
                            text: 'Visibilidad'
                        }
                    ]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
    </script>

    <!-- Page specific script -->
    <script>
    $(document).ready(function() {
        // $("#example1").DataTable({
        //     "responsive": true,
        //     "lengthChange": false,
        //     "autoWidth": false,
        //     "language": {
        //         "sProcessing": "Procesando...",
        //         "sLengthMenu": "Mostrar _MENU_ registros",
        //         "sZeroRecords": "No se encontraron resultados",
        //         "sEmptyTable": "Ningún dato disponible en esta tabla",
        //         "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        //         "sInfoEmpty": "Mostrando 0 a 0 de 0 registros",
        //         "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        //         "sInfoPostFix": "",
        //         "sSearch": "Buscar:",
        //         "sUrl": "",
        //         "sInfoThousands": ",",
        //         "sLoadingRecords": "Cargando...",
        //         "oPaginate": {
        //             "sFirst": "Primero",
        //             "sLast": "Último",
        //             "sNext": "Siguiente",
        //             "sPrevious": "Anterior"
        //         },
        //         "oAria": {
        //             "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        //             "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        //         }
        //     },
        //     "buttons": [{
        //             extend: 'copy',
        //             text: 'Copiar'
        //         },
        //         {
        //             extend: 'csv',
        //             text: 'CSV'
        //         },
        //         {
        //             extend: 'excel',
        //             text: 'Excel'
        //         },
        //         {
        //             extend: 'pdf',
        //             text: 'PDF'
        //         },
        //         {
        //             extend: 'print',
        //             text: 'Imprimir'
        //         },
        //         {
        //             extend: 'colvis',
        //             text: 'Visibilidad'
        //         }
        //     ]
        // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 a 0 de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
            }
        });
    });
    </script>
    <!-- Registrar las categorias en la tabla -->
    <script>
    let Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    document.getElementById("guardar").addEventListener("click", registrarCategoria);

    function registrarCategoria(event) {
        event.preventDefault();
        let nombreMarca = document.getElementById("Nombre").value;
        let estadoMarca = document.getElementById("estadoMarca").value;

        if (nombreMarca == "" || estadoMarca == "") {
            Toast.fire({
                icon: 'info',
                title: 'Debes completar los campos'
            });
        } else {
            swal({
                    title: "¿Seguro que quieres registrar esta marca?",
                    text: "Luego podrás editar la marca!",
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
                        fetch('create/createMarca.php', {
                                method: 'POST',
                                body: JSON.stringify({
                                    nombre: nombreMarca,
                                    estado: estadoMarca
                                }),
                                headers: {
                                    'Content-Type': 'application/json'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                // Procesar la respuesta del servidor (puedes mostrar un mensaje de éxito o error aquí)
                                if (data.success) {
                                    Toast.fire({
                                        icon: 'success',
                                        title: 'Se ha registrado la marca con éxito!'
                                    });
                                    document.getElementById("formulario").reset();
                                } else {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'Error al registrar la marca'
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
    }
    </script>

</body>

</html>