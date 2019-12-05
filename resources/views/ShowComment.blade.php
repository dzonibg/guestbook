@extends("inc.layout")
@section("page")
    <p>{{$comment->name}}</p>
    <p>{{$comment->text}}</p>

    @endsection
