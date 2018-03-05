@extends('layouts.app')

@section('content')
<h1 class="h3">Mensaje id: {{ $messages->id }}</h1>
<img class="img-thumbnail" src="{{ $messages->image }}" alt="">
<p class="card-text">
    {{ $messages->content}}
<small class="text-muted">{{ $messages->created_at }}</small>
</p>
@endsection