<x-layout>
    <main class="py-10">
    <h1>
        Faça Login
    </h1>
    
    <section>
        <form action="/login" method="POST">
            @csrf

            @error('email')
            <p class="text-red-500 text-xl">
                {{ $message }}
            </p>
            @enderror
            <input type="email" placeholder="your@email.com" name="email" class="bg-white p-2 border-2">
            <input type="password" placeholder="********" name="password" class="bg-white p-2 border-2">
            <button type="submit">Entrar</button>
        </form>
    </section>
    </main>
</x-layout>