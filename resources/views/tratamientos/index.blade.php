@extends('layouts.layout') @section('content')
    <div class="container">
	@section("title")
	<h1>@lang('Treatments')</h1>
	@endsection
        <a class="btn" href="/tratamientos/create"><i class="fas fa-plus-circle fa-3x"></i></a>
        <table id="table_id" class="table table-bordered table-striped" style="border: solid 1px #000;">
            <thead>
                <tr>
                    <th style="width: 200px; border-bottom: solid 1px #000;">@lang('Denomination')</th>
                    <th style="width: 200px; border-bottom: solid 1px #000;">@lang('Price')</th>
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
                            <a href="/tratamientos/{{ $tratamiento->id }}/edit"> <i class="far fa-edit fa-2x"></i></a>
                        </td>
                        <td>
                            <form class="formeliminar" method="POST" action="/tratamientos/{{ $tratamiento->id }}">
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt fa-2x"></i></button>
                                <input type="hidden" name="_method" value="DELETE" />
                                @csrf @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@if(Session::has('añadir_tratamiento'))
	<script>
		toastr.success("{!!Session::get('añadir_tratamiento')!!}")
	</script>
@endif
@if(Session::has('editar_tratamiento'))
    <script>
        toastr.success("{!!Session::get('editar_tratamiento')!!}")
    </script>
@endif
@endsection
