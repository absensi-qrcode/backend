<x-layout>
    <x-slot:content>
        <div class="flex flex-col justify-center sticky top-0 h-36 w-full rounded-b-3xl bg-center object-cover z-10 shadow-lg bg-sky-600">

            <nav class="flex px-10 relative z-10 justify-between items-center">

                <div class="inline-flex flex-col">
                    <h3 class="text-white text-3xl font-semibold leading-tight truncate">Halo, Arrayyan👋</h3>

                    <div class="flex justify-between items-center">
                        <div class="flex flex-col">
                            <h2 class="text-lg flex items-center text-gray-100 font-normal">
                                Apa kabar hari ini?
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="flex-initial">
                    <a href="/profile">        
                        <div class="flex justify-end items-center relative">
                            <div class="inline relative">
                                <div class="block flex-grow-0 flex-shrink-0">
                                    <img class="rounded-full w-16 h-16 border-2 border-white shadow" src="/img/Profil.png">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </nav>

        </div>
    </x-slot:content>

    <div class="p-3 space-y-4 z-0 h-screen">

        <div class="grid grid-cols-2 gap-3 text-gray-500">

            <a href="/kehadiran" class="flex items-center shadow-lg justify-around w-full h-20 bg-green-200 rounded-2xl text-green-600 hover:shadow-xl cursor-pointer mb-2 p-1 transition ease-in duration-300">
                <i class='bx bx-timer text-5xl'></i>
                <p class="text-lg font-bold mt-1">Kehadiran</p>
            </a>

            <div class="flex items-center shadow-lg justify-around w-full h-20 bg-yellow-200 rounded-2xl text-yellow-600 hover:shadow-xl cursor-pointer mb-2 p-1 transition ease-in duration-300">
                <i class='bx bx-door-open text-5xl'></i>
                <p class="text-lg font-bold mt-1">Izin</p>
            </div>

            <div class="flex items-center shadow-lg justify-around w-full h-20 bg-indigo-200 rounded-2xl text-indigo-500 hover:shadow-xl cursor-pointer mb-2 p-1 transition ease-in duration-300">
                <i class='bx bx-wallet text-5xl'></i>
                <p class="text-lg font-bold mt-1">Gaji</p>
            </div>

            <a href="/divisi" class="flex items-center shadow-lg justify-around w-full h-20 bg-pink-200 rounded-2xl text-pink-500 hover:shadow-xl cursor-pointer mb-2 p-1 transition ease-in duration-300">
                <i class='bx bx-group text-5xl'></i>
                <p class="text-lg font-bold mt-1">Divisi</p>
            </a>

        </div>

        <h4 class="font-semibold">Suggested By</h4>

        <div class="grid grid-cols-1 gap-7">

            <div class="flex bg-white shadow-lg rounded-2xl p-2">
                <img src="https://images.unsplash.com/photo-1439130490301-25e322d88054?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80"
                        alt="Just a flower" class=" w-16  object-cover  h-16 rounded-xl">
                <div class="flex flex-col justify-center w-full px-2 py-1">
                    <div class="flex justify-between items-center ">
                        <div class="flex flex-col">
                            <h2 class="text-sm font-medium">Massive Dynamic</h2>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-500 hover:text-blue-400 cursor-pointer" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                        </svg>
                    </div>
                    <div class="flex pt-2  text-sm text-gray-400">
                        <div class="flex items-center mr-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <p class="font-normal">4.5</p>
                        </div>
                        <div class="flex items-center font-medium text-gray-900 ">
                            $1800
                            <span class="text-gray-400 text-sm font-normal"> /wk</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex bg-white shadow-lg rounded-2xl p-2">
                <img src="https://images.unsplash.com/photo-1439130490301-25e322d88054?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80"
                        alt="Just a flower" class=" w-16  object-cover  h-16 rounded-xl">
                <div class="flex flex-col justify-center w-full px-2 py-1">
                    <div class="flex justify-between items-center ">
                        <div class="flex flex-col">
                            <h2 class="text-sm font-medium">Massive Dynamic</h2>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-500 hover:text-blue-400 cursor-pointer" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                        </svg>
                    </div>
                    <div class="flex pt-2  text-sm text-gray-400">
                        <div class="flex items-center mr-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <p class="font-normal">4.5</p>
                        </div>
                        <div class="flex items-center font-medium text-gray-900 ">
                            $1800
                            <span class="text-gray-400 text-sm font-normal"> /wk</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-layout>