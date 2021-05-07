@extends('layouts.app')


@section('content')
<form method="POST" action="/facts/{{ $fact->id }}/update">
    @csrf
    <div class="mb-3">
      <label class="form-label">Icone</label>
      <input type="text" class="form-control" value="{{ $fact->icone }}" name="icone">
    </div>
    <div class="mb-3">
        <label class="form-label">Number</label>
        <input type="text" class="form-control" value="{{ $fact->number }}" name="number">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" value="{{ $fact->descirption }}" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection