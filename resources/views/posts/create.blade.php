<x-layout meta-title="Create a new Post" meta-description="Form to create a new Post">
    <h1>Create a new Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>
            Title <br />
            <input type="text" name="title" value="{{ old('title') }}">
            <br>
            @error('title')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <label>
            Body <br />
            <textarea name="body">{{ old('body') }}</textarea>
            <br>
            @error('body')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
      <button type="submit">Send</button>
        <br />
    <a href="{{ route('posts.index') }}">Back</a>
    </form>
</x-layout>
