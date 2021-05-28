<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 col-6">

                    <form class="" method="post" action="{{route('offer.store')}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Offer Name</label>
                            <input type="text" class="form-control" id="name"  value="{{old('name')}}" name="name">
                            @error('name')
                            <small id="emailHelp" class="form-text  text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input type="text" class="form-control" name="price" value="{{old('price')}}">
                            @error('price')
                            <small id="emailHelp" class="form-text  text-danger">{{$message}}</small>
                            @enderror
                        </div>
@csrf
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
