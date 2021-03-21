<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('item.store')}}" method="post">
                        @csrf
                        <div>
                            <label for="name" class="font-bold">Name</label>
                            <input id="name" type="text" name="name" class="w-full">
                            @error('name')
                                <div class="text-red-600">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <button type="submit" class="py-2 px-4 bg-gray-800 text-white">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
