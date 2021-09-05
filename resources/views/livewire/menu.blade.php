@if($user)
@if($user->is_admin == true)
<x-teacher-menu />
@else()
<x-student-menu />
@endif
<x-app-menu />
@else()
@if (!Request::is('login'))
<x-back-menu />
@endif
@endif()