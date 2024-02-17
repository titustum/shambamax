@extends('app')

@section('main')

<div class="min-h-[70vh]">

<div class="w-[90%] mt-7 mx-auto">
        <h1 class="font-bold text-2xl text-center">LOGIN NOW</h1>

        @if($errors->any())
        <div class="p-3 rounded-md bg-red-700 text-white">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>
    <form method="post" action="{{ route('user.login') }}" class="w-[90%] mt-3 mx-auto border p-3 grid gap-4 lg:grid-cols-2">
        @csrf
        <div>
                <div class="grid">
                    <label for="phone" class="font-bold">Phone Number</label>
                    <input type="number" name="phone" id="" class="border p-3" 
                    placeholder="e.g. 075643567">
                </div> 
        </div>
        
        <div>  
            <div class="grid">
                <label for="password" class="font-bold">New Password</label>
                <input type="password" name="password" id="" class="border p-3" 
                placeholder="********************">
            </div>
            <button type="submit" class="bg-black text-white hover:opacity-75 font-semibold p-3 mt-5 w-full rounded">
                Login Now <i class="fas fa-arrow-right"></i>
            </button>
        </div> 


    </form>

    <div class="w-[90%] mt-3 mx-auto text-center text-lg">
        Don't have an account yet? <a href="{{URL::to('register')}}" class="text-blue-600 hover:underline">Create New Account</a>
    </div>

</div>

@endsection