@extends('layouts.layout') @section('content')
    <div class="container">
        <h1>@lang('Treatments')</h1>
        <a class="btn" href="/tratamientos/create"><i class="fas fa-plus-circle fa-3x"></i></a>
        <table id="table_id" class="table table-bordered table-striped" style="border: solid 1px #000;">
            <thead>
                <tr>
                    <th style="width: 200px; border-bottom: solid 1px #000;">@lang('Denomination')</th>
                    <th style="width: 200px; border-bottom: solid 1px #000;">@lang('Price')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Show')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Edit')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Delete')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tratamientos as $tratamiento)
                    <tr>
                        <td style="text-align: center;">{{ $tratamiento->denominacion }}</td>
                        <td style="text-align: center;">{{ $tratamiento->precio }}</td>

                        <td>
                            <a href="/tratamientos/{{ $tratamiento->id }}"> <i class="far fa-eye fa-3x"></i></a>
                        </td>
                        <td>
                            <a href="/tratamientos/{{ $tratamiento->id }}/edit"> <i class="far fa-edit fa-3x"></i></a>
                        </td>
                        <td>
                            <form method="POST" action="/tratamientos/{{ $tratamiento->id }}">
                                <button style="outline:none;" type="submit"><i class="fas fa-trash-alt fa-3x"></i></button>
                                <input type="hidden" name="_method" value="DELETE" />
                                @csrf @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
