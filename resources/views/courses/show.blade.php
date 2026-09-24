@extends('layouts.app')

@section('title', 'Détails du cours')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>📖 Détails du cours</h1>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            ← Retour à la liste
        </a>
    </div>

    <div class="card" style="background: white; border: 1px solid #ecf0f1;">
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 2px solid #3498db;">
            <h2 style="color: #3498db; font-size: 28px; margin-bottom: 10px;">
                {{ $course->title }}
            </h2>
            <p style="color: #95a5a6; font-size: 14px;">
                Ajouté le {{ $course->created_at->format('d/m/Y à H:i') }}
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
            <div>
                <p style="color: #7f8c8d; font-size: 12px; text-transform: uppercase; margin-bottom: 5px;">
                    Professeur
                </p>
                <p style="font-size: 18px; font-weight: 600; color: #2c3e50;">
                    👨‍🏫 {{ $course->teacher }}
                </p>
            </div>

            <div>
                <p style="color: #7f8c8d; font-size: 12px; text-transform: uppercase; margin-bottom: 5px;">
                    Durée
                </p>
                <p style="font-size: 18px; font-weight: 600; color: #2c3e50;">
                    ⏱️ {{ $course->duration }} heures
                </p>
            </div>

            <div>
                <p style="color: #7f8c8d; font-size: 12px; text-transform: uppercase; margin-bottom: 5px;">
                    Prix
                </p>
                <p style="font-size: 18px; font-weight: 600; color: #27ae60;">
                    💰 {{ number_format($course->price, 2, ',', ' ') }} €
                </p>
            </div>
        </div>

        <div style="margin-bottom: 20px;">
            <p style="color: #7f8c8d; font-size: 12px; text-transform: uppercase; margin-bottom: 10px;">
                Description
            </p>
            <p style="line-height: 1.8; color: #2c3e50; text-align: justify;">
                {{ $course->description }}
            </p>
        </div>

        @if($course->updated_at != $course->created_at)
            <div style="padding-top: 20px; border-top: 1px solid #ecf0f1;">
                <p style="color: #95a5a6; font-size: 12px;">
                    Dernière modification : {{ $course->updated_at->format('d/m/Y à H:i') }}
                </p>
            </div>
        @endif
    </div>

    <div class="actions" style="margin-top: 20px;">
        <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">
            ✏️ Modifier ce cours
        </a>
        <form action="{{ route('courses.destroy', $course) }}" method="POST" 
              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce cours ?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                🗑️ Supprimer ce cours
            </button>
        </form>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            ← Retour à la liste
        </a>
    </div>
@endsection
