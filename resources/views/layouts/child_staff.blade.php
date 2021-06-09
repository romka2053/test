<li>{{'id= '.$child_staff->id.'  ФИО: '. $child_staff->name.' Дольжность: '.$child_staff->post }}</li>
@if ($child_staff->chief)
    <ul>
        @foreach ($child_staff->chief as $childstaff)
            @include('layouts\child_staff', ['child_staff' => $childstaff])
        @endforeach
    </ul>
@endif
