@extends('layouts.master')

@section('content')
    <form method="post" action="#">
        <div class="row gtr-uniform">
            <div class="col-9 col-12-xsmall">
                <input type="text" name="pais" id="pais_id" value="" placeholder="Pa&iacute;s">
            </div>
            <div class="col-3 col-12-xsmall">
                <input type="text" name="pais_id" id="pais_id" value="" placeholder="IdPais">
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="fecha" id="fecha" value="" placeholder="Fecha">
            </div>
            <div class="col-2 col-12-xsmall">
                <input type="text" name="contagiados" id="contagiados" value="" placeholder="Contagiados">
            </div>
            <div class="col-2 col-12-xsmall">
                <input type="text" name="fallecidos" id="fallecidos" value="" placeholder="Fallecidos">
            </div>
            <div class="col-2 col-12-xsmall">
                <input type="text" name="recuperados" id="recuperados" value="" placeholder="Recuperados">
            </div>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Enviar" class="primary"></li>
                    <li><input type="reset" value="Cancelar"></li>
                </ul>
            </div>
        </div>
    </form>
@endsection
