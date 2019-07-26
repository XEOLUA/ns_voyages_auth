
<li>{{ $project['name'] }}</li>
@if (count($project['children']) > 0)
    <ul>
        @foreach($project['children'] as $project)
            @include('partials.project', $project)
        @endforeach
    </ul>
@endif
