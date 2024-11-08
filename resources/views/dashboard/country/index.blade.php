@extends('adminlte::page')

@php
    $heads = ['ISO3', 'Name', 'Phone Code', 'Currency', 'Flag'];
@endphp

@section('content')
    <x-adminlte-card>
        <x-slot name="toolsSlot">
            <div class="d-flex flex-row-reverse bd-highlight">
                <a href="#" class="btn btn-secondary"><i class="fas fa-plus"></i> Create New</a>
            </div>
        </x-slot>

        <x-adminlte-datatable id="table1" :heads="$heads" striped hoverable bordered compressed>
            @foreach ($countries as $country)
                <tr>
                    <td>{{ $country['iso3'] }}</td>
                    <td>{{ $country['name'] }}</td>
                    <td>{{ $country['phone_code'] }}</td>
                    <td>{{ $country['currency'] }}</td>
                    <td>{{ $country['flag'] }}</td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </x-adminlte-card>
@endsection
