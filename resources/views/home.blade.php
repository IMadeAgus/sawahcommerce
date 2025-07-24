<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome to SAWAH COMMERCE
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow">
                    {{ session('success') }}
                </div>
            @endif

            @if ($products->isEmpty())
                <div class="text-center text-gray-600">
                    <p>There are no products available.</p>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($products as $product)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img class="w-full h-48 object-cover" src="/images/{{ $product->image }}"
                                alt="{{ $product->name }}">

                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-800 truncate">
                                    {{ $product->name }}
                                </h3>

                                <p class="text-gray-600 mt-2">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </p>

                                <div class="mt-4">
                                    <a href="{{ route('userproduct.show', $product->id) }}"
                                        class="inline-block px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700 transition">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
