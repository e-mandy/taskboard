<nav class="w-screen flex justify-between p-2 bg-blue-300 items-center">
    <h1 class="uppercase font-bold">To-do</h1>

    <div>
        <form action="{{ route('logout') }}" method="POST">
            <button type="submit" class="bg-gray-600 rounded-md text-white py-1 px-2">Deconnexion</button>
        </form>
        
    </div>
</nav>