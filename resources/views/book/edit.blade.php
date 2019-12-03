@extends('layouts.app')

@section('title', '編集')
@section('content')
  <h2>Edit Book</h2>
  <form action="/books/{{ $book->id }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="patch">
    <input type="text" name="name" value="{{ $book->name }}">
    <input type="submit" value="保存">
  </form>
@endsection
