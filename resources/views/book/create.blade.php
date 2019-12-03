@extends('layouts.application')

@section('title', '新規投稿')
@section('content')
  <h2>New Book</h2>
  <form action="/books" method="post">
    {{ csrf_field() }}
    <input type="text" name="name">
    <input type="submit" value="投稿">
  </form>
@endsection
