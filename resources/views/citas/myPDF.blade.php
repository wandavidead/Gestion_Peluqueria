<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</head>

<body>
    <h1>@lang('Appointments')</h1>
    <table class="ui celled table">
        <thead>
            <tr>
                <th class="center aligned">
                    @lang('Appointment date')
                </th>
                <th class="center aligned">
                    @lang('Client')
                </th>
                <th class="center aligned">
                    @lang('Employee')
                </th>
                <th class="center aligned">
                    @lang('Treatment')
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($citas as $cita)
                <tr>
                    <td class="center aligned">{{ $cita->fecha_cita }}</td>
                    <td class="center aligned">{{ $cita->nombrecl }} {{ $cita->apellidoscl }}</td>
                    <td class="center aligned">{{ $cita->nombree }} {{ $cita->apellidose }}</td>
                    <td class="center aligned">{{ $cita->denominacion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
