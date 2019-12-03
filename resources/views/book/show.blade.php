@extends('layouts.app')

@section('title', '詳細')
@section('content')
  <h2>{{ $book->name }}</h2>
  <h3>ユーザー名: {{ $user->name }}</h3>

  <a href="/books/{{ $book->id }}/edit">編集</a>
  <a href="/">一覧に戻る</a>
@endsection
