@extends('layouts.app')

@section('content')
<form method="POST" action="/facts/store">
    @csrf
    <div class="mb-3">
      <label class="form-label">Icone</label>
      <input type="text" class="form-control" name="icone">
    </div>
    <div class="mb-3">
        <label class="form-label">Number</label>
        <input type="text" class="form-control" name="number">
    </div>
    <div class="mb-3">
        <label class="form-label">description</label>
        <input type="text" class="form-control" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection