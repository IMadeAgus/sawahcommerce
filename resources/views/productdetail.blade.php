<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Produk
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                    <div>
                        <img src="/images/{{ $product->image }}" alt="{{ $product->name }}"
                            class="w-full h-auto rounded-md shadow">
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">{{ $product->name }}</h1>

                        <p class="text-xl text-red-600 mt-2 mb-4">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>

                        <p class="text-gray-700 leading-relaxed">
                            {{ $product->detail }}
                        </p>


                        <div class="flex gap-2">
                            <a href="{{ route('dashboard') }}"
                                class="inline-block text-blue-600 border border-blue-600 hover:bg-blue-500 hover:text-white font-semibold py-2 px-4 rounded transition duration-200">
                                Kembali ke Home
                            </a>
                            <a href="#"
                                class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded transition duration-200">
                                Beli Sekarang
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
