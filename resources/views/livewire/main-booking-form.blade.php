<div x-data="{ type: ''}"
    class="flex flex-col gap-y-2 scrollbar-hide pb-8">
    <div class="relative">
        <select name="type" id="type"
                wire:model.live="type"
                class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600 appearance-none"
        >
            <option value="" selected disabled>Séléctionner</option>
            <option value="Simple">Réservation simple</option>
            <option value="Anniversaire">Anniversaire</option>
        </select>
        <label
            for="type"
            class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
            Type
        </label>
        @error('type')
        <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
        @enderror
    </div>
    @if($type === "Simple")
        <input
            wire:model.defer="firstname"
            type="text"
            id="firstname"
            name="firstname"
            autocomplete="off"
            placeholder=""
            class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
        />
        <label
            for="firstname"
            class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
            Firstname
        </label>
    @elseif($type === "Anniversaire")
        Anniversaire
    @endif

</div>
