@extends("inc.layout")
@section("page")
    <form action="/comment/{{$comment->id}}" method="post" role="form">
        @csrf
        @method("PUT")
        <legend>New comment</legend>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$comment->name}}" required>
        </div>
        <div class="form-group">
            <label for="text">Comment</label>
            <input type="text" class="form-control" name="text" id="text" value="{{$comment->text}}" required>
        </div>


        <button type="submit" class="btn btn-primary">Submit comment</button>
    </form>

    @endsection
