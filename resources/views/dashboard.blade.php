<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold">Halo, {{ auth()->user()->name }}!</h1>
        <p class="mt-2">Role Anda adalah 
            <span class="font-semibold text-[#4b3832]">
                {{ auth()->user()->role }}
            </span>
        </p>
    </div>
</x-app-layout>

