<form action="{{ url('message') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="body">
    <button type="submit">留言</button>
</form>
@foreach ($messages as $message)

    <!--新增留言-->
    <a href="{{ url('messages/'.$message->id) }}"><div>{{ $message->body }}</div></a>

    @if($message->user()->first() == Auth::user())
        <!--編輯留言-->
        <form action="{{ url('messages/'.$message->id.'/edit') }}" method="GET">
            <button type="submit" id="edit-message-{{ $message->id }}">
                Edit
            </button>
        </form>
    @endif

    <!--刪除留言-->
    @if($message->user()->first() == Auth::user())
    <form action="{{ url('message/'.$message->id) }}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}
        <button type="submit" id="delete-message-{{ $message->id }}">
          Delete
        </button>
    </form>
    @endif
@endforeach
