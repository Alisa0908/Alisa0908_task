{{-- index --}}
<h1><b>タスク一覧</b></h1>

@foreach ($tasks as $task)
{{-- actionはフォームを送信する先に指定する --}}
    <form action="/tasks" method="post">
        @csrf
        <div style="display:inline-flex">  
            <li style="list-style: none;">
                <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
            </li>
    </form>
    <form action="/tasks/{{ $task->id }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか?')){return false};">
        </div>
    </form>
@endforeach

<hr>

{{-- create --}}
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

<h1>新規論文投稿</h1>
<form action="/tasks" method="post">
    @csrf
    <p>タイトル<br>
        <input type="string" name="title" value="{{ old('title') }}">
    </p>
    <p>内容<br>
        <textarea type="text" name="contents" value="{{ old('contents') }}"></textarea>
    </p>
    <input type="submit" value="Create Task">
</form>

