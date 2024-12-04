<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto mt-5">
                        <h2 class="mb-5 text-3xl font-extrabold text-gray-800">Daftar Mahasiswa</h2>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('success')" />

                        <!-- Tambah Mahasiswa Button -->
                        <a href="{{ route('mahasiswa-create') }}">
                            <button class="px-4 py-2 mb-4 text-black bg-green-500 border border-black-500 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                                Tambah Mahasiswa
                            </button>
                        </a>

                        <!-- Table -->
                        <table class="w-full mt-4 table-auto border-collapse border border-gray-500">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b text-left w-1/4">NAMA</th>
            <th class="px-4 py-2 border-b text-left w-1/4">NPM</th>
            <th class="px-4 py-2 border-b text-left w-1/4">PRODI</th>
            <th class="px-4 py-2 border-b text-left w-1/4">MENU</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $mahasiswa)
        <tr>
            <td class="px-4 py-2 border-b break-words">{{ $mahasiswa->nama }}</td>
            <td class="px-4 py-2 border-b">{{ $mahasiswa->npm }}</td>
            <td class="px-4 py-2 border-b">{{ $mahasiswa->prodi }}</td>
            <td class="px-4 py-2 border-b flex space-x-2">
                <!-- Tombol Edit -->
                <a href="{{ route('mahasiswa-edit', $mahasiswa->id) }}" 
                   class="px-2 py-1 text-sm font-semibold text-black bg-blue-500 rounded-lg shadow hover:bg-blue-600 focus:ring focus:ring-blue-300">
                   Edit
                </a>
                <!-- Tombol Delete -->
                <form action="{{ route('mahasiswa-destroy', $mahasiswa->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="px-2 py-1 text-sm font-semibold text-black bg-red-500 rounded-lg shadow hover:bg-red-600 focus:ring focus:ring-red-300">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


                        <!-- Export Button -->
                        <a href="{{ route('mahasiswa-export') }}">
                            <button class="px-4 py-2 text-black bg-green-500 border border-green-500 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 mt-4 text-sm">
                                Export to Excel
                            </button>
                        </a>

                    </div>

                    @vite('resources/js/app.js')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
