@extends('layouts.app')

@section('content')
    @include('partials.backnav')
    <main id="main">
        <a href="/users/create">Create</a>
        <table class="table">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Last name</th>
                <th scope="col">First name</th>
                <th scope="col">Birth date</th>
                <th scope="col">Website</th>
                <th scope="col">Phone number</th>
                <th scope="col">City</th>
                <th scope="col">Age</th>
                <th scope="col">Degree</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Freelance</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->birthdate }}</td>
                    <td>{{ $user->website }}</td>
                    <td>{{ $user->phoneNumber }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->degree }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->freelance}}</td>
                    <td>
                        <a href="/users/{{ $user->id }}/edit">Edit</a>
                        <form action="/users/{{ $user->id }}/delete" method="POST">
                            @csrf
                            <button class="bg-danger" type="submit" >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>

@endsection