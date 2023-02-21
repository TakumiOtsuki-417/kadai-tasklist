@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>id = {{ $task->id }} の詳細</h2>
    </div>

    <table class="table w-full my-4">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    <a class="btn btn-outline" href="{{ route('tasks.edit', $task->id) }}">編集</a>
    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" class="my-2">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-error btn-outline" onclick="return confirm('こちらのタスクを削除します。よろしいですか？')">削除</button>
    </form>

@endsection