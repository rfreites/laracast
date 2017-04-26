@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="/form" method="POST">
                    {{ csrf_field()  }}
                    <div class="input-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="name" name="name" id="name">
                    </div>
                    <div class="input-group">
                        <label for="name">Comment:</label>
                        <input type="text" class="form-control" placeholder="comment" name="comment" id="comment">
                    </div>
                    <div class="form-grop">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection