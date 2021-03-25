@extends('layouts.layout')
@section("headlink")
<link rel="stylesheet" type="text/css" href="css/evo-calendar.css" />
<link rel="stylesheet" type="text/css" href="css/evo-calendar.midnight-blue.css" /> 
@endsection
@section("headscript")
<script src="js/evo-calendar.js"></script>
@endsection
@section("content")
<div class="container">
	@section("title")
	<h1>@lang('Appointments')</h1>
	@endsection
	<a class="btn " href="/citas/create"><i class="fas fa-calendar-plus fa-3x"></i>
	</a>
	<a class="btn" href="/myPDF"><i class="far fa-file-pdf fa-3x"></i></a>
	<div id="evoCalendar"></div>
</div>
<script>
	$(document).ready(function () {
		myEvents = [
			@foreach($citas as $cita)
			@foreach($empleados as $empleado)
			@foreach($clientes as $cliente)
			@if ($cita->empleado_id == $empleado->id)
			@if ($cita->cliente_id == $cliente->id)			
			{
				id: "{{$cita->id}}",
				name: "{{ $cliente->nombre_completo}}",
				date: ["{{ $cita->fecha_cita }}"],	
				description: "Le atendera el empleado {{ $empleado->nombre_completo }} a las {{ $cita->tiempo }}.",	
				type: "event",
			},
			@endif
			@endif
			@endforeach
			@endforeach
			@endforeach
		],
		$('#evoCalendar').evoCalendar({
				theme: 'Midnight Blue',
				language: 'es',
				calendarEvents: myEvents, 
		})
		$(document).on('click','.event-info',function(){
			id = $(this).parent().data('event-index');
			window.location.replace('/citas/' + id);
		});
	})
</script>
@if(Session::has('añadir_cita'))
	<script>
		toastr.success("{!!Session::get('añadir_cita')!!}")
	</script>
@endif

@endsection


