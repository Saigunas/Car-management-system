<x-app-layout>
    <div class="container mx-auto dark:bg-gray-900">
        <div class="grid grid-cols-1">
            <div class="w-full">
                <div class="bg-white dark:bg-gray-800 shadow-md rounded my-6">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl dark:text-gray-300">{{__('ownersList')}}</div>
                        <div class="flex flex-row justify-between dark:text-gray-300 items-end">
                            <div class="owners-create">
                                <a href="{{ route('owners.create') }}" class="px-4 py-2 rounded-md text-white bg-green-500 hover:bg-green-600">{{__('Add')}}</a>
                            </div>
                            <form method="post" action="{{ route("owners.search") }}" class="flex flex-row gap-4 items-end">
                                @csrf
                                <div class="mb-0">
                                    <label class="block text-gray-300">{{__('Owner')}}</label>
                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-slate-900 border-none" name="name" value="{{ $filter->name }}" >
                                </div>
                                <button class="px-4 py-2 rounded-md text-white bg-blue-500 hover:bg-blue-600">{{__('Search')}}</button>
                            </form>
                        </div>
                        <hr class="my-4">
                        <table class="table-auto w-full">
                            <thead>
                            <tr>
                                <th class="px-4 py-2 dark:text-gray-300">{{__('Name')}}</th>
                                <th class="px-4 py-2 dark:text-gray-300">{{__('Surname')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($owners as $owner)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-2 dark:text-gray-300">{{ $owner->name }}</td>
                                    <td class="px-4 py-2 dark:text-gray-300">{{ $owner->surname }}</td>
                                    <td>
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('owners.edit', $owner->id)}}">{{__('Edit')}}</a>
                                        <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="{{route('owners.delete',$owner->id)}}">{{__('Delete')}}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
