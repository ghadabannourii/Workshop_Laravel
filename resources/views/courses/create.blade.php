@extends('layouts.app')

@section('title', 'Créer un cours')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>➕ Créer un nouveau cours</h1>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            ← Retour à la liste
        </a>
    </div>

    <div class="card" style="background: white; border: 1px solid #ecf0f1;">
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf

            @include('courses._form', ['submitButtonText' => 'Créer le cours'])
        </form>
    </div>

    <div style="margin-top: 20px; padding: 15px; background: #ecf0f1; border-radius: 5px;">
        <p style="font-size: 12px; color: #7f8c8d;">
            <strong>Note :</strong> Tous les champs marqués d'un astérisque (*) sont obligatoires.
        </p>
    </div>
@endsection
