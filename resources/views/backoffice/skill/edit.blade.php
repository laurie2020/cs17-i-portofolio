@extends('layouts.app')


@section('content')
<form method="POST" action="/skills/{{ $skill->id }}/update">
    @csrf
    <div class="mb-3">
      <label class="form-label">Language</label>
      <input type="text" class="form-control" value="{{ $skill->language }}" name="language">
    </div>
    <div class="mb-3">
        <label class="form-label">Level</label>
        <input type="text" class="form-control" value="{{ $skill->level }}" name="level">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection