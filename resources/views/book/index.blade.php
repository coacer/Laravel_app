@extends('layouts.app')
@section('title', '一覧')
@section('content')
  <ul>
    @foreach($books as $book)
      <li><a href="/books/{{ $book->id }}">{{ $book->name }}</a></li>
      <form action="/books/{{ $book->id }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <input type="submit" value="削除">
      </form>
    @endforeach
  </ul>
  <a href="/books/create">新規投稿</a>
@endsection

