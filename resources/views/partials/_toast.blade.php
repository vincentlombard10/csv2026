<div
    x-data="{ show: false, message: '', type: 'success' }"
    x-init=""
    x-on:toast.window="
        console.log($event.detail[0]);
        message = $event.detail[0].toast.message;
        type = $event.detail[0].toast.type ?? 'success';
        show = true;
        setTimeout(() => {show = false}, 5000)
    "
    class="fixed flex bottom-8 justify-center right-5 left-5 z-10">
    <div
        wire:cloak
        x-cloak
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-8 scale-80"
        x-transition:enter-end="opacity-100 transform translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 transform translate-y-8 scale-80"
        class="px-8 py-6 rounded-full shadow flex justify-between max-w-[32rem] text-center leading-5 gap-8 text-sm"
        :class="{
      'bg-neutral-950 text-brand font-medium ring-16 ring-brand/20': type === 'success',
      'bg-red-600': type === 'error',
      'bg-blue-600': type === 'info'
    }"
    >
        <span x-text="message"></span>
        <span @click="show = false" class="flex justify-center items-center">
            <i class="ri-close-line w-5 h-5 text-2xl bg-black/10 w-8 h-8 rounded-full hover:bg-neutral-950 hover:text-brand transition duration-200 ease-in-out cursor-pointer"></i>
        </span>
    </div>
</div>
