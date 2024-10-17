<x-layout meta-title="Create a new Post" meta-description="Form to create a new Post">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            Create a new Post
        </h1>
    </div>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        @include ('posts.form-fields')

        <br />
      <button type="submit">{{ __('Send') }}</button>
        <br />
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
    </form>
</x-layout>
