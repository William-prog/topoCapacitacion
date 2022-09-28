@extends('layouts.app')

@section('content')
<style>
    .card-body-user {
        width: auto;
        font-family: adelle-sans, sans-serif;
        font-size: 14px;
        line-height: 20px;
        text-align: start;
        letter-spacing: normal;

        box-shadow: rgb(204 204 204) 0px 2px 1px 0px;
        border-radius: 5px 5px 5px 5px;

        padding: 2%;
        margin: 5px 0px 5px 0px;

        transition: letter-spacing 2s;
    }

    .card-body-user-button {
        text-align: start;
        letter-spacing: normal;
        text-decoration: none;
    }

    .card-body-user-button .card-body-user {
        width: auto;
        font-family: adelle-sans, sans-serif;
        font-size: 14px;
        line-height: 20px;
        text-align: start;
        letter-spacing: normal;
        text-decoration: none;
        text-align: center;
    }

    .card-body-user-button .card-body-user:hover {
        letter-spacing: .2rem;
        text-decoration: none;
    }
</style>

<style>
    .accordion-item {
        margin-bottom: 2%;
        border-radius: 0.25rem;
        border: 0px solid !important;
    }

    .accordion-header {
        border-radius: 0.25rem;
    }

    .accordion-button {
        border-radius: 0.25rem;
        font-weight: 600;
        border: 1px solid !important;

    }

    .accordion-button:not(.collapsed) {
        color: #000 !important;
        background-color: #FE7600;
        box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="accordion" id="accordionExample" style="width: 100%;">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEstadisticas">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEstadisticas" aria-expanded="true" aria-controls="collapseEstadisticas">
                            Estadisticas
                        </button>
                    </h2>
                    <div id="collapseEstadisticas" class="accordion-collapse collapse show" aria-labelledby="headingEstadisticas" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">

                                <div class="col-md-3">
                                    Registrar Usuario
                                </div>
                                <div class="col-md-3">
                                    Usuarios
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingUsuarios">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUsuarios" aria-expanded="true" aria-controls="collapseUsuarios">
                            Usuarios
                        </button>
                    </h2>
                    <div id="collapseUsuarios" class="accordion-collapse collapse" aria-labelledby="headingUsuarios" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">

                                <div class="col-md-3">
                                    Registrar Usuario
                                </div>
                                <div class="col-md-3">
                                    Registrados
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCursos">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCursos" aria-expanded="false" aria-controls="collapseCursos">
                            Cursos
                        </button>
                    </h2>
                    <div id="collapseCursos" class="accordion-collapse collapse" aria-labelledby="headingCursos" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="row">
                                <div class="col-md-3">
                                    Registrar Curso
                                </div>
                                <div class="col-md-3">
                                    Cursos Registrados
                                </div>
                                <div class="col-md-3">
                                    Detalles
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingDc3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDc3" aria-expanded="false" aria-controls="collapseDc3">
                            DC3 (Constancia de competencias laborales)
                        </button>
                    </h2>
                    <div id="collapseDc3" class="accordion-collapse collapse" aria-labelledby="headingDc3" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="row">
                                <div class="col-md-3">
                                    Constancias Generadas
                                </div>
                                <div class="col-md-3">
                                    Generar Constancia
                                </div>
                                <div class="col-md-3">
                                    Usuarios
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Usuario') }}</div>
                <div class="card-body" style="padding: 0px;">

                    <div class="card-body-user">
                        <strong>Nombre:</strong>
                        <br>
                        {{Auth::user()->name}}
                    </div>
                    <div class="card-body-user">
                        <strong>Curp:</strong>
                        <br>
                        {{Auth::user()->curp}}
                    </div>
                    <div class="card-body-user">
                        <strong>Puesto:</strong>
                        <br>
                        {{Auth::user()->job}}
                    </div>

                    <div class="card-body-user">
                        <strong>Ocupación específica:</strong>
                        <br>
                        {{Auth::user()->catalogo}}
                    </div>
                    <div class="card-body-user">
                        <strong>Empresa:</strong>
                        <br>
                        {{Auth::user()->nameCompany}}
                    </div>
                    <div class="card-body-user">
                        <strong>Correo Electronico:</strong>
                        <br>
                        {{Auth::user()->email}}
                    </div>
                    <a class="card-body-user-button" href="">
                        <div class="card-body-user">
                            <strong>Ver Perfil</strong>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection