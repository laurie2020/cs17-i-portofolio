@extends('layouts.app')

@section('content')
<form method="POST" action="/portofolios/store">
    @csrf
    <div class="mb-3">
      <label class="form-label">Images</label>
      <input type="text" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label class="form-label">Catégorie</label>
        <input type="text" class="form-control" name="categorie">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection