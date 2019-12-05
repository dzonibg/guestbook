@extends("inc.layout")
    @section("page")
        <form action="/comment" method="post" role="form">
            @csrf
            <legend>Create New comment</legend>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
            </div>
            <div class="form-group">
                <label for="text">Comment</label>
                    <input type="text" class="form-control" name="text" id="text" placeholder="Enter your comment here.">
            </div>


            <button type="submit" class="btn btn-primary">Submit comment</button>
        </form>
    @endsection
