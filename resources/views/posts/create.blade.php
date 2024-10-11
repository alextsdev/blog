<x-layout meta-title="Create a new Post" meta-description="Form to create a new Post">
    <h1>{{ __('Create a new Post') }}</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>
            {{__('Title')}} <br />
            <input type="text" name="title" value="{{ old('title') }}">
            <br>
            @error('title')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <label>
            {{__('Body')}} <br />
            <textarea name="body">{{ old('body') }}</textarea>
            <br>
            @error('body')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
      <button type="submit">{{ __('Send') }}</button>
        <br />
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
    </form>
</x-layout>
