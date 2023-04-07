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
  	<body class="min-h-screen flex flex-col ">

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
				<div id="menu" class="hidden absolute right-0  top-[60px] bg-white border">
					
					<a class="hover:bg-[#EEEDFF] px-2 py-1 flex gap-2 items-center" href="/profile">
						<img class="w-4 h-4" src="{{ asset('assets/boxicons/bx-edit.svg') }}" alt="">
						<p> Profile </p>
					</a>

					<a class="hover:bg-[#EEEDFF] px-2 py-1 flex gap-2 items-center" href="/logout">
						<img class="w-4 h-4" src="{{ asset('assets/boxicons/bx-log-out.svg') }}" alt="">
						<p> Logout </p>
					</a>
					
				</div>


      		</div>

			

    	</div>

		

		<!-- Main Content -->
		<main class="w-full flex-grow pb-10 max-w-xl mx-auto">
				
			<livewire:create-panel></livewire:create-panel>
		
			<livewire:task-list></livewire:task-list>

    	</main>

		<!-- Footer -->
		<footer class=" flex w-full justify-center border p-2">

			<p>© {{ date('Y') }} Arya Dila. All rights reserved.</p>

		</footer>

		@livewireScripts

		<!-- Javascript for toggle menu container -->
		<script>
			function showMenu(){
				menu = document.getElementById('menu');
				menu.classList.toggle('hidden');
			}
		</script>

  	</body>
</html>
