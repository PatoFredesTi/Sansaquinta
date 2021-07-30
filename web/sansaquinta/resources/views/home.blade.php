@extends('layouts.master')
@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <span>Registrar Lectura</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="fecha-date">Fecha</label>
                        <input type="date" id="fecha-date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hora-time">Hora</label>
                        <input type="time" id="hora-time" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="medidor-select">Medidor</label>
                        <select class="form-select" id="medidor-select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt">Direccion</label>
                        <input type="text" class="form-control" id="direccion-txt">
                    </div>
                    <div class="mb-3">
                        <label for="valor-int">Valor</label>
                        <input type="number" min="0" max="500" class="form-control" id="valor-int">
                    </div>
                    <div class="mb-3">
                        <label for="medida-select">Tipo de Medida</label>
                        <select class="form-select" id="medida-select">
                            <option value="kilowatts">Kilowatts</option>
                            <option value="watts">Watts</option>
                            <option value="temperatura">Temperatura</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-info" id="registrar-btn">Registrar Medida</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/registroService.js')}}"></script>  
    <script src="{{asset('js/home.js')}}"></script>

@endsection