<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{ asset('assets/images/otodo-icon.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="Text/html; charset=utf-8" />
            <title>OTODO - To Do List App</title>
            <meta name="title" content="OTODO - To Do List App" />
        <meta name="description" content="Simple To Do List App" />
        <meta property="og:type" content="website">
        @livewireStyles
    </head>
  	<body class="flex flex-col min-h-screen">

    	<!-- Navbar -->
    	<div class="border-b flex justify-center">

            <div class="relative max-w-xl w-full flex justify-between px-4 py-3">

                <img src="{{ asset('/assets/images/otodo-landscape.svg') }}" alt="">

                <div onclick="showMenu();" class="flex items-center justify-between gap-3 cursor-pointer select-none">
                
                    @if(Auth::user()->avatar == null)
                        <img class="h-8 w-8" src="{{ asset('/assets/boxicons/bx-user-circle.svg') }}" alt="">
                    @endif
                    <div class="flex gap-1 items-center">
                        <p>{{ Auth::user()->nama }}</p>
                        <img class="h-4 w-4" src="{{ asset('/assets/boxicons/bxs-chevron-down.svg') }}" alt="">
                    </div>
                        
                    
                </div>

                <!-- Menu Container -->
                <div id="menu" class="hidden absolute right-0 top-[60px] bg-white border">
                    
                    <a class="hover:bg-[#EEEDFF] px-2 py-1 flex gap-2 items-center" href="/">
                        <img class="w-4 h-4" src="{{ asset('assets/boxicons/bx-home.svg') }}" alt="">
                        <p> Home </p>
                    </a>

                    <a class="hover:bg-[#EEEDFF] px-2 py-1 flex gap-2 items-center" href="/logout">
                        <img class="w-4 h-4" src="{{ asset('assets/boxicons/bx-log-out.svg') }}" alt="">
                        <p> Logout </p>
                    </a>
                    
                </div>

            </div>

    	</div>

        
        
        <!-- Main Content -->
        <main class="flex-grow">

            <form class="py-8 flex w-full flex-col items-center justify-center" action="/profile/update" method="POST">
            @csrf

                <div class="mx-auto flex max-w-sm w-full flex-col gap-6 p-4">

                    <a href="/">
                        <div class="flex gap-1 w-full justify-start">
                            <img src="{{ asset('/assets/boxicons/bx-chevron-left.svg') }}" alt="" />
                            <p>Back</p>
                        </div>  
                    </a>

                    <img class="mx-auto mb-3 h-28 w-28 rounded-full" src="{{ asset('/assets/boxicons/bx-user-circle.svg') }}" alt="" />
                    
                    
                    @if( session("success") )
                        <div class="bg-[#7BB6B3] px-4 py-2 rounded-md font-semibold text-sm">
                            {{ session("success") }}
                        </div>
                    @endif

                    <div class="flex flex-col gap-2 rounded-md border bg-[#EEEDFF] px-4 py-2 outline-none ring-[#1A2E6D] focus-within:ring-1 hover:ring-1">
                        <p class="text-sm font-semibold text-[#1A2E6D]">Nama</p>
                        <div class="flex gap-1">
                            <img src="{{ asset('/assets/boxicons/bx-user.svg') }}" alt="" />
                            <input name="nama" class="w-full bg-[#EEEDFF] px-2 outline-none" type="text" placeholder="Nama" required value="{{ Auth::user()->nama }}" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 rounded-md border bg-[#EEEDFF] px-4 py-2 outline-none ring-[#1A2E6D] focus-within:ring-1 hover:ring-1">
                        <p class="text-sm font-semibold text-[#1A2E6D]">Email</p>
                        <div class="flex gap-1">
                            <img src="{{ asset('/assets/boxicons/bx-envelope.svg') }}" alt="" />
                            <input name="email" class="w-full bg-[#EEEDFF] px-2 outline-none" type="email" placeholder="email@mail.com" required value="{{ Auth::user()->email }}" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 rounded-md border bg-[#EEEDFF] px-4 py-2 outline-none ring-[#1A2E6D] focus-within:ring-1 hover:ring-1">
                        <p class="text-sm font-semibold text-[#1A2E6D]">Password</p>
                        <div class="flex gap-1">
                            <img src="{{ asset('/assets/boxicons/bx-key.svg') }}" alt="" />
                            <input name="password" class="w-full bg-[#EEEDFF] px-2 outline-none" type="password" placeholder="********" />
                        </div>
                    </div>

                    <input class="cursor-pointer rounded-md bg-[#1A2E6D] py-2 text-slate-200 ring-[#1A2E6D] hover:ring-2" type="submit" value="Save" />
                </div>
            
            </form>
            
        </main>

        <!-- Footer -->
        <footer class=" flex w-full justify-center border p-2">

            <p>© {{ date('Y') }} Arya Dila. All rights reserved.</p>

        </footer>   

        <!-- Javascript for toggle menu container -->
		<script>
			function showMenu(){
				menu = document.getElementById('menu');
				menu.classList.toggle('hidden');
			}
		</script>
    </body>
</html>