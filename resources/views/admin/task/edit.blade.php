<h1>プロフィール編集</h1>
<form action="/admin/task/{{$todo->id}}" method="POST">
@csrf
@method('PUT')
<input type="text" name="todo" value="{{$todo->todo}}">
<input type="submit" value="更新">
</form>