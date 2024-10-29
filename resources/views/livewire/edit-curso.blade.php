<div class="px-6 py-6">

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="name_curso" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Nombre
                Curso</label>
            <input type="text" id="name_curso"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                wire:model="cursoedit.name_curso" placeholder="Curso..." required />
                @error('curso.name_curso')
                    <span class="text-red-600 m-2">{{ $message }}</span>
                @enderror
        </div>

        <div>
            <label for="description"
            class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Descripción</label>
            <input type="text" id="description"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            wire:model="cursoedit.description_curso" placeholder="Descripción..." required />
        </div>
    </div>

    <div class="mb-6">
        <label for="price" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Precio</label>
        <input type="text" id="price"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        wire:model="cursoedit.price_curso" placeholder="Precio..." required />

        @error('curso.price_curso')
        <span class="text-red-600 m-2">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar</button>

</div>
