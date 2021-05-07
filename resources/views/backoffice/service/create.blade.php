@extends('layouts.app')

@section('content')
<form method="POST" action="/services/store">
    @csrf
    <div class="mb-3">
      <label class="form-label">Icone</label>
      <input type="text" class="form-control" name="icone">
    </div>
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="mb-3">
        <label class="form-label">description</label>
        <input type="text" class="form-control" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection