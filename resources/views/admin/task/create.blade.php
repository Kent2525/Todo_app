<h1>プロフィール登録</h1>
<form action="/admin/task" method="POST">
@csrf
<input type="text" name="todo">
<input type="submit" value="登録">
</form>