@extends('app')

@section('main')

<div class="min-h-[70vh]"> 
    <div class="w-[90%] mt-7 mx-auto">
        <h1 class="font-bold text-2xl text-center">UPLOAD NEW EQUIPMENT</h1>

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
    <form method="post" enctype="multipart/form-data" action="{{ route('equipment.create') }}" class="w-[90%] mt-3 mx-auto border p-3 grid gap-4 lg:grid-cols-2">
        
        @csrf

        <div>
            <div class="grid">
                <label for="" class="font-bold">Your Name</label>
                <input type="text" name="owner" class="border p-3" required
                placeholder="e.g. John Doe" value="{{ Session::get('user')->name }}">
            </div>
            <div class="grid">
                <label for="" class="font-bold">Phone Number</label>
                <input type="text" name="phone" class="border p-3" required
                placeholder="e.g. 078765456" value="{{ Session::get('user')->phone }}">
            </div>
            <div class="grid">
                <label for="" class="font-bold">County</label>
                <input type="text" name="county"  class="border p-3" required
                placeholder="e.g. Kiambu" value="{{ Session::get('user')->county }}">
            </div>
            <div class="grid">
                <label for="" class="font-bold">Ward</label>
                <input type="text" name="ward" class="border p-3" required
                placeholder="e.g. Township" value="{{ Session::get('user')->ward }}">
            </div>
            <div class="grid">
                <label for="" class="font-bold">Nearest Town</label>
                <input type="text" name="town" class="border p-3" required
                placeholder="e.g. Othaya" value="{{ Session::get('user')->town }}">
            </div>
        </div>



        <div>
            <div class="grid">
                <label for="" class="font-bold">Equipment Name</label>
                <input type="text" name="name" id="" class="border p-3" required
                placeholder="e.g. Masey Furgason tractor">
            </div>
            <div class="grid">
                <label for="photo" class="font-bold">Equipment Photo</label>
                <input type="file" name="photo" accept="image/*" class="border p-3" required
                placeholder="e.g. John Doe">
            </div>
            <div class="grid">
                <label for="" class="font-bold">Equipment Category</label>
                <select class="border p-3" name="category" required>
                    <option value="">Select equipment/tool</option>
                    <option>Tractors</option>
                    <option>Sawing</option>
                    <option>Generator</option>
                    <option>Grinder</option>
                    <option>Pipes</option>
                    <option>Watering</option>
                </select>
            </div>
            <div class="grid">
                    <label for="" class="font-bold">Price rating</label>
                <div class="grid grid-cols-2">
                    <div class="grid">
                        <input type="number" name="rate" id="" class="border p-3" required
                        placeholder="e.g. 2000">
                    </div>

                    <select name="frequency" class="border p-3" name="category" required>
                        <option>Per Hour</option>
                        <option>Per Day</option>
                        <option>Per Week</option>
                        <option>Per Month</option>
                        <option>Per Year</option> 
                    </select>
                </div>
                
            </div>

            <button type="submit" class="bg-black text-white hover:opacity-75 font-semibold p-3 mt-5 w-full rounded">
                Upload Now
            </button>
        
        </div>



    </form>

</div>

@endsection