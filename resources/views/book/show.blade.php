@extends('layouts.application')

@section('title', '詳細')
@section('content')
  <h2>{{ $book->name }}</h2>

  <a href="/books/{{ $book->id }}/edit">編集</a>
  <a href="/">一覧に戻る</a>
@endsection
