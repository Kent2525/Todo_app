<h1>Todo一覧</h1>
<ul>
@foreach($todos as $todo)
  <li>{{ $todo->todo }}<a href="/admin/edit/{{$todo->id}}">編集</a></li>
@endforeach
</ul>
