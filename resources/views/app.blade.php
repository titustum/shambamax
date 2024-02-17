
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shamba Max - Hire Agricultural Machine anything</title>
    <meta name="description" content="We help farmers find and hire agricultural machinery near them anytime">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Righteous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="shortcut icon" href="{{URL::to('logos/logo.png')}}" type="image/png">

    <link rel="stylesheet" href="{{URL::to('fontawesome-free-6.5.1-web/css/all.min.css')}}">

    @vite('resources/css/app.css')

    <style>
        @font-face {
            font-family: 'Rigtheous';
            src: url('fonts/Righteous/Righteous-Regular.ttf');
        }

        @font-face {
            font-family: 'Roboto';
            src: url('fonts/Roboto/Roboto-Regular.ttf');
        }
        body { font-family: "Roboto", "Lato", sans-serif; }
    </style>
</head>
<body>

    <header class="py-2 bg-green-700 text-white">
        <div class="w-[90%] mx-auto flex justify-between items-center">
            <a href="{{URL::to('/')}}" class="flex items-center">
                <img src="{{ URL::to('logos/logo.png') }}" alt="Logo" class="mr-2 h-12">
                <h1 class="text-2xl font-bold text-white">Shamba Max</h1>
            </a>

            <div class="flex items-center">
                
                @if(Session::get('user'))
                <a href="{{URL::to('/upload')}}" class="hover:text-yellow-600 flex items-center">
                    <i class="fas fa-upload"></i>
                    <span class="ml-1">Upload</span>
                </a>
                <a href="{{URL::to('/upload')}}" class="hover:text-yellow-600 ml-4 flex items-center">
                    <i class="fas fa-upload"></i>
                    <span class="ml-1">My Uploads</span>
                </a>
                <a href="{{URL::to('/login')}}" class="hover:text-yellow-600 ml-4 flex items-center">
                    <i class="fas fa-user"></i>
                    <span class="ml-1">{{ Session::get('user')->name }}</span>
                </a> 

                <a href="{{ route('user.logout') }}" class="text-red-600 hover:underline ml-4 flex items-center">
                    <span class="ml-1">Logout</span>
                    <i class="ml-2 fas fa-arrow-right"></i>
                </a> 

                @else

                <a href="{{URL::to('/login')}}" class="hover:text-yellow-600 flex items-center">
                    <i class="fas fa-user"></i>
                    <span class="ml-1">Login</span>
                </a>
                @endif
                
            </div>
        </div>
    </header>

    <main>
        @yield('main')
    </main>

    <footer class="border-t py-4 mt-3 bg-black text-white">
        <div class="w-[90%] py-3 mx-auto xl:flex justify-between">
            <div>
                <h1 class="text-lg font-bold">Important Links</h1>
                <div><i class="fas fa-chevron-right text-sm mr-2"></i>Home</div>
                <div><i class="fas fa-chevron-right text-sm mr-2"></i>Register</div>
                <div><i class="fas fa-chevron-right text-sm mr-2"></i>Login</div>
                <div><i class="fas fa-chevron-right text-sm mr-2"></i>Upload</div>
            </div>
            <div>
                <h1 class="text-lg font-bold">Equipments</h1>
                <div><i class="fas fa-chevron-right text-sm mr-2"></i>Tractors</div>
                <div><i class="fas fa-chevron-right text-sm mr-2"></i>Generators</div>
                <div><i class="fas fa-chevron-right text-sm mr-2"></i>Powersaws</div>
                <div><i class="fas fa-chevron-right text-sm mr-2"></i>Oxen Plough</div>
            </div>
            <div>
                <h1 class="text-lg font-bold">Privacy</h1>
                <div><i class="fas fa-chevron-right text-sm mr-2"></i>Terms</div>
                <div><i class="fas fa-chevron-right text-sm mr-2"></i>Privacy</div> 
            </div>
        </div>
        <div class="border-t py-2 text-center">
            &copy; 2024 - Shamba Max
        </div>
    </footer>
 
</body>
</html>