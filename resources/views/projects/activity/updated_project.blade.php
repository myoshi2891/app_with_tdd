@if (count($activity->changes['after']) == 1)
    {{ $activity->user->name }} uypdated the {{ key($activity->changes['after']) }}
@else
    {{ $activity->user->name }} updated the project
@endif
