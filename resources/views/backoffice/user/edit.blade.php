@extends('layouts.app')


@section('content')
<form method="POST" action="/users/{{ $user->id }}/update">
    @csrf
    <div class="mb-3">
      <label class="form-label">Last name</label>
      <input type="text" class="form-control" value="{{ $user->lastname }}" name="lastname">
    </div>
    <div class="mb-3">
        <label class="form-label">First name</label>
        <input type="text" class="form-control" value="{{ $user->firstname }}" name="firstname">
    </div>
    <div class="mb-3">
        <label class="form-label">Birth Date</label>
        <input type="text" class="form-control" value="{{ $user->birthdate }}" name="birthdate">
    </div>
    <div class="mb-3">
        <label class="form-label">Website</label>
        <input type="text" class="form-control" value="{{ $user->website }}" name="website">
    </div>
    <div class="mb-3">
        <label class="form-label">Phone number</label>
        <input type="text" class="form-control" value="{{ $user->phoneNumber }}" name="phoneNumber">
    </div>
    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" class="form-control" value="{{ $user->city }}" name="city">
    </div>  
    <div class="mb-3">
        <label class="form-label">Age</label>
        <input type="text" class="form-control" value="{{ $user->age }}" name="age">
    </div>
    <div class="mb-3">
        <label class="form-label">Degree</label>
        <input type="text" class="form-control" value="{{ $user->degree }}" name="degree">
    </div>
    <div class="mb-3">
        <label class="form-label">E-Mail</label>
        <input type="text" class="form-control" value="{{ $user->email }}" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Freelance</label>
        <input type="text" class="form-control" value="{{ $user->freelance }}" name="freelance">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection