<x-layout>

    <x-slot:content>

        <div class="sticky top-0 h-36 w-full rounded-b-3xl bg-center object-cover z-10 shadow-lg bg-sky-600">

            <nav class="p-2 flex flex-grow relative justify-between z-10 items-center mx-auto h-18">

                <div class="inline relative">
                    <a href="/" class=" hover:text-white inline-flex items-center relative text-gray-50  mr-3">
                        <i class="bx bx-arrow-back text-3xl"></i>
                        <h4 class="text-xl font-bold">Kembali</h4>
                    </a>
                </div>

            </nav>

            <div class="flex items-center justify-between mt-3 px-3 z-10">
                <div class="relative w-full">
                    <h2 class="text-2xl font-bold text-center text-white">Team</h2>
                </div>
            </div>
        </div>

    </x-slot:content>

    <div class="p-3 space-y-4 z-0 h-screen">

        <div class="relative overflow-auto">
            <div class="flex text-center">
                <div class="flex gap-3 my-5">

                    <div class="w-32 h-full pb-2 flex flex-col justify-center bg-blue-200 rounded-2xl text-blue-600 shadow-lg hover:shadow-md cursor-pointer transition ease-in duration-300">
                        <a href="/team">
                            <i class='bx bx-list-ul text-2xl'></i>
                            <p class="text-sm font-semibold mt-1">Semua</p>
                        </a>
                    </div>

                    <div class="w-32 h-full pb-2 flex flex-col justify-center bg-yellow-200 rounded-2xl text-yellow-600 shadow-lg hover:shadow-md cursor-pointer transition ease-in duration-300">
                        <a href="/team">
                            <p class="text-xl font-semibold mt-1">5</p>
                            <p class="text-sm font-semibold mt-1">IT Division</p>
                        </a>
                    </div>

                    <div class="w-32 h-full pb-2 flex flex-col justify-center bg-indigo-200 rounded-2xl text-indigo-500 shadow-lg hover:shadow-md cursor-pointer transition ease-in duration-300">
                        <a href="/team">
                            <p class="text-xl font-semibold mt-1">0</p>
                            <p class="text-sm font-semibold mt-1">Fianance & Accounting</p>
                        </a>
                    </div>

                    <div class="w-32 h-full pb-2 flex flex-col justify-center bg-pink-200 rounded-2xl text-pink-500 shadow-lg hover:shadow-md cursor-pointer transition ease-in duration-300">
                        <a href="/team">
                            <p class="text-xl font-semibold mt-1">3</p>
                            <p class="text-sm font-semibold mt-1">Marketing</p>
                        </a>
                    </div>

                    <div class="w-32 h-full pb-2 flex flex-col justify-center bg-pink-200 rounded-2xl text-pink-500 shadow-lg hover:shadow-md cursor-pointer transition ease-in duration-300">
                        <a href="/team">
                            <p class="text-xl font-semibold mt-1">2</p>
                            <p class="text-sm font-semibold mt-1">HRGA</p>
                        </a>
                    </div>
                    <div class="w-32 h-full pb-2 flex flex-col justify-center bg-pink-200 rounded-2xl text-pink-500 shadow-lg hover:shadow-md cursor-pointer transition ease-in duration-300">
                        <a href="/team">
                            <p class="text-xl font-semibold mt-1">2</p>
                            <p class="text-sm font-semibold mt-1">HRGA</p>
                        </a>
                    </div>
                    <div class="w-32 h-full pb-2 flex flex-col justify-center bg-pink-200 rounded-2xl text-pink-500 shadow-lg hover:shadow-md cursor-pointer transition ease-in duration-300">
                        <a href="/team">
                            <p class="text-xl font-semibold mt-1">2</p>
                            <p class="text-sm font-semibold mt-1">HRGA</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="flex items-center justify-between z-10">
            <div class="relative w-full">
                <input type="text" class="bg-purple-white shadow rounded-2xl border-0 p-3 w-full" placeholder="Search somthing...">
                <div class="absolute top-0 right-0 p-4 pr-3 text-purple-lighter">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="divide-y divide-gray-200 bg-white rounded-2xl shadow-lg">
            <div class="flex items-start gap-4 p-4">
                <img src="/img/Profil.png" alt="profil" class="w-12 h-12 rounded-full">
                <div class="flex flex-col">
                    <strong class="text-slate-900 text-sm font-medium">Mahatma Arrayyan</strong>
                    <span class="text-slate-500 text-sm font-medium">Website Developer</span>
                </div>
            </div>

            <div class="flex items-start gap-4 p-4">
                <img src="/img/Profil.png" alt="profil" class="w-12 h-12 rounded-full">
                <div class="flex flex-col">
                    <strong class="text-slate-900 text-sm font-medium">Mahatma Arrayyan</strong>
                    <span class="text-slate-500 text-sm font-medium">Website Developer</span>
                </div>
            </div>
        </div>

    </div>

</x-layout>