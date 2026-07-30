<x-layout>
    <main class="py-10">
    <section class="bg-white max-w-[600px] px-10 py-5 border-2 mx-auto mt-4">
    <h1 class="font-bold text-3xl">
        Cadastre-se
    </h1>
    <p class="mt-4">Insira seus dados para se cadastrar no nosso sistema</p>
        <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col gap-2 py-5">
            @csrf

            <div class="flex flex-col gap-2 mb-4">
                <label for="name">Nome</label>
                <input type="text" placeholder="Seu nome" name="name" class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">

                @error('name')
                <p class="text-red-500 text-sm">
                    {{ $message }}
                </p>
                @enderror
            </div>

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

            <div class="flex flex-col gap-2 mb-4">
                <label for="password_confirmation">Repita sua senha</label>
                <input type="password" placeholder="********" name="password_confirmation" class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">

                @error('password')
                <p class="text-red-500 text-sm">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <button type="submit" class="border-2 bg-[#fa6334] p-2 text-white border-black">Entrar</button>
        </form>
        <p class="text-center mt-4">Ainda não tem conta? <a href="{{ route('site.register') }}" class="text-underline hover:opacity-50 transition">Registre-se</a></p>
    </section>
    
    </main>
</x-layout>