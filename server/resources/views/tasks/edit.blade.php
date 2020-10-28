@if (count($errors) > 0)
    <div>
        <p>
            <b>【エラーがあります】</b>
        </p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>投稿論文編集</h1>

<form action="/tasks/{{ $task->id }}" method='post'>
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $task->id }}">

    <p>論文タイトル
    <input type="string" name="title" value="{{ $task->title }}">
    </p>

    <p>本文
    <input type="text" name="contents" value="{{ $task->contents }}">
    </p>
    
    <div style="display:inline-flex">
    <input type="submit" value="更新">
    <a href="/tasks/{{ $task->id }}"><button>詳細に戻る</button></a>
    </div>
</form>