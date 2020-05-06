@extends('layout')

@section('content')

  <form method="POST" action="{{ route('update', ['id'=>$memo]) }}">
  @csrf
  <textarea name="content" rows="4">{{ $memo->content }}</textarea>
  <button type="submit">送信</button>
  <a href="{{ route('index') }}">キャンセル</a>

@endsection

