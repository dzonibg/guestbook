@extends("inc.layout")
@section("page")
    @foreach($comments as $comment)
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{$comment->name}} - {{$comment->updated_at}} - #{{$comment->id}}</h3>
            </div>
            <div class="panel-body">
                {{$comment->text}}

                <p><a href="comment/{{$comment->id}}/edit">Edit comment</a></p>
                <form method="POST" action="comment/{{$comment->id}}">
                      @method("DELETE")
                      @csrf
                    <button class="btn btn-primary" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <center>
        <form action="/comment/create" method="get" role="form">
        <button type="submit" class="btn btn-primary">Add comment</button>
        </form>
    </center>
@endsection
