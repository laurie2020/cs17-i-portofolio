@extends('layouts.app')

@section('content')
<form method="POST" action="/skills/store">
    @csrf
    <div class="mb-3">
      <label class="form-label">Language</label>
      <input type="text" class="form-control" name="language">
    </div>
    <div class="mb-3">
        <label class="form-label">Level</label>
        <input type="text" class="form-control" name="level">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection