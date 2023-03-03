<h1>Hello</h1>

<a href="{{ route('upload.create') }}"> Add </a> <br/>

@foreach($profiles as $profile)
    <span>{{ $profile->avatar }}</span>
    <span>{{ $profile->name }}</span>
    <br/>
@endforeach
