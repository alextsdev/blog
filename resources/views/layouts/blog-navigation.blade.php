<header class="bg-white px-6 shadow dark:bg-slate-900">
    <div
        class="mx-auto flex h-16 max-w-6xl items-center justify-between"
    >
        <button
            id="toggle-mobile-menu"
            class="-ml-1 rounded p-1 text-slate-500 transition-colors hover:bg-sky-500 hover:text-slate-100 focus:ring-2 focus:ring-slate-200 dark:text-slate-400 dark:hover:text-slate-100 md:hidden"
        >
            <svg
                id="open-menu-icon"
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                ></path>
            </svg>
            <svg
                id="close-menu-icon"
                class="hidden h-6 w-6"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                ></path>
            </svg>
        </button>
        <a
            class="hidden text-sky-500 duration-200 hover:rotate-6 md:block"
            href="/"
        >
            <svg
                class="h-8 w-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                <path
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                ></path>
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                ></path>
            </svg>
        </a>
        <div class="-mr-4 flex items-center">
            <a
                class="text-sky-500 duration-200 hover:rotate-6 md:hidden"
                href="/"
            >
                <svg
                    class="h-8 w-8"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                    ></path>
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                    ></path>
                </svg>
            </a>


            @auth
            <div class="ml-8 hidden space-x-8 md:flex">
                <a class="px-3 py-2 {{ request()->routeIs('home') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                   href="/"
                >
                    Home
                </a>
                <a
                    class="px-3 py-2 {{ request()->routeIs('posts.*') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('posts.index') }}"
                >
                    Blog
                </a>
                <a
                    class="px-3 py-2 {{ request()->routeIs('about') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('about') }}"
                >
                    About
                </a>
                <a
                    class="px-3 py-2 {{ request()->routeIs('contact') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('contact') }}"
                >
                    Contact
                </a>

                <a
                    class="px-3 py-2 {{ request()->routeIs('posts.*') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('posts.myPosts') }}"
                >
                    {{ __('My Posts') }}
                </a>
            </div>
            @endauth




            @guest
            <div class="ml-8 hidden space-x-8 md:flex">
                <a class="px-3 py-2 {{ request()->routeIs('home') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                   href="/"
                >
                    Home
                </a>
                <a
                    class="px-3 py-2 {{ request()->routeIs('posts.*') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('posts.index') }}"
                >
                    Blog
                </a>
                <a
                    class="px-3 py-2 {{ request()->routeIs('about') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('about') }}"
                >
                    About
                </a>
                <a
                    class="px-3 py-2 {{ request()->routeIs('contact') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('contact') }}"
                >
                    Contact
                </a>
            </div>
            @endguest
        </div>



        <div class="flex">
            <div class="relative pt-1">
                <button
                    id="toggle-theme-menu"
                    class="rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1 focus:ring-offset-transparent dark:text-slate-400 dark:hover:text-sky-500 dark:focus:ring-slate-700"
                >
                    <svg
                        id="light-icon"
                        class="hidden h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                        ></path>
                    </svg>
                    <svg
                        id="dark-icon"
                        class="hidden h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"
                        ></path>
                    </svg>
                    <svg
                        id="system-icon"
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"
                        ></path>
                    </svg>
                </button>
                <div
                    id="theme-menu"
                    class="absolute right-0 z-20 hidden w-28 overflow-hidden rounded-md bg-white/90 shadow-lg dark:bg-slate-800/90"
                >
                    <button
                        data-theme-option="light"
                        class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900"
                    >
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                            ></path>
                        </svg>
                        <span>Light</span>
                    </button>
                    <button
                        data-theme-option="dark"
                        class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900"
                    >
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"
                            ></path>
                        </svg>
                        <span>Dark</span>
                    </button>
                    <button
                        data-theme-option="system"
                        class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900"
                    >
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"
                            ></path>
                        </svg>
                        <span>System</span>
                    </button>
                </div>
            </div>

            <!-- boton -->
            @auth
                <div class="p-1 hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button

                                class="ml-4 rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1"
                            >
                                <img
                                    class="h-6 w-6 rounded-full "
                                    src="https://ui-avatars.com/api?name={{ Auth::user()->name }} + {{ Auth::user()->last_name }}"
                                    alt="{{ Auth::user()->name }} + {{ Auth::user()->last_name }}"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"
                                ></path>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

            @guest
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="ml-4 rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#434343"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg>
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"
                                ></path>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('login')">
                                {{ __('Login') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('register')">
                                {{ __('Register') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endguest

        </div>
    </div>
    <div
        id="mobile-menu"
        class="hidden space-y-1 border-t pb-3 pt-2 dark:border-slate-500"
    >
        <a
            href="{{ route('home') }}"
            class="block rounded-md bg-sky-500 px-3 py-2 {{ request()->routeIs('home') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
        >
            Home
        </a>
        <a
            href="{{ route('posts.index') }}"
            class="block rounded-md px-3 py-2 {{ request()->routeIs('posts.*') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
        >
            Blog
        </a>
        <a
            href="{{ route('about') }}"
            class="block rounded-md px-3 py-2 {{ request()->routeIs('about') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
        >
            About
        </a>
        <a
            href="{{ route('contact') }}"
            class="block rounded-md px-3 py-2 {{ request()->routeIs('contact') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
        >
            Contact
        </a>
    </div>
</header>
