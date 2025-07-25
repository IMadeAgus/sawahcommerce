@extends('admin.products.layout')

@section('content')
    <div class="max-w-7xl mx-auto mt-10 bg-white rounded-xl shadow-md p-6">
        @session('success')
            <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-md">
                {{ $value }}
            </div>
        @endsession

        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.products.create') }}"
                class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-md shadow-sm">
                <i class="fa fa-plus mr-2"></i> Create New Product
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100 text-left text-gray-700 font-semibold">
                    <tr>
                        <th class="px-4 py-2 w-20">No</th>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2 w-64">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">
                    @forelse ($products as $product)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2">{{ ++$i }}</td>
                            <td class="px-4 py-2">
                                <img src="/images/{{ $product->image }}" class="w-24 rounded-md shadow" alt="Product Image">
                            </td>
                            <td class="px-4 py-2">{{ $product->name }}</td>
                            <td class="px-4 py-2">{{ $product->price }}</td>
                            @php $modalId = 'deleteModal' . $product->id; @endphp
                            <td class="px-4 py-2 space-x-2">
                                <a href="{{ route('admin.products.show', $product->id) }}"
                                    class="inline-flex items-center px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded text-xs">
                                    <i class="fa-solid fa-list mr-1"></i> Show
                                </a>

                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                    class="inline-flex items-center px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded text-xs">
                                    <i class="fa-solid fa-pen-to-square mr-1"></i> Edit
                                </a>

                                <button type="button"
                                    onclick="document.getElementById('{{ $modalId }}').classList.remove('hidden')"
                                    class="inline-flex items-center px-3 py-1 bg-red-600 hover:bg-red-700 text-white rounded text-xs">
                                    <i class="fa-solid fa-trash mr-1"></i> Delete
                                </button>

                                <div id="{{ $modalId }}"
                                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
                                    <div class="bg-white rounded-lg shadow-lg max-w-sm w-full p-6">
                                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Confirm Deletion</h2>
                                        <p class="text-sm text-gray-600 mb-6">Are you sure you want to delete
                                            <strong>{{ $product->name }}</strong>?</p>
                                        <div class="flex justify-end space-x-2">
                                            <button type="button"
                                                onclick="document.getElementById('{{ $modalId }}').classList.add('hidden')"
                                                class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded">
                                                Cancel
                                            </button>

                                            <form action="{{ route('admin.products.destroy', $product->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">
                                                    Yes, Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-4 text-center text-gray-500">There are no data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $products->withQueryString()->links() }}
        </div>
    </div>
@endsection
