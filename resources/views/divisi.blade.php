<x-layout>
    <x-slot:content>
        <div class="sticky top-0 h-14 flex flex-row items-center w-full bg-center object-cover z-10 shadow-lg bg-sky-600">

            <nav class="flex flex-grow p-2 relative justify-between z-10 items-center mx-auto">

                <div class="flex">
                    <a href="/" class=" hover:text-white inline-flex items-center relative text-gray-50 mr-3">
                        <i class="bx bx-arrow-back text-3xl"></i>
                    </a>

                    <h2 class="text-2xl font-bold text-center text-white">Team</h2>
                </div>

            </nav>

            <div class="flex items-center justify-between mt-3 px-3 z-10">
                <div class="relative w-full">
                </div>
            </div>

        </div>
    </x-slot:content>

    <div class="p-3 space-y-4 z-0 h-screen">

        <div class="relative overflow-auto">
            <div class="flex text-center">
                <div class="flex gap-3">

                    <div class="w-32 h-full py-3 flex flex-col justify-center bg-blue-200 rounded-2xl text-blue-600 shadow-lg hover:shadow-md cursor-pointer transition ease-in duration-300">
                        <a href="{{ route('divisi.index') }}">
                            <i class='bx bx-list-ul text-2xl'></i>
                            <p class="text-sm font-semibold mt-1">Semua</p>
                        </a>
                    </div>
					
					@foreach ($divisi as $div)
					<div class="w-32 h-full pb-2 flex flex-col justify-center bg-blue-200 rounded-2xl text-blue-600 shadow-lg hover:shadow-md cursor-pointer transition ease-in duration-300">
                        <a href="{{ route('divisi.index') . '/' . $div->id  }}">
                            <i class='bx bx-list-ul text-2xl'></i>
                            <p class="text-sm font-semibold mt-1">{{ $div->nama }}</p>
                        </a>
                    </div>

					@endforeach

                </div>
            </div>
        </div>

        <div class="flex items-center justify-between z-10">
            <div class="relative w-full">
                <input type="text" class="bg-purple-white shadow rounded-xl border-0 p-3 w-full"
                        placeholder="Search somthing...">
                <div class="absolute top-0 right-0 p-4 pr-3 text-purple-lighter">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="divide-y divide-gray-200 bg-white rounded-lg shadow-lg">
			@foreach ($karyawan as $kar)
			<div class="flex items-start gap-4 p-4">
				<img src="/img/Profil.png" alt="profil" class="w-12 h-12 rounded-full">
				<div class="flex flex-col">
					<strong class="text-slate-900 text-sm font-medium">{{ $kar->user->name }}</strong>
					<span class="text-slate-500 text-sm font-medium">{{ $kar->divisi->nama ?? 'Lain' }}</span>
				</div>
			</div>
			@endforeach
        </div>
		{{ $karyawan->links() }}

    </div>

</x-layout>