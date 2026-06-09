<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Borrows') }}
        </h2>
    </x-slot>

    <!-- resources/views/users/index.blade.php -->
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg p-4">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">ID</th>
                    <th scope="col" class="py-3 px-6">USER NAME</th>
                    <th scope="col" class="py-3 px-6">BOOK NAME</th>
                    <th scope="col" class="py-3 px-6">BORROW DATE</th>
                    <th scope="col" class="py-3 px-6">RETURN DATE</th>
                    <th scope="col" class="py-3 px-6">STATUS</th>
                    {{-- <th scope="col" class="py-3 px-6">Aksi</th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse($borrows as $borrow)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $borrow->id }}</td>
                        <td class="py-4 px-6">{{ $borrow->user['name'] }}</td>
                        <td class="py-4 px-6">{{ $borrow->buku['author'] }}</td>
                        <td class="py-4 px-6">{{ $borrow->borrow_date }}</td>
                        <td class="py-4 px-6">{{ $borrow->return_date }}</td>
                        <td class="py-4 px-6">{{ $borrow->borrow_status }}</td>
                        {{-- <td class="py-4 px-6">
                            <a href="{{ route('borrows.edit', $borrow->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        </td> --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-4 px-6 text-center text-gray-400">Tidak ada data ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $borrows->links() }}
        </div>
    </div>

</x-app-layout>
