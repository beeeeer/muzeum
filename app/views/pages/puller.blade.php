@extends('layouts.default')
@section('content')
    <div class="puller-container">
    UWAGA!! Update oprogramowania tylko po konsultacji!!

    @foreach($branches as $single)
        @if($single != '')
            <p>
                <a style="color: #fff;" href='#' class="branch" branch = "{{$single}}" >Pobierz oprogramowanie z gałęzi: {{$single}}</a>
            </p>
        @endif
    @endforeach
        <div class="output" id = "output"> </div>
    </div>
@endsection
