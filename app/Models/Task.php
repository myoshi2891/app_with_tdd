<?php

namespace App\Models;

use App\Models\Project;
use App\Models\Activity;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    use RecordsActivity;

    protected $guarded = [];

    protected $touches = ['project'];

    protected $casts = [
        'completed' => 'boolean'
    ];

    protected static $recordableEvents = ['created', 'deleted'];

    public function complete()
    {
        $this->update(['completed' => true]);

        $this->recordActivity('completed_task');
    }

    public function incomplete()
    {
        $this->update(['completed' => false]);

        $this->recordActivity('incompleted_task');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function path()
    {
        return "/projects/{$this->project->id}/tasks/{$this->id}";
    }

    // public function recordActivity($description)
    // {
    //     $this->activity()->create([
    //         'description' => $description,
    //         'changes' => $this->activityChange(),
    //         'project_id' => $this->project_id,
    //     ]);
    // }
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

    // public function activity()
    // {
    //     return $this->morphMany(Activity::class, 'subject')->latest();
    // }
}