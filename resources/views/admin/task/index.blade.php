<h1>Todo一覧</h1>
<ul>
@foreach($todos as $todo)
  <li>{{ $todo->todo }}<a href="/admin/task/{{$todo->id}}/edit">編集</a>
  <form action="/admin/task/{{$todo->id}}" method="POST">
  @csrf
  @method('DELETE')
  <input type="submit" value="削除">
</li>
@endforeach
</ul>
