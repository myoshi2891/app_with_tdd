<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        request()->validate(['body' => 'required']);

        $project->addTask(request('body'));

        return redirect($project->path());
    }
}