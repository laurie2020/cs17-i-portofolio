@extends('layouts.app')


@section('content')
<form method="POST" action="/portofolios/{{ $portofolio->id }}/update">
    @csrf
    <div class="mb-3">
      <label class="form-label">Image</label>
      <input type="text" class="form-control" value="{{ $portofolio->image }}" name="image">
    </div>
    <div class="mb-3">
        <label class="form-label">Categorie</label>
        <input type="text" class="form-control" value="{{ $portofolio->categorie }}" name="categorie">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection