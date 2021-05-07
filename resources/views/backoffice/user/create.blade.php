@extends('layouts.app')

@section('content')
<form method="POST" action="/article/store">
    @csrf
    <div class="mb-3">
      <label class="form-label">Last name</label>
      <input type="text" class="form-control" name="lastname">
    </div>
    <div class="mb-3">
        <label class="form-label">First name</label>
        <input type="text" class="form-control" name="lastname">
    </div>
    <div class="mb-3">
        <label class="form-label">Birth date</label>
        <input type="date" class="form-control" name="birthdate">
    </div>
    <div class="mb-3">
        <label class="form-label">Website</label>
        <input type="text" class="form-control" name="website">
    </div>
    <div class="mb-3">
        <label class="form-label">Phone number</label>
        <input type="text" class="form-control" name="phoneNumber">
    </div>
    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" class="form-control" name="city">
    </div>
    <div class="mb-3">
        <label class="form-label">age</label>
        <input type="text" class="form-control" name="age">
    </div>
    <div class="mb-3">
        <label class="form-label">Degree</label>
        <input type="text" class="form-control" name="degree">
    </div>
    <div class="mb-3">
        <label class="form-label">E-Mail</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Freelance</label>
        <input type="text" class="form-control" name="lastname">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection