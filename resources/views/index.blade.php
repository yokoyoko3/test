@extends('layout')

@section('content')
  <a href="{{ route('create') }}">新規作成</a>

  @foreach($memos as $memo)
  <div>
    <span> {{ $memo->content }} </span>
  </div>

  <div>
{{-- <a href="{{ route('edit', ['id'=>$memo->id]) }}">編集</a>--}}
  </div>
  @endforeach


@endsection