@extends('layouts.app')

@section('content')
    @include('partials.backnav')
    <main id="main">
        <a href="/facts/create">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icone</th>
                    <th scope="col">Number</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facts as $fact)
                    <tr>
                        <th scope="row">{{ $fact->id }}</th>
                        <td>{{ $fact->Icone }}</td>
                        <td>{{ $fact->number }}</td>
                        <td>{{ $fact->description }}</td>
                        <td>
                            <a href="/facts/{{ $fact->id }}/edit">Edit</a>
                            <form action="/facts/{{ $fact->id }}/delete" method="POST">
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