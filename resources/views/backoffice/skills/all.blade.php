@extends('layouts.app')

@section('content')
    @include('partials.backnav')
    <main id="main">
        <a href="/skills/create">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Language</th>
                    <th scope="col">Level</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                    <tr>
                        <th scope="row">{{ $skill->id }}</th>
                        <td>{{ $skill->language }}</td>
                        <td>{{ $skill->level }}</td>
                        <td>
                            <a href="/skills/{{ $skill->id }}/edit">Edit</a>
                            <form action="/skills/{{ $skill->id }}/delete" method="POST">
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