<p>index</p>

@foreach ($projects as $project)
<li>
    <a href="/projects/{{$project->id}}">
        {{$project->title}}
    </a>
    <a href="/projects/{{$project->id}}/edit">
        <button>edit</button>
    </a>
</li>
@endforeach
<a href="/projects/create"><button>Create new project</button></a>
<?= dd($projects)?>
