<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi....{{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <h1 class="text-center m-auto ">Welcome To Dashboard</h1>
    </div>
</x-app-layout>
