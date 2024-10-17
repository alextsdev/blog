<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            Edit Post
        </h1>
    </div>
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PATCH')

        @include ('posts.form-fields')

        <br />
        <button type="submit">{{ __('Send') }}</button>
        <br />
    </form>
</x-layout>
