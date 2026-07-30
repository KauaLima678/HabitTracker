<style>
    .button{
        box-shadow: 5px 7px 0 0 black;
    }
</style>

<x-layout>
    <main class="py-10">
    <section class="bg-white max-w-[600px] px-10 py-8 border-2 mx-auto mt-4">
    <h1 class="font-bold text-3xl">
        Faça Login
    </h1>
    <p>Insira seus dados para acessar</p>
        <form action="{{ route('auth.login') }}" method="POST" class="flex flex-col gap-2 py-5">
            @csrf
            <div class="flex flex-col gap-2 mb-4">
                <label for="email">Email</label>
                <input type="email" placeholder="your@email.com" name="email" class="bg-white p-2 border-2 @error('email') border-red-500 @enderror">

                @error('email')
                <p class="text-red-500 text-sm">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 mb-4">
                <label for="password">Senha</label>
                <input type="password" placeholder="********" name="password" class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
                
                @error('password')
                <p class="text-red-500 text-sm">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <button type="submit" class="border-2 bg-[#fa6334] p-2 button hover:opacity-90 hover:scale-99 transition">Entrar</button>
        </form>
        <p class="text-center mt-4">Ainda não tem conta? <a href="{{ route('site.register') }}" class="underline hover:opacity-50 transition">Registre-se</a></p>
    </section>
    
    </main>
</x-layout>