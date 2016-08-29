@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit your messages</div>
                <div class="panel-body">
                    <form method="POST" action="{{ url('messages/'.$message->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <textarea name="body">{{ $message->body }}</textarea>
                        <button type="submit">Update Comment</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

