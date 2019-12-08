<ul class="list-unstyled">
    @foreach ($tasks as $task)
        <li class="media mb-3">
            <!--<img class="mr-2 rounded" src="{{ Gravatar::src($task->user->email, 50) }}" alt="">-->
            <div class="media-body">
                <div>
                    <p class="mb-0">{!! nl2br(e($task->content)) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $tasks->links('pagination::bootstrap-4') }}