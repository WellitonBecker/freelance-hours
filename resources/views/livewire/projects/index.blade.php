<div>
    
    @foreach ($this->projects as $project)

    <li>

        <a href="{{ route('projects.show', $project) }}">
            {{ $project->title }}
        </a>

    </li>
        
    @endforeach
</div>
