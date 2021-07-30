@extends('layouts.master')
@section("contenido")

<div class="row mt-2">
    <div class="col-12 col-md-6 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <span>Filtrar</span>
            </div>
            <div class="card-body">
                <select class="form-select" id="filtro-cbx">
                    <option value="todos">Todos</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-6 mx-auto">
        <table class="table table-succes table-striped table-responsive text-light">
            <thead class="bg-secondary text-light">
                <tr>
                    <td>Fecha</td>
                    <td>Hora</td>
                    <td>Medidor</td>
                    <td>Valor</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody id="tbody-medidas">

            </tbody>
        </table>
    </div>
</div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/registroService.js')}}"></script>    
    <script src="{{asset('js/registro.js')}}"></script>    
@endsection