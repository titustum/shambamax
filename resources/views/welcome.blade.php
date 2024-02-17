@extends('app')

@section('main')

        <div class="mt-7 px-3 md:w-[90%] mx-auto rounded border py-8 shadow bg-green-100">

            <div class="text-center">
                <h1 class="text-4xl font-bold font-['Times']">
                    Hello! Do you need agricultural equipment?
                </h1>
                <h2 class="text-lg text-yellow-600 italic font-extralight">We have all of them here ready for you. Search for the nearest  one and hire easily.</h2>
                <p class="mt-2"></p>
            </div>

            <div class="grid md:grid-cols-2 mt-6 xl:grid-cols-4 gap-2">
                <div class="grid">
                    <label for="" class="font-bold">County Name</label>
                    <select class="border p-3">
                        <option value="">Select county</option>
                        <option value="">Nyeri</option>
                        <option value="">Muranga</option>
                        <option value="">Nakuru</option>
                        <option value="">Embu</option>
                        <option value="">Kirinyaga</option>
                        <option value="">Kiambu</option>
                        <option value="">Uasin Gishu</option>
                    </select>
                </div>
                <div class="grid">
                    <label for="" class="font-bold">Ward</label>
                    <select class="border p-3">
                        <option value="">Select ward</option>
                        <option value="">Nyeri</option>
                        <option value="">Muranga</option>
                        <option value="">Nakuru</option>
                        <option value="">Embu</option>
                        <option value="">Kirinyaga</option>
                        <option value="">Kiambu</option>
                        <option value="">Uasin Gishu</option>
                    </select>
                </div>
                <div class="grid">
                    <label for="" class="font-bold">Nearest Town</label>
                    <input type="text" name="" id="" class="border p-3" 
                    placeholder="Enter the nearest town">
                </div>
                <div class="grid">
                    <label for="" class="font-bold">Equipment/Tool</label>
                    <select class="border p-3">
                        <option value="">Select equipment/tool</option>
                        <option value="">Tractor</option>
                        <option value="">Powersaw</option>
                        <option value="">Water Generator</option>
                        <option value="">Maize Grinder</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <button class="border py-3 w-full bg-black hover:opacity-75 text-white rounded-md"> <i class="fas fa-search"></i> Search</button>
            </div>

        </div>



        <div class="mt-7 px-3 md:px-0 md:w-[90%] mx-auto">
            <h1 class="text-2xl font-bold">Latest Uploads</h1>
        </div>


        <div class="mt-2 px-3 md:px-0 md:w-[90%] mx-auto grid gap-4 md:grid-cols-2 xl:grid-cols-4 rounded">
            @foreach($equipments as $equipment)

            <div class="border rounded-md">
                <img src="{{ URL::to('uploads/'.$equipment->photo) }}" alt="Tractor" class="mx-auto h-[200px]">
                <div class="px-2">
                    {{$equipment->name}} / {{$equipment->county}}
                </div> 
                <div class="px-2 font-bold"> @Ksh. {{ number_format($equipment->rate) }}/{{$equipment->frequency}}</div>
                <div class="flex items-center px-2">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="mt-2 grid">
                    <a href="tel:{{ $equipment->phone }}" class="p-3  text-center bg-black hover:opacity-70 focus:opacity-70 text-white rounded-md font-semibold">
                       <i class="fas fa-phone mr-1"></i> {{ $equipment->phone }}
                    </a>
                </div>
                
            </div>

            @endforeach
        </div>

    @endsection