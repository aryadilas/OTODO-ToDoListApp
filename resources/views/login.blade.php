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
<body class="min-h-screen w-full flex justify-center flex-col">

    <div class="max-w-sm w-full mx-auto flex p-4 mb-14">

        <img class="h-10 object-contain" src="{{ asset('assets/images/otodo-landscape.svg') }}" alt="">

    </div>

    <form class="" action="/login" method="POST">

        @csrf

        <div class="max-w-sm mx-auto flex flex-col gap-6 p-4 ">
        
            <div class="">

                <p class="font-semibold text-3xl text-[#1A2E6D]">Welcome</p>
                <p class="font-semibold text-[#1A2E6D]">Sign in to continue</p>

            </div>
            
            @if($errors->any())
                <div class=" bg-[#C74F79] px-4 py-2 rounded-md text-[#EEEDFF]">

                    @foreach ($errors->all() as $error)
                    
                        {{ $error }}

                    @endforeach    

                </div>
            @endif

            @if( session("success") )
                <div class="bg-[#7BB6B3] px-4 py-2 rounded-md font-semibold text-sm">
              
                    {{ session("success") }}

                </div>
            @endif

            <div class="bg-[#EEEDFF] px-4 py-2 border rounded-md flex flex-col gap-2 outline-none hover:ring-1 focus-within:ring-1 ring-[#1A2E6D]">
                
                <p class="font-semibold text-[#1A2E6D] text-sm">Email</p>
                <div class="flex gap-1">
                    <img src="{{ asset('/assets/boxicons/bx-envelope.svg') }}" alt="">
                    <input name="email" class="bg-[#EEEDFF] px-2 w-full outline-none" type="email" placeholder="email@mail.com" required>
                </div>
                
            </div>

            <div class="bg-[#EEEDFF] px-4 py-2 border rounded-md flex flex-col gap-2 outline-none hover:ring-1 focus-within:ring-1 ring-[#1A2E6D]">
                
                <p class="font-semibold text-[#1A2E6D] text-sm">Password</p>
                <div class="flex gap-1">
                    <img src="{{ asset('/assets/boxicons/bx-key.svg') }}" alt="">
                    <input name="password" class="bg-[#EEEDFF] px-2 w-full outline-none" type="password" placeholder="********" required>
                </div>
                
            </div>

            <input class="bg-[#1A2E6D] rounded-md py-2 text-slate-200 cursor-pointer hover:ring-2 ring-[#1A2E6D] outline-none" type="submit" value="LOGIN">

            <p class="text-center text-sm">New to <span class="font-semibold">OTODO</span> ? <a class="text-[#1A2E6D] font-semibold" href="/register">SIGN UP</a></p>
        
        </div>
    </form>
    @livewireScripts
</body>
</html>