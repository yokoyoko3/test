@extends('layout')

@section('content')
  <form method="POST" action="{{ route('store') }}">
  @csrf
  <textarea name="content" rows="4"></textarea>
  <button type="submit">送信</button>
  <a href="{{ route('index') }}">キャンセル</a>

@endsection

