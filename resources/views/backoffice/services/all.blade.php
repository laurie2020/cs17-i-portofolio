@extends('layouts.app')

@section('content')
    @include('partials.backnav')
    <main id="main">
        <a href="/aservices/create">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icone</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <th scope="row">{{ $services->id }}</th>
                        <td>{{ $services->image }}</td>
                        <td>{{ $services->title }}</td>
                        <td>{{ $services->description }}</td>
                        <td>
                            <a href="/services/{{ $services->id }}/edit">Edit</a>
                            <form action="/services/{{ $services->id }}/delete" method="POST">
                                @csrf
                                <button class="bg-danger" type="submit" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

@endsection