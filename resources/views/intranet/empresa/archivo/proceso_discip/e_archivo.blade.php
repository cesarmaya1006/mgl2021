@extends("theme.back.plantilla")
<!-- ************************************************************* -->
<!-- Funciones php -->
@section('funciones_php')
    @include('includes.funciones_php')
@endsection
<!-- titulo hoja -->
@section('estilosHojas')
    <!-- Pagina CSS -->

@endsection
<!-- ************************************************************* -->
<!-- titulo hoja -->
@section('tituloHoja')
    Archivo Laboral
@endsection
<!-- ************************************************************* -->
<!-- ************************************************************* -->
<!-- Cuerpo hoja -->
@section('cuerpo_pagina')
    <div class="card" style="border-top: 8px solid rgb(38, 160, 241);">
        @include('includes.error-form')
        @include('includes.mensaje')
        <div class="card-header">
            <div class="row mb-3">
                <div class="col-12 col-md-8 col-lg-8 text-md-left text-lg-left pl-2">
                    <h5>Proceso disciplinario faltas y sanciones: {{ $empleado->primer_nombre }}
                        {{ $empleado->segundo_nombre }} {{ $empleado->primer_apellido }}
                        {{ $empleado->segundo_apellido }}
                    </h5>
                    <br>
                    <h4>Documentos Proceso N. {{ $proceso->id }}</h4>
                </div>
                <div class="col-12 col-md-4 col-lg-4 text-md-right text-lg-right pl-2 pr-md-5 pr-lg-5">
                    <a href="{{ route('proceso_discip-n_archivo', ['id' => $empleado->id, 'id_p' => $proceso->id]) }}"
                        class="btn btn-info btn-sm text-center pl-3 pr-3 mr-3" style="font-size: 0.9em;"><i
                            class="fas fa-undo-alt mr-2"></i>Volver</a>

                </div>
            </div>
            <hr>
            <form class="row d-flex justify-content-around"
                action="{{ route('proceso_discip-guardar_e', ['id' => $empleado->id, 'id_p' => $proceso->id]) }}"
                method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="col-10 col-md-7 form-group">
                    <label for="nom_documento" class="col-form-label-sm">Descripción del Proceso</label>
                    <input type="hidden" name="id" id="id" value="{{ $empleado->id }}">
                    <input type="hidden" name="id_p" id="id_p" value="{{ $proceso->id }}">
                    <input type="hidden" name="doc" id="doc" value="{{ $doc }}">
                    <input type="file" accept="application/pdf" class="form-control form-control-sm" name="documento"
                        id="documento" aria-describedby="helpId" placeholder="" required>
                </div>
                <div class="col-12 mb-5 mt-3">
                    <div class="row d-flex justify-content-around">
                        <div class="col-10 col-md-7">
                            <button type="submit" class="btn btn-primary btn-xs pl-5 pr-5">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- *********************************************************************************************************************************** -->
    <!-- *********************************************************************************************************************************** -->
@endsection
<!-- ************************************************************* -->
<!-- script hoja -->
@section('scripts_pagina')
    <script src="{{ asset('js/intranet/empresas/archivo/soportes.js') }}"></script>
@endsection
<!-- ************************************************************* -->
