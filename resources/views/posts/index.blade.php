<x-blog-layout meta-title="Blog" meta-description="Descripción de la página del Blog">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="my-4 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            Blog
        </h1>

        @include ('posts.show-posts')

    </div>
</x-blog-layout>
