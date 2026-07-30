<header class="bg-white border-b-2 flex justify-between items-center px-10 py-4">
    <div>
        Logo
    </div>

    <div>
        Github
    </div>

    @auth
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf

            <button type="submit" class="bg-white p-2 border-2">Sair</button>
        </form>
    @endauth

    @guest
        <a href="{{ route('auth.login') }}" class="bg-[#fa6334] px-5 py-1 text-white border-2 border-black">Login</a>
    @endguest
</header>