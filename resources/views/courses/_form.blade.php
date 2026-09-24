{{-- Formulaire réutilisable pour créer et modifier un cours --}}

<div class="form-group">
    <label for="title">Titre du cours *</label>
    <input 
        type="text" 
        id="title" 
        name="title" 
        value="{{ old('title', $course->title ?? '') }}"
        placeholder="Ex: Introduction à Laravel"
    >
    @error('title')
        <span class="error">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="description">Description *</label>
    <textarea 
        id="description" 
        name="description" 
        placeholder="Décrivez le contenu du cours..."
    >{{ old('description', $course->description ?? '') }}</textarea>
    @error('description')
        <span class="error">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="teacher">Professeur *</label>
    <input 
        type="text" 
        id="teacher" 
        name="teacher" 
        value="{{ old('teacher', $course->teacher ?? '') }}"
        placeholder="Ex: Jean Dupont"
    >
    @error('teacher')
        <span class="error">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="duration">Durée (en heures) *</label>
    <input 
        type="number" 
        id="duration" 
        name="duration" 
        value="{{ old('duration', $course->duration ?? '') }}"
        min="1"
        placeholder="Ex: 40"
    >
    @error('duration')
        <span class="error">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="price">Prix (€) *</label>
    <input 
        type="number" 
        id="price" 
        name="price" 
        value="{{ old('price', $course->price ?? '') }}"
        step="0.01"
        min="0"
        placeholder="Ex: 299.99"
    >
    @error('price')
        <span class="error">{{ $message }}</span>
    @enderror
</div>

<div class="actions">
    <button type="submit" class="btn btn-success">
        {{ $submitButtonText ?? 'Enregistrer' }}
    </button>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Annuler</a>
</div>
