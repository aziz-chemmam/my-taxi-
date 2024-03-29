@extends('incfile.header')
@section('content')

<div id="body" class="bg-slate-50 h-screen flex">
    <nav class="bg-white w-80 h-screen flex flex-col gap-10 border-r border-slate-100">
        <div class="logo text-2xl font-bold text-center h-16 flex items-center justify-center">MY-TAXI</div>
        <div class="user flex items-center justify-center flex-col gap-4 border-b border-emerald-slate-50 py-4">
            <img class="w-24 rounded-full shadow-xl" src="@foreach ($user as $users) {{asset('/images'.$users->image)}}  @endforeach"/>
            <div class="flex flex-col items-center">
                <span class="font-semibold text-lg text-emerald-700">{{ auth()->user()->name }}</span>
                <span class="text-slate-400 text-sm">{{ auth()->user()->role }} </span>
            </div>
           
        </div>



        <ul class="px-6 space-y-2">
 
            <li>
                <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg" href="{{ url('admin/') }}">Home</a>
            </li>
          
            <li>
                <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg" href="#">Users</a>
            </li>
            <li>

                <a class="block px-4 py-2.5 text-slate-800 font-semibold  hover:bg-emerald-950 hover:text-white rounded-lg" href="#">User and Driver Management</a>
            </li>

            <li>
                <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg" href="#">Ride Management</a>

            </li>

            <li>
                <a href="{{ url('/auth.login') }}" class="text-red-600 hover:text-red-900 block px-4 py-2.5 text-slate-800 font-semibold hover:bg-red-500 hover:text-white rounded-lg">logout</a>

            </li>
        </ul>
    </nav>
    <div class="right w-full flex gap-2 flex-col">
        <div class="p-4">
            <h1 class="text-xl font-semibold text-slate-500 mt-8 ml-20 page-title">Users</h1>
        </div>
        <div>
           
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-2  md:space-y-0 space-x-0 px-[368.5px] py-2 bg-white dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative flex ">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
        </div>
    </div>
    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-100">
            <tr>
               
                <th scope="col" class="px-8 py-3">
                    ID
                </th>
                <th scope="col" class="px-8 py-3">
                    Name
                </th>
                <th scope="col" class="px-8 py-3">
                    Email
                </th>
                <th scope="col" class="px-8 py-3">
                    Role
                </th>
                <th scope="col" class="px-8 py-3">
                    Created At
                </th>
            
                <th scope="col" class="px-2 py-3">
                    Action
                </th>
                
            </tr>
        </thead>
        @foreach ($user as $users )
            
       
        <tbody>
            <tr class="text-gray-900 dark:text-gray-700">
              
              <td class="px-8 py-4 whitespace-nowrap">
                {{ $users->id }}
              </td>
              <td class="px-8 py-4 whitespace-nowrap">
                {{ $users->name }}
              </td>
              <td class="px-8 py-4 text-blueGray-600">{{ $users->email }}</td>
              <td class="px-8 py-4 text-blueGray-600 font-semibold">{{ $users->role }}</td>
              <td class="px-8 py-4 ">
                {{ $users->created_at }}
              </td>
              <td class="px-2 py-4 whitespace-nowrap  text-sm font-medium">
                <a href="#" class="text-green-600 hover:text-green-900">Edit</a>
                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
              </td>
            </tr>
                
            
       
        </tbody>
         @endforeach
    </table>
  

@endsection
