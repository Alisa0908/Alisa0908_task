<h1><b>タスク詳細</b></h1>

<p>【タイトル】</p>
<p>{{ $task->title }}</p>

<p>【内容】</p>
<p>{{ $task->contents }}</p>
<div style="display:inline-flex">
    <a href="/tasks"><button>一覧へ戻る</button></a>
    <a href="/tasks/{{ $task->id }}/edit"><button>編集する</button></a>
<form action="/tasks/{{ $task->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか?')){return false};">
    </form>
</div>
</form>