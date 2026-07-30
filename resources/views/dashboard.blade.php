<x-layout>
    <main class="py-10">
        <h1>Dashboard</h1>

        <h2 class="">Olá {{ auth()-> user()->name }}, Bem vindo ao HabitTracker</h2>
    </main>
</x-layout>