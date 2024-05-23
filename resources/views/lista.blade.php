@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Lista de Palabras</h1>
                <div class="card">
                    
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Palabra</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ejemplo</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">Agregar Palabra</div>
                    <div class="card-body">
                        <form method="POST" action="/agregar-palabra">
                            <div class="form-group">
                                <label for="palabra">Nueva Palabra</label>
                                <input type="text" class="form-control" id="palabra" name="palabra" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/resources/js/lista.js"></script>
@endsection
