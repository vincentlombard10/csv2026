<div x-data="{ open: @entangle('open') }">
    <button wire:click="$set('open', true)"
            class="group flex items-center text-neutral-100 font-medium rounded-md px-4 py-2 border-1 border-neutral-800 hover:bg-brand hover:text-neutral-900 transition duration-100 active:text-white active:bg-black cursor-pointer">
        <i class="ri-vip-crown-line me-1 text-lg text-brand group-hover:text-neutral-950"></i>Réserver
    </button>
    <div
        x-show="open"
        class="fixed inset-0 bg-black/60 flex items-center justify-center h-full w-full"
        wire:cloak
        x-cloak
        x-transition>
        <div
            @click.outside="open = false"
            class="bg-neutral-950 p-8 rounded-4xl w-216 relative text-neutral-100 shadow-2xl ring-16 ring-neutral-300/10 h-full overflow-scroll md:overflow-scroll md:h-128">
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <h3 class="leading-6">Réservez votre table pour votre prochaine soirée</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, architecto impedit maiores nostrum perspiciatis quam quas voluptate? Cum ea facilis in incidunt, iure, molestias nisi obcaecati praesentium quidem saepe sequi.</p>
                </div>
                <div>
                    <form wire:submit.prevent="submit">
                        <div
                            class="flex flex-col gap-y-2 md:h-100 overflow-scroll mask-b-from-90% mask-b-to-100% scrollbar-hide pb-8">
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
                            <div class="relative">
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
                                @error('firstname')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    type="text"
                                    wire:model.defer="lastname"
                                    id="lastname"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="lastname"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Lastname
                                </label>
                                @error('lastname')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input type="date"
                                       wire:model.defer="birthdate"
                                       id="birthdate"
                                       name="birthdate"
                                       class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                >
                                <label
                                    for="birthdate"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Date de naissance
                                </label>
                                @error('birthdate')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    type="text"
                                    wire:model.defer="phone"
                                    id="phone"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="phone"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Phone
                                </label>
                                @error('phone')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    type="text"
                                    wire:model.defer="email"
                                    name="email"
                                    id="email"
                                    placeholder=" "
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="email"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Email
                                </label>
                                @error('email')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    type="number"
                                    wire:model.defer="attendees"
                                    name="attendees"
                                    id="attendees"
                                    placeholder=" "
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendees"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Attendees
                                </label>
                                @error('attendees')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <select name="room"
                                        wire:model.defer="room"
                                        id="room"
                                        class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600 appearance-none"
                                >
                                    <option value="" selected disabled>Select</option>
                                    <option value="Grand Club">Grand Club</option>
                                    <option value="Grand Club VIP">Grand Club (VIP)</option>
                                    <option value="Salon 80-90-2000">Salon 80-90-2000</option>
                                    <option value="Salon 80-90-2000 VIP">Salon 80-90-2000 (VIP)</option>
                                </select>
                                <label
                                    for="room"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Room
                                </label>
                                @error('room')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input type="date"
                                       wire:model.defer="date"
                                       name="date"
                                       id="date"
                                       class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                >
                                <label
                                    for="date"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Date
                                </label>
                                @error('date')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            @if($type === 'Anniversaire')
                            <!-- Liste des invités -->
                            <!-- Invité 1 -->
                            <label for="attendee1" class="text-sm font-semibold text-brand inline-block mb-0">Invité 1</label>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee1_fullname"
                                    type="text"
                                    id="attendee1_fullname"
                                    name="attendee1_fullname"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee1_fullname"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Nom et prénom
                                </label>
                                @error('attendee1_fullname')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input type="date"
                                       wire:model.defer="attendee1_birthdate"
                                       id="attendee1_birthdate"
                                       name="attendee1_birthdate"
                                       class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                >
                                <label
                                    for="attendee1_birthdate"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Date de naissance
                                </label>
                                @error('attendee1_birthdate')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee1_phone"
                                    type="text"
                                    id="attendee1_phone"
                                    name="attendee1_phone"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee1_phone"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Téléphone
                                </label>
                                @error('attendee1_phone')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee1_email"
                                    type="text"
                                    id="attendee1_email"
                                    name="attendee1_email"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee1_email"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Adresse e-mail
                                </label>
                                @error('attendee1_email')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Invité 2 -->
                            <label for="attendee2" class="text-sm font-semibold text-brand inline-block mb-0">Invité 2</label>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee2_fullname"
                                    type="text"
                                    id="attendee2_fullname"
                                    name="attendee2_fullname"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee2_fullname"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Nom et prénom
                                </label>
                                @error('attendee2_fullname')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input type="date"
                                       wire:model.defer="attendee2_birthdate"
                                       id="attendee2_birthdate"
                                       name="attendee2_birthdate"
                                       class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                >
                                <label
                                    for="attendee2_birthdate"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Date de naissance
                                </label>
                                @error('attendee2_birthdate')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee2_phone"
                                    type="text"
                                    id="attendee2_phone"
                                    name="attendee2_phone"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee2_phone"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Téléphone
                                </label>
                                @error('attendee2_phone')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee2_email"
                                    type="text"
                                    id="attendee2_email"
                                    name="attendee2_email"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee2_email"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Adresse e-mail
                                </label>
                                @error('attendee2_email')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Invité 3 -->
                            <label for="attendee3" class="text-sm font-semibold text-brand inline-block mb-0">Invité 3</label>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee3_fullname"
                                    type="text"
                                    id="attendee3_fullname"
                                    name="attendee3_fullname"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee3_fullname"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Nom et prénom
                                </label>
                                @error('attendee3_fullname')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input type="date"
                                       wire:model.defer="attendee3_birthdate"
                                       id="attendee3_birthdate"
                                       name="attendee3_birthdate"
                                       class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                >
                                <label
                                    for="attendee3_birthdate"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Date de naissance
                                </label>
                                @error('attendee3_birthdate')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee3_phone"
                                    type="text"
                                    id="attendee3_phone"
                                    name="attendee3_phone"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee3_phone"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Téléphone
                                </label>
                                @error('attendee3_phone')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee3_email"
                                    type="text"
                                    id="attendee3_email"
                                    name="attendee3_email"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee3_email"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Adresse e-mail
                                </label>
                                @error('attendee3_email')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Invité 4 -->
                            <label for="attendee4" class="text-sm font-semibold text-brand inline-block mb-0">Invité 4</label>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee4_fullname"
                                    type="text"
                                    id="attendee4_fullname"
                                    name="attendee4_fullname"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee4_fullname"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Nom et prénom
                                </label>
                                @error('attendee4_fullname')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input type="date"
                                       wire:model.defer="attendee4_birthdate"
                                       id="attendee4_birthdate"
                                       name="attendee4_birthdate"
                                       class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                >
                                <label
                                    for="attendee4_birthdate"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Date de naissance
                                </label>
                                @error('attendee4_birthdate')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee4_phone"
                                    type="text"
                                    id="attendee4_phone"
                                    name="attendee4_phone"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee4_phone"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Téléphone
                                </label>
                                @error('attendee4_phone')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee4_email"
                                    type="text"
                                    id="attendee4_email"
                                    name="attendee4_email"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee4_email"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Adresse e-mail
                                </label>
                                @error('attendee4_email')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Invité 5 -->
                            <label for="attendee5" class="text-sm font-semibold text-brand inline-block mb-0">Invité 5</label>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee5_fullname"
                                    type="text"
                                    id="attendee5_fullname"
                                    name="attendee5_fullname"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee5_fullname"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Nom et prénom
                                </label>
                                @error('attendee5_fullname')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input type="date"
                                       wire:model.defer="attendee5_birthdate"
                                       id="attendee5_birthdate"
                                       name="attendee5_birthdate"
                                       class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                >
                                <label
                                    for="attendee5_birthdate"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Date de naissance
                                </label>
                                @error('attendee5_birthdate')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee5_phone"
                                    type="text"
                                    id="attendee5_phone"
                                    name="attendee5_phone"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee5_phone"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Téléphone
                                </label>
                                @error('attendee5_phone')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <input
                                    wire:model.defer="attendee5_email"
                                    type="text"
                                    id="attendee5_email"
                                    name="attendee5_email"
                                    autocomplete="off"
                                    placeholder=""
                                    class="peer block w-full px-6 pt-4 pb-2 border-1 border-neutral-600 rounded-lg bg-neutral-900 text-gray-100 placeholder-transparent focus:outline-none focus:border-blue-600"
                                />
                                <label
                                    for="attendee5_email"
                                    class="absolute left-6 top-1 text-gray-400 text-xs transition-all
           peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base
           peer-focus:top-1 peer-focus:text-xs peer-focus:text-blue-500">
                                    Adresse e-mail
                                </label>
                                @error('attendee5_email')
                                <p class="mb-1 text-xs text-orange-600">{{ $message }}</p>
                                @enderror
                            </div>

                            @endif

                            <div class="flex gap-2">
                                <div class="inline-flex items-center">
                                    <label class="flex items-center cursor-pointer relative">
                                        <input type="checkbox"
                                               class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded border border-slate-600 checked:bg-brand checked:border-slate-800"
                                               id="check"/>
                                        <span
                                            class="absolute text-neutral-900 opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"
           stroke="currentColor" stroke-width="1">
        <path fill-rule="evenodd"
              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
              clip-rule="evenodd"></path>
      </svg>
    </span>
                                    </label>
                                </div>
                                <label for="" class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus minus
                                    recusandae voluptatem!</label>
                            </div>
                            <div class="text-xs mb-4">
                                <p class="mb-0 text-neutral-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolor dolore,
                                    ducimus enim error fuga ipsam iste iusto minima molestias nobis placeat
                                    reprehenderit voluptatum? Esse exercitationem illo mollitia velit voluptas.</p>
                            </div>
                        </div>
                        <button type="submit"
                                class="px-4 py-3 bg-brand text-white rounded-xl w-full border-1 border-neutral-900">
                            Valider
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
