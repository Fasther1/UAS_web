<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto mt-5">
                        <h2 class="mb-5 text-3xl font-extrabold text-gray-800">Edit Data Mahasiswa</h2>

                        <x-auth-session-status class="mb-4" :status="session('success')" />

                        <form action="{{ route('mahasiswa-update', $mahasiswa->id) }}" method="POST" class="space-y-4">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama" class="block text-sm font-medium text-gray-700">NAMA</label>
                                <input type="text" id="nama" name="nama" class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('nama', $mahasiswa->nama) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="npm" class="block text-sm font-medium text-gray-700">NPM</label>
                                <input type="text" id="npm" name="npm" class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('npm', $mahasiswa->npm) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="prodi" class="block text-sm font-medium text-gray-700">Prodi</label>
                                <input id="prodi" name="prodi" rows="3" class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('prodi', $mahasiswa->prodi) }}">
                            </div>

                            <button type="update" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mt-4">Update</button>

                        </form>
                    </div>

                    @vite('resources/js/app.js')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>