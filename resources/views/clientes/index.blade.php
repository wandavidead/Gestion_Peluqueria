@extends('layouts.layout')
@section("content")
<div class="container">
	<h1>@lang('Clients')</h1>
	<a class="btn btn-success" href="/clientes/create">@lang('Add Client')</a>
	<table id="table_id" class="table table-bordered table-striped" style="border: solid 1px #000;">
		<thead>
			<tr>
				<th style="width: 200px; border-bottom: solid 1px #000;">@lang('Name')</th>
				<th style="width: 200px; border-bottom: solid 1px #000;">@lang('Last Name')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Telephone')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Show')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Edit')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Delete')</th>
			</tr>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
			<tr>
				<td style="text-align: center;">{{ $cliente->nombre }}</td>
				<td style="text-align: center;">{{ $cliente->apellidos }}</td>
				<td style="text-align: center;">{{ $cliente->telefono }}</td>

				<td>
					<a href="/clientes/{{$cliente->id}}" class="btn btn-info">@lang('Show')</a>
				</td>
				<td>
					<a href="/clientes/{{$cliente->id}}/edit" class="btn btn-success">@lang('Edit')</a>
				</td>
				<td>
					<form method="POST" action="/clientes/{{$cliente->id}}">
						<input class="btn btn-danger" type="submit" value="@lang('Delete')" />
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