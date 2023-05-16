<x-app-layout>
    <div class="container mx-auto dark:bg-gray-900">
            <div class="w-full">
                <div class="bg-white dark:bg-gray-800 shadow-md rounded my-6">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl dark:text-gray-300">Automobilių sąrašas</div>
                        <div class="flex flex-row justify-between dark:text-gray-300 items-end mt-4">
                            <form method="post" action="{{ route("cars.search") }}" class="flex flex-row gap-4 items-end">
                                @csrf
                                <div class="mb-0">
                                    <label class="block text-gray-300">{{__('Registration number')}}</label>
                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-slate-900 border-none" name="reg_number" value="{{ $filter->reg_number }}" >
                                </div>
                                <div class="mb-0">
                                    <label class="block text-gray-300">{{__("Brand")}}</label>
                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-slate-900 border-none" name="brand" value="{{ $filter->brand }}" >
                                </div>
                                <div class="mb-0">
                                    <label class="block text-gray-300">{{__('Owner')}}</label>
                                    <select class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-slate-900 border-none" name="owner_id">
                                        <option value="">{{__('Select owner')}}</option>
                                        @foreach($owners as $owner)
                                            @can('view', $owner)
                                            <option value="{{ $owner->id }}" @if($filter->owner_id == $owner->id) selected @endif>{{ $owner->name }}</option>
                                            @endcan
                                        @endforeach
                                    </select>
                                </div>
                                <button class="px-4 py-2 rounded-md text-white bg-blue-500 hover:bg-blue-600">{{__('Search')}}</button>
                            </form>
                        </div>
                        <hr class="my-4">
                        <div class="cars-create my-4">
                            <a href="{{ route('cars.create') }}" class="px-4 py-2 rounded-md text-white bg-green-500 hover:bg-green-600">Pridėti</a>
                        </div>
                        <table class="table-auto w-full">
                            <thead>
                            <tr>
                                <th class="px-4 py-2 dark:text-gray-300">{{__('Registration number')}}</th>
                                <th class="px-4 py-2 dark:text-gray-300">{{__('Brand')}}</th>
                                <th class="px-4 py-2 dark:text-gray-300">{{__('Owner')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                                @can('viewAny', $car)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-2 dark:text-gray-300">{{ $car->reg_number }}</td>
                                    <td class="px-4 py-2 dark:text-gray-300">{{ $car->brand }}</td>
                                    <td class="px-4 py-2 dark:text-gray-300">{{ $car->owner->name }}</td>
                                    <td>
                                        @can('update', $car)
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('cars.edit', $car->id)}}">{{__('Edit')}}</a>
                                        @endcan

                                        @can('delete', $car)
                                        <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="{{route('cars.delete',$car->id)}}">{{__('Delete')}}</a>
                                        @endcan
                                    </td>
                                </tr>
                                @endcan
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
