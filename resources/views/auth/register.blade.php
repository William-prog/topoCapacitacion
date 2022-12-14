@extends('layouts.app')

@section('content')

<style>
    /*Card Button CSS*/

    .card-body {
        height: 40% !important;
        width: 100% !important;
    }

    .card-radio-btn {
        width: 100% !important;
    }

    .card-radio-btn .content_head {
        color: #333;
        font-size: inherit;
        line-height: 30px;
        font-weight: 500;
    }

    .card-radio-btn .content_sub {
        color: #9e9e9e;
        font-size: inherit;
    }

    .card-input-element+.card {
        width: 300px;
        height: 165px;
        margin: 10px;
        justify-content: center;
        color: var(--primary);
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 2px solid transparent;
        border-radius: 10px;
        text-align: center;
        -webkit-box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.1);
    }

    .card-input-element+.card:hover {
        cursor: pointer;
    }

    .card-input-element:checked+.card {
        border: 2px solid #F97924;
        background-color: rgba(249, 121, 36, 0.3);

        -webkit-transition: border 0.3s;
        -o-transition: border 0.3s;
        transition: border 0.3s;
    }

    .card-input-element:checked+.card::after {
        content: "\f058";
        color: rgba(249, 121, 36, 0.6);
        position: absolute;
        right: 5px;
        top: 5px;
        font-family: "Font Awesome 5 Free";
        font-style: normal;
        font-size: 1rem;
        font-weight: 900;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-animation-name: fadeInCheckbox;
        animation-name: fadeInCheckbox;
        -webkit-animation-duration: 0.3s;
        animation-duration: 0.3s;
        -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    @-webkit-keyframes fadeInCheckbox {
        from {
            opacity: 0;
            -webkit-transform: rotateZ(-20deg);
        }

        to {
            opacity: 1;
            -webkit-transform: rotateZ(0deg);
        }
    }

    @keyframes fadeInCheckbox {
        from {
            opacity: 0;
            transform: rotateZ(-20deg);
        }

        to {
            opacity: 1;
            transform: rotateZ(0deg);
        }
    }

    .ribbon {
        position: absolute;
        top: 5px;
        left: 5px;
        background-color: #ffcc00;
        padding: 3px;
        border-radius: 10px;
        font-size: 0.8rem;
        width: 90px;
    }
</style>
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row mb-3 justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Datos del Trabajador') }}</div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="name" class="col-md-12 col-form-label">{{ __('Nombre(s):') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-md-4">
                                <label for="surname" class="col-md-12 col-form-label">{{ __('Primer Apellido:') }}</label>
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                            </div>
                            <div class="col-md-4">
                                <label for="secondSurname" class="col-md-12 col-form-label">{{ __('Segundo Apellido:') }}</label>
                                <input id="secondSurname" type="text" class="form-control @error('secondSurname') is-invalid @enderror" name="secondSurname" value="{{ old('secondSurname') }}" required autocomplete="secondSurname" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="curp" class="col-md-4 col-form-label">{{ __('Curp:') }}</label>
                                <input id="curp" type="text" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}" required autocomplete="curp" autofocus>
                            </div>
                            <div class="col-md-4">
                                <label for="rfc" class="col-md-4 col-form-label">{{ __('RFC:') }}</label>
                                <input id="rfc" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{ old('rfc') }}" required autocomplete="rfc" autofocus>
                            </div>
                            <div class="col-md-4">
                                <label for="job" class="col-md-4 col-form-label">{{ __('Puesto:') }}</label>
                                <input id="job" type="text" class="form-control @error('job') is-invalid @enderror" name="job" value="{{ old('job') }}" required autocomplete="job" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="catalogo" class="col-md-12 col-form-label">{{ __('Ocupaci??n espec??fica (Cat??logo Nacional de Ocupaciones):') }}</label>
                                <input class="form-control @error('catalogo') is-invalid @enderror" name="catalogo" id="catalogo" list="datalistCatalogo" type="text" placeholder="Catalogo">
                                <datalist id="datalistCatalogo">

                                    <option data-ejemplo="01 Cultivo, crianza y aprovechamiento" value="01.1 Agricultura y silvicultura"> <strong> 01 Cultivo, crianza y aprovechamiento </strong> </option>
                                    <option data-ejemplo="01 Cultivo, crianza y aprovechamiento" value="01.2 Ganader??a"> <strong> 01 Cultivo, crianza y aprovechamiento </strong> </option>
                                    <option data-ejemplo="01 Cultivo, crianza y aprovechamiento" value="01.3 Pesca y acuacultura"> <strong> 01 Cultivo, crianza y aprovechamiento </strong> </option>
                                    <option data-ejemplo="02 Extracci??n y suministro" value="02.1 Exploraci??n"> <strong> 02 Extracci??n y suministro </strong> </option>
                                    <option data-ejemplo="02 Extracci??n y suministro" value="02.2 Extracci??n"> <strong> 02 Extracci??n y suministro </strong> </option>
                                    <option data-ejemplo="02 Extracci??n y suministro" value="02.3 Refinaci??n y beneficio"> <strong> 02 Extracci??n y suministro </strong> </option>
                                    <option data-ejemplo="02 Extracci??n y suministro" value="02.4 Provisi??n de energ??a"> <strong> 02 Extracci??n y suministro </strong> </option>
                                    <option data-ejemplo="02 Extracci??n y suministro" value="02.5 Provisi??n de agua"> <strong> 02 Extracci??n y suministro </strong> </option>
                                    <option data-ejemplo="03 Construcci??n" value="03.1 Planeaci??n y direcci??n de obras"> <strong> 03 Construcci??n </strong> </option>
                                    <option data-ejemplo="03 Construcci??n" value="03.2 Edificaci??n y urbanizaci??n"> <strong> 03 Construcci??n </strong> </option>
                                    <option data-ejemplo="03 Construcci??n" value="03.3 Acabado"> <strong> 03 Construcci??n </strong> </option>
                                    <option data-ejemplo="03 Construcci??n" value="03.4 Instalaci??n y mantenimiento"> <strong> 03 Construcci??n </strong> </option>
                                    <option data-ejemplo="04 Tecnolog??a" value="04.1 Mec??nica"> <strong> 04 Tecnolog??a </strong> </option>
                                    <option data-ejemplo="04 Tecnolog??a" value="04.2 Electricidad"> <strong> 04 Tecnolog??a </strong> </option>
                                    <option data-ejemplo="04 Tecnolog??a" value="04.3 Electr??nica"> <strong> 04 Tecnolog??a </strong> </option>
                                    <option data-ejemplo="04 Tecnolog??a" value="04.4 Inform??tica"> <strong> 04 Tecnolog??a </strong> </option>
                                    <option data-ejemplo="04 Tecnolog??a" value="04.5 Telecomunicaciones"> <strong> 04 Tecnolog??a </strong> </option>
                                    <option data-ejemplo="04 Tecnolog??a" value="04.6 Procesos industriales"> <strong> 04 Tecnolog??a </strong> </option>
                                    <option data-ejemplo="05 Procesamiento y fabricaci??n" value="05.1 Minerales no met??licos"> <strong> 05 Procesamiento y fabricaci??n </strong> </option>
                                    <option data-ejemplo="05 Procesamiento y fabricaci??n" value="05.2 Metales"> <strong> 05 Procesamiento y fabricaci??n </strong> </option>
                                    <option data-ejemplo="05 Procesamiento y fabricaci??n" value="05.3 Alimentos y bebidas"> <strong> 05 Procesamiento y fabricaci??n </strong> </option>
                                    <option data-ejemplo="05 Procesamiento y fabricaci??n" value="05.4 Textiles y prendas de vestir"> <strong> 05 Procesamiento y fabricaci??n </strong> </option>
                                    <option data-ejemplo="05 Procesamiento y fabricaci??n" value="05.5 Materia org??nica"> <strong> 05 Procesamiento y fabricaci??n </strong> </option>
                                    <option data-ejemplo="05 Procesamiento y fabricaci??n" value="05.6 Productos qu??micos"> <strong> 05 Procesamiento y fabricaci??n </strong> </option>
                                    <option data-ejemplo="05 Procesamiento y fabricaci??n" value="05.7 Productos met??licos y de hule y pl??stico"> <strong> 05 Procesamiento y fabricaci??n </strong> </option>
                                    <option data-ejemplo="05 Procesamiento y fabricaci??n" value="05.8 Productos el??ctricos y electr??nicos"> <strong> 05 Procesamiento y fabricaci??n </strong> </option>
                                    <option data-ejemplo="05 Procesamiento y fabricaci??n" value="05.9 Productos impresos"> <strong> 05 Procesamiento y fabricaci??n </strong> </option>
                                    <option data-ejemplo="06 Transporte" value="06.1 Ferroviario"> <strong> 06 Transporte </strong> </option>
                                    <option data-ejemplo="06 Transporte" value="06.2 Autotransporte"> <strong> 06 Transporte </strong> </option>
                                    <option data-ejemplo="06 Transporte" value="06.3 A??reo"> <strong> 06 Transporte </strong> </option>
                                    <option data-ejemplo="06 Transporte" value="06.4 Mar??timo y fluvial"> <strong> 06 Transporte </strong> </option>
                                    <option data-ejemplo="06 Transporte" value="06.5 Servicios de apoyo"> <strong> 06 Transporte </strong> </option>
                                    <option data-ejemplo="07 Provisi??n de bienes y servicios" value="07.1 Comercio"> <strong> 07 Provisi??n de bienes y servicios </strong> </option>
                                    <option data-ejemplo="07 Provisi??n de bienes y servicios" value="07.2 Alimentaci??n y hospedaje"> <strong> 07 Provisi??n de bienes y servicios </strong> </option>
                                    <option data-ejemplo="07 Provisi??n de bienes y servicios" value="07.3 Turismo"> <strong> 07 Provisi??n de bienes y servicios </strong> </option>
                                    <option data-ejemplo="07 Provisi??n de bienes y servicios" value="07.4 Deporte y esparcimiento"> <strong> 07 Provisi??n de bienes y servicios </strong> </option>
                                    <option data-ejemplo="07 Provisi??n de bienes y servicios" value="07.5 Servicios personales"> <strong> 07 Provisi??n de bienes y servicios </strong> </option>
                                    <option data-ejemplo="07 Provisi??n de bienes y servicios" value="07.6 Reparaci??n de art??culos de uso dom??stico y personal"> <strong> 07 Provisi??n de bienes y servicios </strong> </option>
                                    <option data-ejemplo="07 Provisi??n de bienes y servicios" value="07.7 Limpieza"> <strong> 07 Provisi??n de bienes y servicios </strong> </option>
                                    <option data-ejemplo="07 Provisi??n de bienes y servicios" value="07.8 Servicio postal y mensajer??a"> <strong> 07 Provisi??n de bienes y servicios </strong> </option>
                                    <option data-ejemplo="08 Gesti??n y soporte administrativo" value="08.1 Bolsa, banca y seguros"> <strong> 08 Gesti??n y soporte administrativo </strong> </option>
                                    <option data-ejemplo="08 Gesti??n y soporte administrativo" value="08.2 Administraci??n"> <strong> 08 Gesti??n y soporte administrativo </strong> </option>
                                    <option data-ejemplo="08 Gesti??n y soporte administrativo" value="08.3 Servicios legales"> <strong> 08 Gesti??n y soporte administrativo </strong> </option>
                                    <option data-ejemplo="09 Salud y protecci??n social" value="09.2 Inspecci??n sanitaria y del medio ambientes"> <strong> 09 Salud y protecci??n social </strong> </option>
                                    <option data-ejemplo="09 Salud y protecci??n social" value="09.3 Seguridad social"> <strong> 09 Salud y protecci??n social </strong> </option>
                                    <option data-ejemplo="09 Salud y protecci??n social" value="09.4 Protecci??n de bienes y/o personas"> <strong> 09 Salud y protecci??n social </strong> </option>
                                    <option data-ejemplo="10 Comunicaci??n" value="10.1 Publicaci??n"> <strong> 10 Comunicaci??n </strong> </option>
                                    <option data-ejemplo="10 Comunicaci??n" value="10.2 Radio, cine, televisi??n y teatro"> <strong> 10 Comunicaci??n </strong> </option>
                                    <option data-ejemplo="10 Comunicaci??n" value="10.3 Interpretaci??n art??stica"> <strong> 10 Comunicaci??n </strong> </option>
                                    <option data-ejemplo="10 Comunicaci??n" value="10.4 Traducci??n e interpretaci??n ling????stica"> <strong> 10 Comunicaci??n </strong> </option>
                                    <option data-ejemplo="10 Comunicaci??n" value="10.5 Publicidad, propaganda y relaciones p??blicas"> <strong> 10 Comunicaci??n </strong> </option>
                                    <option data-ejemplo="11 Desarrollo y extensi??n del conocimiento" value="11.1 Investigaci??n"> <strong> 11 Desarrollo y extensi??n del conocimiento </strong> </option>
                                    <option data-ejemplo="11 Desarrollo y extensi??n del conocimiento" value="11.2 Ense??anza"> <strong> 11 Desarrollo y extensi??n del conocimiento </strong> </option>
                                    <option data-ejemplo="11 Desarrollo y extensi??n del conocimiento" value="11.3 Difusi??n cultural"> <strong> 11 Desarrollo y extensi??n del conocimiento </strong> </option>


                                </datalist>
                            </div>

                        </div>


                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="catalogo" class="col-md-12 col-form-label">{{ __('Tipo de usuario') }}</label>
                            </div>

                            <div class="col-md-3">
                                <label class="card-radio-btn">
                                    <input type="radio" name="typeUser" class="card-input-element d-none" id="demo1" checked="" value="SuperAdmin">
                                    <div class="card card-body">
                                        <!-- <div class="ribbon"><span style="color:#22202d;">suggested</span></div> -->
                                        <div class="content_head">Super Administrador</div>
                                        <!-- <div class="content_sub">description option 1</div>
                                        <p> included </p> -->
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="card-radio-btn">
                                    <input type="radio" name="typeUser" class="card-input-element d-none" value="Admin">
                                    <div class="card card-body">
                                        <!-- <div class="ribbon"><span style="color:#22202d;">suggested</span></div> -->
                                        <div class="content_head">Administrador</div>
                                        <!-- <div class="content_sub">description option 2</div>
                                        <p> +20??? </p> -->
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="card-radio-btn">
                                    <input type="radio" name="typeUser" class="card-input-element d-none" value="Capacitador">
                                    <div class="card card-body">
                                        <!-- <div class="ribbon"><span style="color:#22202d;">suggested</span></div> -->
                                        <div class="content_head">Capacitador</div>
                                        <!-- <div class="content_sub">description option 2</div>
                                        <p> +20??? </p> -->
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="card-radio-btn">
                                    <input type="radio" name="typeUser" class="card-input-element d-none" value="Usuario">
                                    <div class="card card-body">
                                        <!-- <div class="ribbon"><span style="color:#22202d;">suggested</span></div> -->
                                        <div class="content_head">Usuario</div>
                                        <!-- <div class="content_sub">description option 2</div>
                                        <p> +20??? </p> -->
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label for="email" class="col-md-12 col-form-label text-md-star">{{ __('Correo Electronico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <div class="col-md-6">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">{{ __('Datos de la Empresa') }}</div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="nameCompany" class="col-md-12 col-form-label">{{ __('Nombre o raz??n social (En caso de persona f??sica, anotar apellido paterno, apellido materno y nombre(s)):') }}</label>
                                <input id="nameCompany" type="text" class="form-control @error('nameCompany') is-invalid @enderror" name="nameCompany" value="{{ old('nameCompany') }}" required autocomplete="nameCompany" autofocus>
                            </div>
                            <div class="col-md-12">
                                <label for="shcp" class="col-md-12 col-form-label">{{ __('Registro Federal de Contribuyentes con homoclave (SHCP):') }}</label>
                                <input id="shcp" type="text" class="form-control @error('shcp') is-invalid @enderror" name="shcp" value="{{ old('shcp') }}" required autocomplete="shcp" autofocus>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">{{ __('Contrase??a') }}</div>

                    <div class="card-body">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="password" class="col-md-12 col-form-label ">{{ __('Contrase??a') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-md-12 col-form-label ">{{ __('Confirmar Contrase??a') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="col-md-6">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection