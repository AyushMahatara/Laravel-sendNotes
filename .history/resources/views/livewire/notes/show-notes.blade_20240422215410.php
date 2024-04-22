<div>
    {{-- Do your work, then step back. --}}
    @foreach ($users as $user)
    <h3>{{ dd($user->name) }}</h3>

    @endforeach
</div>