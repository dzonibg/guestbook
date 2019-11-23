@extends("inc.layout")
@section("page")
    @foreach($comments as $comment)
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{$comment->name}}</h3>
            </div>
            <div class="panel-body">
                {{$comment->text}}
            </div>
        </div>
    </div>
    @endforeach
@endsection
