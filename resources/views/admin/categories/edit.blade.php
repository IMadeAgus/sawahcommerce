@extends('admin.categories.layout')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white rounded-xl shadow-md p-6">
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.categories.index') }}"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-md">
                <i class="fa fa-arrow-left mr-2"></i> Back
            </a>
        </div>

        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="inputName" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="inputName" value="{{ $category->name }}"
                    class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm @error('name') border-red-500 @enderror"
                    placeholder="Product name">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit"
                class="inline-flex items-center px-4 py-2 text-white bg-green-600 hover:bg-green-700 rounded-md shadow-sm text-sm font-medium">
                <i class="fa-solid fa-floppy-disk mr-2"></i> Update
            </button>
        </form>
    </div>
@endsection
