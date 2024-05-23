@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Pregunta y Respuesta</div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="mb-3">
                            <label for="question">Pregunta 1</label> 
                            <input type="text" class="form-control" id="question" name="question">
                        </div>
                        <div class="mb-3">
                            <label for="answer">Respuesta</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Pregunta y Respuesta</div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="mb-3">
                            <label for="question">Pregunta 2</label>
                            <input type="text" class="form-control" id="question" name="question">
                        </div>
                        <div class="mb-3">
                            <label for="answer">Respuesta</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
