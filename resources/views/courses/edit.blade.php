@extends('layouts.app')

@section('title', 'Modifier un cours')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>✏️ Modifier le cours</h1>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            ← Retour à la liste
        </a>
    </div>

    <div style="margin-bottom: 20px; padding: 15px; background: #fff3cd; border: 1px solid #ffc107; border-radius: 5px;">
        <p style="color: #856404; font-weight: 500;">
            ℹ️ Vous êtes en train de modifier : <strong>{{ $course->title }}</strong>
        </p>
    </div>

    <div class="card" style="background: white; border: 1px solid #ecf0f1;">
        <form action="{{ route('courses.update', $course) }}" method="POST">
            @csrf
            @method('PUT')

            @include('courses._form', ['submitButtonText' => 'Mettre à jour le cours'])
        </form>
    </div>

    <div style="margin-top: 20px; padding: 15px; background: #ecf0f1; border-radius: 5px;">
        <p style="font-size: 12px; color: #7f8c8d;">
            <strong>Note :</strong> Tous les champs marqués d'un astérisque (*) sont obligatoires.
            <br>
            Cours créé le {{ $course->created_at->format('d/m/Y à H:i') }}
            @if($course->updated_at != $course->created_at)
                • Dernière modification le {{ $course->updated_at->format('d/m/Y à H:i') }}
            @endif
        </p>
    </div>
@endsection
