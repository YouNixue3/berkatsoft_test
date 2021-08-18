@extends('template/master')
@section('title', 'Costumers')
@section('content')
    <div class="grid grid-cols-1 gap-x-5 gap-y-5 my-5">
        <form class="" action="{{route('orders.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-gray-50 rounded-xl shadow-xl p-10 grid gap-y-3">
                <label>
                    <div class="font-semibold">
                        Costumer
                    </div>
                    <select id="user_id" name="user_id" autocomplete="user_id" class="px-2.5 py-1 w-1/2 border-2 text-lg focus:outline-none rounded-xl">
                        @foreach($costumers as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </label>
                <label>
                    <div class="font-semibold">
                        Product
                    </div>
                    <select id="product_id" name="product_id" autocomplete="product_id" class="px-2.5 py-1 w-1/2 border-2 text-lg focus:outline-none rounded-xl">
                        @foreach($products as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </label>
                <div class="pt-5 justify-self-end">
                    <input class="bg-blue-500 hover:bg-blue-600 text-white text-lg px-2 py-1 cursor-pointer rounded-xl" type="submit" value="Submit">
                    <a href="{{ route('orders') }}">
                        <input class="bg-red-500 hover:bg-red-600 text-white text-lg px-2 py-1  cursor-pointer rounded-xl" type="button" value="Cancel">
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
