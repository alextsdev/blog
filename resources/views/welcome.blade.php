<x-blog-layout meta-title="Inicio" meta-description="Descripción de la página de Inicio">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            Welcome
        </h1>
    </div>
    <x-slot name="sidebar"> <!--x-slot:sidebar (otra forma de hacer lo mismo)-->
        <p>Home Sidebar</p>
    </x-slot>
</x-blog-layout>
