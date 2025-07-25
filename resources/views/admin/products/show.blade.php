@extends('admin.products.layout')

@section('content')
    <div class="max-w-4xl mx-auto mt-10 bg-white rounded-xl shadow-md p-6">

        <div class="flex justify-end items-center mb-6">
            <a href="{{ route('admin.products.index') }}"
                class="inline-flex items-center px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded shadow-sm">
                <i class="fa fa-arrow-left mr-2"></i> Back
            </a>
        </div>

        <div class="space-y-6 text-gray-700 text-sm">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:`grid-cols-3 gap-6">
                <div>
                    <label class="font-semibold">Name:</label>
                    <p class="mt-1">{{ $product->name }}</p>
                </div>

                <div>
                    <label class="font-semibold">Price:</label>
                    <p class="mt-1">{{ $product->price }}</p>
                </div>

                <div>
                    <label class="font-semibold">Description:</label>
                    <p class="mt-1">{{ $product->description }}</p>
                </div>

                <div>
                    <label class="font-semibold">Category:</label>
                    <p class="mt-1">{{ $product->category->name ?? 'N/A' }}</p>
                </div>
            </div>

            <div>
                <label class="font-semibold">Image:</label>
                <div class="mt-2">
                    <img src="/images/{{ $product->image }}" class="rounded-lg shadow w-full">
                </div>
            </div>
        </div>

    </div>
@endsection
