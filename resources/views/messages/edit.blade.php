<form method="POST" action="{{ url('messages/'.$message->id) }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <textarea name="body">{{ $message->body }}</textarea>
    <button type="submit">Update Comment</button>
</form>
