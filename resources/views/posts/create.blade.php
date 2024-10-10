<x-layout meta-title="Create a new Post" meta-description="Form to create a new Post">
    <h1>Create a new Post</h1>
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <label>
            Title <br />
            <input type="text" name="title">
        </label>
        <br />
        <label>
            Body <br />
            <textarea name="body"></textarea>
        </label>
        <br />
      <button type="submit">Send</button>
        <br />
    <a href="{{ route('posts.index') }}">Back</a>
    </form>
</x-layout>
