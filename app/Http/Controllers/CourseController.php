<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    /**
     * Affiche la liste de tous les cours.
     */
    public function index()
    {
        $courses = Course::latest()->get();
        return view('courses.index', compact('courses'));
    }

    /**
     * Affiche le formulaire de création d'un nouveau cours.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Enregistre un nouveau cours dans la base de données.
     */
    public function store(StoreCourseRequest $request)
    {
        Course::create($request->validated());

        return redirect()
            ->route('courses.index')
            ->with('success', 'Cours créé avec succès.');
    }

    /**
     * Affiche les détails d'un cours spécifique.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Affiche le formulaire de modification d'un cours.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Met à jour un cours existant dans la base de données.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());

        return redirect()
            ->route('courses.index')
            ->with('success', 'Cours modifié avec succès.');
    }

    /**
     * Supprime un cours de la base de données.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Cours supprimé avec succès.');
    }
}
