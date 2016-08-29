@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div>Content: {{ $message->body }}</div>
                </div>
                <div class="panel-body">
                    <div>Postet by {{ $name}}</div>
                    <div>Post at: {{ $message->created_at }}</div>
                    <div>Edit at: {{ $message->updated_at }}</div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection

