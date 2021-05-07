@extends('layouts.app')

@section('content')
    @include('partials.backnav')
    <main id="main">
        <a href="/portofolios/create">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Categorie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portofolios as $portofolio)
                    <tr>
                        <th scope="row">{{ $portofolio->id }}</th>
                        <td>{{ $portofolio->lastname }}</td>
                        <td>{{ $portofolio->firstname }}</td>
                        <td>
                            <a href="/portofolios/{{ $portofolio->id }}/edit">Edit</a>
                            <form action="/portofolios/{{ $portofolio->id }}/delete" method="POST">
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