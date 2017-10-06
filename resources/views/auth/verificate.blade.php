<p>Hello {{ $user->name }}</p>

<p>You can verify Your account <a href="{{ route('verification', ['user_id' => $user->id]) }}">here</a></p>