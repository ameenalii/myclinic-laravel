<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>My Clinic</title>
    </head>
    <body class="mb-48">


        <nav >
            <div class="container mx-auto px-2 py-4 flex justify-between items-center">
                <a class="font-bold text-2xl lg:text-4xl hover:text-gray-700" href="/">
                  MY CLINIC
                </a>


                  <ul class="inline-flex">

                    @auth

                    {{-- <li>
                        <span class="font-bold  px-2 uppercase">
                            Dr. {{auth()->user()->name}}
                        </span>
                        
                    </li> --}}
                    <li>
                        <a class="bg-black text-white px-3 p-3 hover:bg-gray-700" href="/listings/manage">
                            Manage Patients </a
                        >
                    </li>
                    <li>
                        <form class="inline pl-4 hover:text-gray-700" method="POST" action="/logout">
                        @csrf 
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i> <span class="font-bold"> Logout </span> 
                        </button>
                        </form>
                    </li>
                    @else
                    <li>
                      <a class="px-6 font-bold hover:text-gray-700" href="/login">
                          <i class="fa-solid fa-arrow-right-to-bracket px-1 "> </i> Login
                      </a>
                    </li>
                    <li>
                      <a class="bg-black text-white px-3 p-3 hover:bg-gray-700" href="/register">
                          <i class="fa-solid fa-user-plus px-1"> </i>  Register</a>
                    </li>
                    @endauth
                  </ul>
        </nav>


    {{-- @yield('content') --}}



    <main>
        {{$slot}}
    </main>

    <x-flash-message/>
</body>
</html>
