@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/article/create">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Last name</th>
                <th scope="col">Birth date</th>
                <th scope="col">Website</th>
                <th scope="col">Phone number</th>
                <th scope="col">City</th>
                <th scope="col">Age</th>
                <th scope="col">Degree</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Freelance</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->birthdate }}</td>
                    <td>{{ $user->website }}</td>
                    <td>{{ $user->phonenumber }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->degree }}</td>
                    <td>{{ $user->email }}</td>
                    <select>{{ $user->freelance}}</select>
                    <td>
                        <a href="/article/{{ $user->id }}/edit">Edit</a>
                        <form action="/article/{{ $user->id }}/delete" method="POST">
                            @csrf
                            <button class="bg-danger" type="submit" >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
@endsection