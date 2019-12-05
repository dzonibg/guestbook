@extends("inc.layout")
@section("page")
    <h1>Crated a new comment.</h1>
    <p> {{$request->name}} </p>
    <p>{{$request->text}} </p>

    @endsection
