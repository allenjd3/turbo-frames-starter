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
                    @foreach($items as $item)
                        <div class="item text-xl h-16 flex w-full border items-center my-2">
                            <div class="ml-2 flex-1">{{$item->name}}</div>
                            <div class="mx-2"><a href="{{ route('item.edit', $item) }}" class="text-blue-600 font-bold">Edit</a></div>
                            <div class="mx-2">
                                <form action="{{route('item.destroy', $item) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="text-blue-600 font-bold" type="submit">Delete</button>
                                </form>

                            </div>
                        </div>
                    @endforeach
                    <div class="my-2 mt-4"><a href="{{route('item.create')}}" class="py-2 px-4 bg-gray-800 text-white">New Item</a></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
