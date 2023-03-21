<x-app-layout>
    <div class="container mx-auto dark:bg-gray-900">
        <div class="grid grid-cols-1">
            <div class="w-full">
                <div class="bg-white dark:bg-gray-800 shadow-md rounded my-6">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Savininkų sąrašas</div>
                        <hr class="my-4">
                        <table class="table-auto w-full">
                            <thead>
                            <tr>
                                <th class="px-4 py-2 dark:text-gray-300">Vardas</th>
                                <th class="px-4 py-2 dark:text-gray-300">Pavardė</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($owners as $owner)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-2 dark:text-gray-300">{{ $owner->name }}</td>
                                    <td class="px-4 py-2 dark:text-gray-300">{{ $owner->surname }}</td>
                                    <!--
                                    <td>
                                        <a class="btn btn-info" href="{{-- route('owners.edit', $owner->id)-- }}">Redaguoti</a>
                                        <a class="btn btn-danger" href="{{--('owners.delete',$owner->id)--}}">Ištrinti</a>
                                    </td>
                                    -->
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
