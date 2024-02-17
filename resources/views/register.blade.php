@extends('app')

@section('main')

<div class="min-h-[70vh]">

    <div class="w-[90%] mt-7 mx-auto">
        <h1 class="font-bold text-2xl text-center">REGISTER NEW ACCOUNT</h1>

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
    <form method="post" action="{{ route('user.register') }}" class="w-[90%] mt-3 mx-auto border p-3 grid gap-4 lg:grid-cols-2">
        @csrf
        
        <div>
                <div class="grid">
                    <label for="name" class="font-bold">Your Name</label>
                    <input type="text" name="name" id="" class="border p-3" required
                    placeholder="e.g. John Doe">
                </div>
                <div class="grid">
                    <label for="phone" class="font-bold">Phone Number</label>
                    <input type="number" name="phone" id="" class="border p-3" required
                    placeholder="e.g. 075643567">
                </div>
                <div class="grid">
                    <label for="county" class="font-bold">County</label>
                    <input type="text" name="county" id="" class="border p-3" required
                    placeholder="e.g. Kiambu">
                </div>
                <div class="flex items-center mt-3">
                    <input type="checkbox" name="agree" id="" required>
                    <div class="ml-1">I agree to your terms and conditions</div>
                </div>
        </div>
        
        <div>    
            <div class="grid">
                <label for="ward" class="font-bold">Ward</label>
                <input type="text" name="ward" id="" class="border p-3" required
                placeholder="e.g. Township">
            </div>
            <div class="grid">
                <label for="town" class="font-bold">Town</label>
                <input type="text" name="town" id="" class="border p-3" required
                placeholder="e.g. Othaya">
            </div>
            <div class="grid">
                <label for="password" class="font-bold">New Password</label>
                <input type="password" name="password" id="" class="border p-3" required
                placeholder="********************">
            </div>
            <button type="submit" class="bg-black text-white hover:opacity-75 font-semibold p-3 mt-5 w-full rounded">
                Register Now
            </button>
        </div> 


    </form> 


    <div class="w-[90%] mt-3 mx-auto text-center text-lg">
        Already have account? <a href="{{URL::to('login')}}" class="text-blue-600 hover:underline">Login</a>
    </div>

</div>

@endsection