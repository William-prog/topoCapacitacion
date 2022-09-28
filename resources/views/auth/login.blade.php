@extends('layouts.app')

<div class="divPrincipal">
    <div class="containerP">

        <div class="left">
            <div class="login">
                <img width="100%" src="/img/topo-logo.png" alt="Servicios y Equipos Topo S.A. de C.V.">
            </div>
        </div>
        <div class="right">
            <div class="form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label class="field field_v3">
                        <input id="email" name="email" class="field__input" placeholder="000">
                        <span class="field__label-wrap">
                            <span class="field__label">Correo Electronico</span>
                        </span>
                    </label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>Usuario no registrado</strong>
                    </span>
                    @enderror
                    <br>
                    <br>
                    <br>
                    <label class="field field_v3">
                        <input id="password" name="password" class="field__input pw3" placeholder="**************">
                        <span class="field__label-wrap">
                            <span class="field__label">Contraseña</span>
                        </span>
                    </label>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>Contraseña no valida</strong>
                    </span>
                    @enderror
                    <br>
                    <button type="submit" class="button btn-primary" id="button-5">
                        <strong> <i class="fas fa-sign-in-alt fa-3x"></i> </strong>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    input.pw3 {
        -webkit-text-security: square;
        color: #ff781f;
    }
</style>

<style>
    /* GRID */
    .six {
        width: 49.2%;
    }

    /* COLUMNS */
    .col {
        display: block;
        float: left;
        margin: 1% 0 1% 1.6%;
    }

    .col:first-of-type {
        margin-left: 0;
    }

    .containerP {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        position: relative;
        text-align: center;
    }

    /* CLEARFIX */
    .cf:before,
    .cf:after {
        content: " ";
        display: table;
    }

    .cf:after {
        clear: both;
    }

    .cf {
        *zoom: 1;
    }

    /* ALL BUTTONS */

    .button {
        background-color: transparent;
        border: 0px transparent;
        display: inline-block;
        padding: 20px 50px;
        margin: 20px 0;
        position: relative;
        letter-spacing: 4px;
        color: #ecf0f1;
        cursor: pointer;
    }


    /* BUTTON 5 */

    #button-5 {
        width: 100%;
        color: #ff781f;
        overflow: hidden;
        background: none;
    }

    #button-5:before,
    #button-5:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        background-color: #ff781f;
        top: 0;
        left: -100%;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    #button-5:after {
        bottom: 0 !important;
        top: auto !important;
        right: -100%;
        left: auto;
        height: 4px;
    }

    #button-5:hover:before {
        left: 0;
    }

    #button-5:hover:after {
        right: 0;
    }
</style>

