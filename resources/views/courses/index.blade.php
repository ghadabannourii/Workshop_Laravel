@extends('layouts.app')

@section('title', 'Liste des cours')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>📋 Liste des cours</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            + Ajouter un cours
        </a>
    </div>

    @if($courses->isEmpty())
        <div class="card">
            <p style="text-align: center; padding: 40px;">
                Aucun cours disponible pour le moment.
                <br><br>
                <a href="{{ route('courses.create') }}" class="btn btn-primary">
                    Créer le premier cours
                </a>
            </p>
        </div>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Professeur</th>
                    <th>Durée</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->teacher }}</td>
                        <td>{{ $course->duration }} heures</td>
                        <td>{{ number_format($course->price, 2, ',', ' ') }} €</td>
                        <td>
                            <div class="actions">
                                <a href="{{ route('courses.show', $course) }}" class="btn btn-primary btn-sm">
                                    Voir
                                </a>
                                <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning btn-sm">
                                    Modifier
                                </a>
                                <form action="{{ route('courses.destroy', $course) }}" method="POST" 
                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce cours ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="margin-top: 20px; color: #7f8c8d;">
            <p>Total : {{ $courses->count() }} cours</p>
        </div>
    @endif
@endsection
