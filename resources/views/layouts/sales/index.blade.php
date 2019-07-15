@extends('layouts.index')
@section('content-title','NUEVA ORDEN')
@section('content-subtitle','Caja: '.$caja)
@section('content')
<div class="row">
    <div class="col-sm-7">
        <div class="row">
            <div class="col-sm-3">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">CATEGORIAS</h3>
                    </div>
                    <div class="box-body">
                        <table id="categoryTable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">PLATOS
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">PLATOS
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">PLATOS
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">PLATOS
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">PLATOS
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">PLATOS
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">PLATOS
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">PLATOS
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">PLATOS
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">PRODUCTOS</h3>
                    </div>
                    <div class="box-body">
                        <table id="productTable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>CANT.DISP.</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">POLLO BROASTED PIERNA 1/4
                                </td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">POLLO BROASTED ALA 1/4
                                </td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">POLLO BRASA PIERNA 1/4
                                </td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td><img src="img/image.jpg" width="100" height="100">POLLO BRASA ALA 1/4
                                </td>
                                <td>5</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">DETALLE</h3>
            </div>
            <div class="box-body">
                <table id="detailTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>PRODUCTO</th>
                        <th>CANT.</th>
                        <th>SUBTOTAL.</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>POLLO BROASTED PIERNA 1/4</td>
                        <td>1</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>POLLO BROASTED ALA 1/4</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{asset("assets/$theme/bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
    <script>
        $(function () {
            $("#categoryTable").DataTable({
                'paging':false,
                'searching':false,
                'info':false,
                "scrollY": "75vh",
                "scrollCollapse": true,
            });
        });
        $(function () {
            $("#productTable").DataTable({
                'paging':true,
                'searching':true,
                'info':false,
                "scrollY": "75vh",
                "scrollCollapse": true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "search": "Buscar",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Ultimo",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    },
                }
            });
        });
        $(function () {
            $("#detailTable").DataTable({
                'paging':false,
                'searching':false,
                'info':true,
                "scrollY": "28vh",
                "scrollCollapse": true,
                "ordering":true,
                "language":{
                    "info": "Existen _TOTAL_ registros",
                }
            });
        });
    </script>

@endsection
