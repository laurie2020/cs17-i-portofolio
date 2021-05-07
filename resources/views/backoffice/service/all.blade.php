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
                        <th scope="row">{{ $service->id }}</th>
                        <td>{{ $service->image }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <a href="/services/{{ $service->id }}/edit">Edit</a>
                            <form action="/services/{{ $service->id }}/delete" method="POST">
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