<style>
    .field__input {
        --uiFieldPlaceholderColor: var(--fieldPlaceholderColor, #767676);

        background-color: transparent;
        border-radius: 0;
        border: none;

        -webkit-appearance: none;
        -moz-appearance: none;

        font-family: inherit;
        font-size: inherit;

        color: #D1C4E9;
    }

    .field__input:focus::-webkit-input-placeholder {
        color: var(--uiFieldPlaceholderColor);
    }

    .field__input:focus::-moz-placeholder {
        color: var(--uiFieldPlaceholderColor);
    }


    .field {
        --uiFieldBorderWidth: var(--fieldBorderWidth, 2px);
        --uiFieldPaddingRight: var(--fieldPaddingRight, 1rem);
        --uiFieldPaddingLeft: var(--fieldPaddingLeft, 1rem);
        --uiFieldBorderColorActive: var(--fieldBorderColorActive, rgba(22, 22, 22, 1));

        display: var(--fieldDisplay, inline-flex);
        position: relative;
        font-size: var(--fieldFontSize, 1rem);
    }

    .field__input {
        box-sizing: border-box;
        width: var(--fieldWidth, 100%);
        height: var(--fieldHeight, 3rem);
        padding: var(--fieldPaddingTop, 1.25rem) var(--uiFieldPaddingRight) var(--fieldPaddingBottom, .5rem) var(--uiFieldPaddingLeft);
        border-bottom: var(--uiFieldBorderWidth) solid var(--fieldBorderColor, rgba(0, 0, 0, .25));
    }

    .field__input:focus {
        outline: none;
    }

    .field__input::-webkit-input-placeholder {
        opacity: 0;
        transition: opacity .2s ease-out;
    }

    .field__input::-moz-placeholder {
        opacity: 0;
        transition: opacity .2s ease-out;
    }

    .field__input:focus::-webkit-input-placeholder {
        opacity: 1;
        transition-delay: .2s;
    }

    .field__input:focus::-moz-placeholder {
        opacity: 1;
        transition-delay: .2s;
    }

    .field__label-wrap {
        box-sizing: border-box;
        pointer-events: none;
        cursor: text;

        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .field__label-wrap::after {
        content: "";
        box-sizing: border-box;
        width: 100%;
        height: 0;
        opacity: 0;

        position: absolute;
        bottom: 0;
        left: 0;
    }

    .field__input:focus~.field__label-wrap::after {
        opacity: 1;
    }

    .field__label {
        position: absolute;
        left: var(--uiFieldPaddingLeft);
        top: calc(50% - .5em);

        line-height: 1;
        font-size: var(--fieldHintFontSize, inherit);

        transition: top .2s cubic-bezier(0.9, -0.15, 0.1, 1.15), opacity .2s ease-out, font-size .2s ease-out;
        will-change: bottom, opacity, font-size;
    }

    .field__input:focus~.field__label-wrap .field__label,
    .field__input:not(:placeholder-shown)~.field__label-wrap .field__label {
        --fieldHintFontSize: var(--fieldHintFontSizeFocused, .75rem);

        top: var(--fieldHintTopHover, .25rem);
    }

    .field_v3 .field__label-wrap::after {
        border: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColorActive);
        will-change: opacity, height;
        transition: height .2s ease-out, opacity .2s ease-out;
    }

    .field_v3 .field__input:focus~.field__label-wrap::after {
        height: 100%;
    }

    .field {
        --fieldBorderColor: #D1C4E9;
        --fieldBorderColorActive: #ff781f;
    }
</style>

<style>
    @import url('https://rsms.me/inter/inter-ui.css');

    ::selection {
        background: #2D2F36;
    }

    ::-webkit-selection {
        background: #2D2F36;
    }

    ::-moz-selection {
        background: #2D2F36;
    }

    .divPrincipal {
        background-image: url('img/background.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        overflow-x: hidden;


        display: flex;
        flex-direction: column;
        height: 100%;
        position: absolute;
        place-content: center;
        width: 100%;

        left: 0px;
        top: 0px;
    }

    ::-webkit-scrollbar {
        display: none;
    }

    @media (max-width: 767px) {
        .divPrincipal {
            height: auto;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
    }

    .containerP {
        display: flex;
        height: 320px;
        width: 640px;
    }

    @media (max-width: 767px) {
        .containerP {
            flex-direction: column;
            height: 630px;
            width: 320px;
        }
    }

    .left {
        background: white;
        height: calc(100% - 150px);
        top: 70px;
        position: relative;
        width: 50%;
        opacity: 95%;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    @media (max-width: 767px) {
        .left {
            height: 100%;
            left: 20px;
            width: calc(100% - 40px);
            max-height: 270px;
        }
    }

    .login {
        font-size: 50px;
        font-weight: 900;
        margin: 50px 40px 40px;
    }

    .eula {
        color: #999;
        font-size: 14px;
        line-height: 1.5;
        margin: 40px;
    }

    .right {
        background: #474A59;
        box-shadow: 0px 0px 40px 16px rgba(0, 0, 0, 0.22);
        color: #F1F1F2;
        position: relative;
        width: 50%;
        opacity: 95%;
        border-radius: 10px;
    }

    @media (max-width: 767px) {
        .right {
            flex-shrink: 0;
            height: 100%;
            width: 100%;
            max-height: 350px;
        }
    }

    svg {
        position: absolute;
        width: 320px;
    }

    path {
        fill: none;
        stroke: url(#linearGradient);
        ;
        stroke-width: 4;
        stroke-dasharray: 240 1386;
    }

    .form {
        margin: 40px;
        position: absolute;
    }


    #submit {
        color: #707075;
        margin-top: 40px;
        transition: color 300ms;
    }

    #submit:focus {
        color: #f2f2f2;
    }

    #submit:active {
        color: #d0d0d2;
    }
</style>