@extends('layouts.default')
@section('content')
<?php echo  round(exec("cat /sys/class/thermal/thermal_zone0/temp ") / 1000, 1).' °C'.PHP_EOL; ?>
@stop
