@extends('template/master')
@section('title', 'Orders')
@section('content')
    <div class="grid grid-cols-1  gap-x-5 gap-y-5 my-5">
        <div>
            <a href="{{route('orders.add')}}">
                <button class="h-10 w-20 float-right bg-green-500 hover:bg-green-600 text-white text-center rounded-lg"><i
                        class="fas fa-plus mr-2"></i>Add</button>
            </a>
        </div>
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Costumer
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Product
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($orders as $value)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{\App\Models\User::whereId($value->user_id)->first()->name}}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 overflow-hidden">
                            <div class="text-sm text-gray-900">{{\App\Models\Product::whereId($value->product_id)->first()->name}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{route('orders.edit', $value->id)}}" class="bg-indigo-500 text-white p-2 hover:bg-indigo-400">Edit</a>
                            <a onclick="modals_rd()" class="bg-red-500 text-white p-2 hover:bg-red-400" data-target="{{$value->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach

                <!-- More people... -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
