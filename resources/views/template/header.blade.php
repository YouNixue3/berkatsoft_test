<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDev | @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/rdev.js') }}"></script>
</head>
<body class="font-default">
<!-- Header -->
<div id="modals_rd" class="hidden z-50">
    <div onclick="modals_rd()" class="fixed top-0 z-50 h-full w-full bg-black opacity-20">
    </div>
    <div class="z-50 fixed top-1/2 w-full transform -translate-y-2/3 px-2">
        <!-- Put Modals Here  -->
        <div class="w-60 md:w-72 py-5 text-center bg-white rounded-3xl mx-auto">
            <i class="fas fa-exclamation-circle text-yellow-500 text-5xl"></i>
            <h1 class="font-bold text-xl my-4">Are you sure?</h1>

            @if (Route::is('costumers'))
                <form id="form_destroy" action="{{route('costumers.destroy')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id_destroy">
                </form>
            @elseif (Route::is('products'))
                <form id="form_destroy" action="{{route('products.destroy')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id_destroy">
                </form>
            @elseif (Route::is('orders'))
                <form id="form_destroy" action="{{route('orders.destroy')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id_destroy">
                </form>
            @endif

            <button onclick="" class="bg-blue-500 text-white px-6 rounded-xl" type="submit" form="form_destroy" value="Delete">Submit</button>
            <button onclick="modals_rd()" class="bg-red-500 text-white px-6 rounded-xl">Cancel</button>
        </div>
        <!-- Put Modals Here  -->
    </div>
</div>
<div class="flex w-full">
    <div id="mobile-menu"
         class="h-full md:h-auto text-gray-800 z-40 fixed w-0 md:w-11 lg:w-80 md:hover:w-80 duration-300 bg-gray-100 shadow-md md:static overflow-hidden md:overflow-none">
        <div class="font-bold text-xl h-16 pr-2 md:pr-0 overflow-hidden truncate flex">
            <img class="min-h-5 h-5 mx-3 my-auto" src="{{asset('img/path4979.png')}}" alt="">
            <span class="ml-4 my-auto text-2xl align-middle font-light">
                    RDeveloper
            </span>
            <button onclick="CloseBar()" type="button" class="mx-auto md:hidden">
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div class="text-lg font-normal tracking-tight">
            <ul class="py-5 px-1 py-2">
                <li class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a href="{{route('dashboard')}}">
                        <div class="{{ Route::is('dashboard') ? 'bg-gray-300': 'bg-gray-100'}} hover:bg-gray-200 px-2 pt-1 rounded-lg">
                            <i class="fas fa-columns mr-3"></i><span>Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a href="{{route('costumers')}}">
                        <div class="{{ Route::is('costumers') ? 'bg-gray-300': 'bg-gray-100'}} hover:bg-gray-200 px-2 pt-1 rounded-lg">
                            <i class="fas fa-users mr-3"></i><span>Costumers</span>
                        </div>
                    </a>
                </li>
                <li class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a href="{{route('products')}}">
                        <div class="{{ Route::is('products') ? 'bg-gray-300': 'bg-gray-100'}} hover:bg-gray-200 px-2 pt-1 rounded-lg">
                            <i class="fas fa-toolbox mr-3"></i><span>Products</span>
                        </div>
                    </a>
                </li>
                <li class="py-0.5 my-1 rounded-xl overflow-hidden truncate">
                    <a href="{{route('orders')}}">
                        <div class="{{ Route::is('orders') ? 'bg-gray-300': 'bg-gray-100'}} hover:bg-gray-200 px-2 pt-1 rounded-lg">
                            <i class="fas fa-clipboard-list mr-3"></i><span>Orders</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-full">
        <nav class="bg-gray-200">
            <div class="px-5">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <button onclick="Collapsed()" class="text-gray-800">
                                <svg class="block h-6 w-6"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div>
                                    <button type="button" onclick="modals_profile()"
                                            class="max-w-xs p-0.5 bg-gray-300 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                            aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                             alt="">
                                    </button>
                                </div>
                                <div id="modals_profile"
                                     class="hidden absolute right-0 w-32 rounded-xl shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                     role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                     tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                       tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
