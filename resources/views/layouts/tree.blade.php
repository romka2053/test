
<ul >
    @foreach ($chief as $a)

        <li>{{$a->name }} </li>
        <ul>
            @foreach ($a->childrenstaff as $childstaff)

                @include('layouts\child_staff', ['child_staff' => $childstaff])
            @endforeach
        </ul>
    @endforeach
</ul>

