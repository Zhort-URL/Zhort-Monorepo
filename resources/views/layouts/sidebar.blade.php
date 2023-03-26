<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div>
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
        <!--
          Off-canvas menu backdrop, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-900/80"></div>

        <div class="fixed inset-0 flex">
            <!--
              Off-canvas menu, show/hide based on off-canvas menu state.

              Entering: "transition ease-in-out duration-300 transform"
                From: "-translate-x-full"
                To: "translate-x-0"
              Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "-translate-x-full"
            -->
            <div class="relative mr-16 flex w-full max-w-xs flex-1">
                <!--
                  Close button, show/hide based on off-canvas menu state.

                  Entering: "ease-in-out duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "ease-in-out duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="absolute top-0 left-full flex w-16 justify-center pt-5">
                    <button type="button" class="-m-2.5 p-2.5">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex grow flex-col gap-y-5 overflow-y-auto dark:bg-zhort-dark px-6 pb-2">
                    <div class="flex items-center">
                        <div class="flex h-12 w-12 mt-4 rounded-lg shrink-0 items-center">
                            <x-application-logo />
                        </div>
                        <h3 class="ml-4 font-karla font-bold text-3xl mt-3 dark:text-white">{{ config('app.name', 'Zhort') }}</h3>
                    </div>
                    <nav class="flex flex-1 flex-col">
                        <ul role="list" class="flex flex-1 flex-col gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <!-- Current: "bg-indigo-700 text-white", Default: "text-indigo-200 hover:text-white hover:bg-indigo-700" -->
                                        <a href="#" class="bg-indigo-700 dark:hover:bg-zhort-darker hover:text-zhort-primary text-zhort-gray group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                            <svg class="h-6 w-6 shrink-0 text-zhort-gray group-hover:text-zhort-primary" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                            </svg>
                                            Dashboard
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-indigo-200 dark:hover:bg-zhort-darker dark:text-zhort-gray hover:text-zhort-primary hover:bg-indigo-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                            <svg class="h-6 w-6 shrink-0 group-hover:text-zhort-primary text-zhort-gray" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>
                                            </svg>
                                            Your Zhorts
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex grow flex-col gap-y-5 overflow-y-auto dark:bg-zhort-dark border-r border-zhort-darkish px-6">
            <div class="flex items-center">
                <div class="flex h-12 w-12 mt-4 rounded-lg shrink-0 items-center">
                    <x-application-logo />
                </div>
                <h3 class="ml-4 font-karla font-bold text-3xl mt-3 dark:text-white">{{ config('app.name', 'Zhort') }}</h3>
            </div>
            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            <li>
                                <!-- Current: "bg-indigo-700 text-white", Default: "text-indigo-200 hover:text-white hover:bg-indigo-700" -->
                                <a href="#" class="transition fade-in-out duration-200 hover:bg-zhort-darker hover:text-zhort-primary text-zhort-gray group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                    <svg class="h-6 w-6 shrink-0 group-hover:text-zhort-primary text-zhort-gray" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>

                            <li>
                                <a href="#" class="transition fade-in-out duration-200 hover:bg-zhort-darker hover:text-zhort-primary text-zhort-gray group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                    <svg class="h-6 w-6 shrink-0 group-hover:text-zhort-primary text-zhort-gray" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>
                                    </svg>
                                    Your Zhorts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="-mx-6 mt-auto">
                        <a href="#" class="flex items-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-white border-t border-zhort-darkish bg-zhort-darker/50 hover:bg-zhort-darker transition transition-colors duration-200">
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <span class="sr-only">Your profile</span>
                            <div class="flex flex-col">
                                <span aria-hidden="true">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                                <span class="text-xs text-zhort-grayer -mt-1">USER ROLE</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-indigo-600 py-4 px-4 shadow-sm sm:px-6 lg:hidden">
        <button type="button" class="-m-2.5 p-2.5 text-indigo-200 lg:hidden">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        <div class="flex-1 text-sm font-semibold leading-6 text-white">Dashboard</div>
        <a href="#">
            <span class="sr-only">Your profile</span>
            <img class="h-8 w-8 rounded-full bg-indigo-700" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </a>
    </div>

    <main class="py-10 lg:pl-72">
        <div class="px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</div>
