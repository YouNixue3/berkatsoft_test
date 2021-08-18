@extends('template/master')
@section('title', 'Costumers')
@section('content')
    <div class="grid grid-cols-1 gap-x-5 gap-y-5 my-5">
        <form class="" action="{{route('products.update', $products->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bg-gray-50 rounded-xl shadow-xl p-10 grid gap-y-3">
                <label>
                    <div class="font-semibold">
                        Name
                    </div>
                    <input class="px-2.5 py-1 w-1/2 border-2 text-lg focus:outline-none rounded-xl" type="text" id="name" name="name" value="{{$products->name}}">
                </label>
                <label>
                    <div class="font-semibold">
                        Description
                    </div>
                    <textarea class="px-2.5 py-1 w-1/2 border-2 text-lg focus:outline-none rounded-xl" id="desc" name="desc">
                        {{$products->desc}}
                    </textarea>
                </label>
                <div class="pt-5 justify-self-end">
                    <input class="bg-blue-500 hover:bg-blue-600 text-white text-lg px-2 py-1 cursor-pointer rounded-xl" type="submit" value="Submit">
                    <a href="{{ route('products') }}">
                        <input class="bg-red-500 hover:bg-red-600 text-white text-lg px-2 py-1  cursor-pointer rounded-xl" type="button" value="Cancel">
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
