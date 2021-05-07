@extends('layouts.app')


@section('content')
<form method="POST" action="/services/{{ $service->id }}/update">
    @csrf
    <div class="mb-3">
      <label class="form-label">Icone</label>
      <input type="text" class="form-control" value="{{ $service->icone }}" name="icone">
    </div>
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" value="{{ $service->title }}" name="title">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" value="{{ $service->descirption }}" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection