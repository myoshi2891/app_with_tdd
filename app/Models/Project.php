<?php

namespace App\Models;

use App\Models\Task;
use App\Models\User;
use App\Models\Activity;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use RecordsActivity;

    protected $guarded = [];

    public function path()
    {
        return "/projects/{$this->id}";
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($body)
    {
        return $this->tasks()->create(compact('body'));
    }

    // public function recordActivity($description)
    // {

    //     $this->activity()->create([
    //         'description' => $description,
    //         'changes' => $this->activityChanges(),
    //         'project_id' => class_basename($this) === 'Project' ? $this->id : $this->project_id
    //     ]);
    // }

    // protected function activityChanges()
    // {
    //     if ($this->wasChanged()) {
    //         return [
    //             'before' => Arr::except(array_diff($this->old, $this->getAttributes()), 'updated_at'),
    //             'after' => Arr::except($this->getChanges(), 'updated_at')
    //         ];
    //     }
    // }

    public function activity()
    {
        return $this->hasMany(Activity::class)->latest();
    }
}
