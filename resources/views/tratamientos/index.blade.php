@extends('layouts.layout') @section("content")
<div class="container">
	<h1>@lang('Treatments')</h1>
	<a class="btn btn-success" href="/tratamientos/create">@lang('Add Treatment')</a>
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
			@foreach($tratamientos as $tratamiento)
			<tr>
				<td style="text-align: center;">{{ $tratamiento->denominacion }}</td>
				<td style="text-align: center;">{{ $tratamiento->precio }}</td>

				<td>
					<a href="/tratamientos/{{$tratamiento->id}}" class="btn btn-info"
						>@lang('Show')</a
					>
				</td>
				<td>
					<a href="/tratamientos/{{$tratamiento->id}}/edit" class="btn btn-success"
						>@lang('Edit')</a
					>
				</td>
				<td>
					<form method="POST" action="/tratamientos/{{$tratamiento->id}}">
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