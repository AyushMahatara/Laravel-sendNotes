<div>
    {{-- Do your work, then step back. --}}
    @foreach ($users as $user)
    <h3>{{ $user->email }}</h3>

    @endforeach
</div>