@extends('layouts.master')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Pais</th>
            <th>Fecha</th>
            <th>Contagiados</th>
            <th>Fallecidos</th>
            <th>Recuperados</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>Spain</th>
            <th>2020-02-01</th>
            <th>1</th>
            <th>0</th>
            <th>0</th>
        </tr>
        <tr>
            <th>Spain</th>
            <th>2020-02-09</th>
            <th>2</th>
            <th>0</th>
            <th>0</th>
        </tr>
        <tr>
            <th>Spain</th>
            <th>2020-02-15</th>
            <th>2</th>
            <th>0</th>
            <th>2</th>
        </tr>
        <tr>
            <th>Spain</th>
            <th>...</th>
            <th>...</th>
            <th>...</th>
            <th>...</th>
        </tr>
        </tbody>
    </table>
@endsection