@vite('resources/css/app.css')
<div class="w-1/2 mx-auto mt-6 h-40 bg-blue-700 border-2 rounded-3xl flex justify-center items-center">
    <button wire:click='increment' class="text-white text-xl font-bold h-10 w-20 bg-black">+</button>
    <h1 class="text-2xl text-white font-bold text-center">{{ $number }}</h1>
    <button wire:click='decrement' class="text-white text-xl font-bold h-10 w-20 bg-black">-</button>
</div>
