<aside class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-primary-darker dark:bg-darker md:block">
    <div class="flex flex-col h-full">
        <!-- Sidebar links -->
        <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">



            <!-- Artikel links -->
            <div x-data="{ isActive: false, open: false }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="{{ route('livewire-dashboard') }}" class="
                flex
                items-center
                p-2
                text-gray-500
                transition-colors
                rounded-md
                dark:text-light
                hover:bg-primary-100
                dark:hover:bg-primary
                {{ request()->is('/') ? 'bg-primary-100 dark:bg-primary' : '' }}
                ">
                    <span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </span>
                    <span class="ml-2 text-sm"> Dashboard </span>
                </a>
            </div>

            <div x-data="{ isActive: false, open: false }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="{{ route('livewire-blog') }}" class="
                flex
                items-center
                p-2
                text-gray-500
                transition-colors
                rounded-md
                dark:text-light
                hover:bg-primary-100
                dark:hover:bg-primary
                {{ request()->is('blog*') ? 'bg-primary-100 dark:bg-primary' : '' }}
                ">
                    <span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </span>
                    <span class="ml-2 text-sm"> Artikel </span>
                </a>
            </div>
            <div x-data="{ isActive: false, open: false }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="{{ route('livewire-banner') }}" class="
                flex
                items-center
                p-2
                text-gray-500
                transition-colors
                rounded-md
                dark:text-light
                hover:bg-primary-100
                dark:hover:bg-primary
                {{ request()->is('banner*') ? 'bg-primary-100 dark:bg-primary' : '' }}
                ">
                    <span aria-hidden="true">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                        </svg>
                    </span>
                    <span class="ml-2 text-sm"> Banner </span>
                </a>
            </div>

            <!-- Authentication links -->
            <div x-data="{ isActive: false, open: false}">
                <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#" @click="$event.preventDefault(); open = !open" class="
                flex
                items-center
                p-2
                text-gray-500
                transition-colors
                rounded-md
                dark:text-light
                hover:bg-primary-100
                dark:hover:bg-primary
                " :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button" aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span aria-hidden="true">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span class="ml-2 text-sm"> Authentication </span>
                    <span aria-hidden="true" class="ml-auto">
                        <!-- active class 'rotate-180' -->
                        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </a>
                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                    <a href="auth/register.html" role="menuitem" class="
                    block
                    p-2
                    text-sm text-gray-400
                    transition-colors
                    duration-200
                    rounded-md
                    dark:hover:text-light
                    hover:text-gray-700
                ">
                        Register
                    </a>
                    <a href="auth/login.html" role="menuitem" class="
                    block
                    p-2
                    text-sm text-gray-400
                    transition-colors
                    duration-200
                    rounded-md
                    dark:hover:text-light
                    hover:text-gray-700
                ">
                        Login
                    </a>
                    <a href="auth/forgot-password.html" role="menuitem" class="
                    block
                    p-2
                    text-sm text-gray-400
                    transition-colors
                    duration-200
                    rounded-md
                    dark:hover:text-light
                    hover:text-gray-700
                ">
                        Forgot Password
                    </a>
                    <a href="auth/reset-password.html" role="menuitem" class="
                    block
                    p-2
                    text-sm text-gray-400
                    transition-colors
                    duration-200
                    rounded-md
                    dark:hover:text-light
                    hover:text-gray-700
                ">
                        Reset Password
                    </a>
                </div>
            </div>


        </nav>

        <!-- Sidebar footer -->
        <div class="flex-shrink-0 px-2 py-4 space-y-2">
            <button @click="openSettingsPanel" type="button" class="
                flex
                items-center
                justify-center
                w-full
                px-4
                py-2
                text-sm text-white
                rounded-md
                bg-primary
                hover:bg-primary-dark
                focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white
                dark:focus:ring-offset-dark
            ">
                <span aria-hidden="true">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </span>
                <span>Customize</span>
            </button>
        </div>
    </div>
</aside>
