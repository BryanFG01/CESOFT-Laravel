<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data Table</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/crud.css') }}">
<body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Detalles <b>De Registro</b></h2></div>
                        <div class="col-sm-4">
                            <div class="search-box">
                                <i id="lista-elementos" class="material-icons">&#xE8B6;</i>
                                <input id="Search" type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre<i class="fa fa-sort"></i></th>
                            <th>Apellidos</th>
                            <th>Ciudad <i class="fa fa-sort"></i></th>
                            <th>Pais</th>
                            <th>Email <i class="fa fa-sort"></i></th>
                            <th>Telefono</th>
                            <th>Plataforma</th>
                            <th>Libro</th>
                            <th>Comentarios</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td id="actions">
                                <div id="buttonContainer">
                                    <button id="editarBtn" type="button" class="btn btn-primary btn-sm ">Editar</button>
                                    <button id="eliminarBtn" type="button" class="btn btn-danger btn-sm">Eliminar</button>
                                </div>
                            </td>
                        </tr>      

                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text"><img src="/IMG/cropped-cropped-LogoCESOFT_2023-q1lj3y9xty7wt8wacvinizb62gg1ks348z0hrt31t0.png" alt="Cesoft"></div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>    
    <script src="./JAVASCRIPT/crud.js"></script> 
</body>
</html>