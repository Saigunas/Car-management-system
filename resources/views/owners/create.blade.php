<x-app-layout>
    <div class="container mt-6 mx-auto dark:text-gray-300">
        <div class="flex flex-wrap justify-center">
            <div class="w-full md:w-8/12">
                <div class="bg-gray-800 shadow-md rounded-md">
                    <div class="bg-gray-700 p-4 border-b border-gray-600">
                        {{__('Add new owner')}}
                    </div>
                    <div class="p-4">
                        <form method="post" action="{{ route('owners.save') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-300 font-bold mb-2" for="name">
                                    {{__('Name')}}:
                                </label>
                                <input class="border rounded-md py-2 px-3 w-full bg-gray-700 text-gray-300" name="name" type="text" value="" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-300 font-bold mb-2" for="surname">
                                    {{__('Surname')}}:
                                </label>
                                <input class="border rounded-md py-2 px-3 w-full bg-gray-700 text-gray-300" name="surname" type="text" value="" required>
                            </div>
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                {{__('Add')}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
