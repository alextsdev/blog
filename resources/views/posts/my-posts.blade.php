<x-blog-layout meta-title="{{ __('My Posts') }}" meta-description="Descripción de la página del mis Posts">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="my-4 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
          {{ __('My Posts') }}
        </h1>

       @include ('posts.show-posts')
    </div>
</x-blog-layout>
