@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hi {{ Auth::user()->name }}!</div>
                <div class="panel-body">

                    <form action="{{ url('message') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="body">
                        <button type="submit">留言</button>
                    </form>
                    @foreach ($messages as $message)

                        <!--新增留言-->
                        <a href="{{ url('messages/'.$message->id) }}">{{ $message->body }}</a>

                        @if($message->user()->first() == Auth::user())
                            <!--編輯留言-->
                            <form action="{{ url('messages/'.$message->id.'/edit') }}" method="GET">
                                <button type="submit" id="edit-message-{{ $message->id }}">
                                    Edit
                                </button>
                            </form>
                        @endif

                        <!--刪除留言-->
                        <form action="{{ url('message/'.$message->id) }}" method="POST">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                            <button type="submit" id="delete-message-{{ $message->id }}">
                              Delete
                            </button>
                        </form>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

