@extends('incfile.header')
@section('content')

    <div id="body" class="bg-slate-50 h-screen flex">
    <nav class="bg-white w-80 h-screen flex flex-col gap-10 border-r border-slate-100">
        <div class="logo text-2xl font-bold text-center h-16 flex items-center justify-center">MY-TAXI</div>
        <div class="user flex items-center justify-center flex-col gap-4 border-b border-emerald-slate-50 py-4">
            <img class="w-24 rounded-full shadow-xl" src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png">
            <div class="flex flex-col items-center">
                <span class="font-semibold text-lg text-emerald-700">UserName</span>
                <span class="text-slate-400 text-sm">Role</span>
            </div>
           
        </div>

        <ul class="px-6 space-y-2">
            <li>
                <a class="block px-4 py-2.5 text-slate-800 font-semibold  hover:bg-emerald-950 hover:text-white rounded-lg" href="#">Trajet</a>
            </li>
           
            <li>
                <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg" href="#">Navigation</a>
            </li>
          
            <li>
                <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg" href="#">Historique</a>
            </li>
            <li>
              <a href=" {{ url('/auth.login') }}" class="text-red-600 hover:text-red-900 block px-4 py-2.5 text-slate-800 font-semibold hover:bg-red-500 hover:text-white rounded-lg">logout</a>

            </li>
          
        </ul>
    </nav>
    <div class="right w-full flex gap-2 flex-col">
        <div class="p-4">
            <h1 class="text-xl font-semibold text-slate-500 mt-8 ml-20 page-title">Page Name</h1>
        </div>
        <div class="flex flex-col items-centre  ">
          <div class="flex flex-col w-48 ml-[1600px]  ">
                <button id="btn" class="border-2 px-2 py-2  rounded-2xl font-semibold text-white bg-emerald-950 ">
              Ajouter un trajet
          </button>
          </div>
          <div id="form" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 scale-0 duration-300">
           <form action="{{ route('trajet') }}" method="POST" class="absolout mt-28  w-[700px] mx-auto bg-emerald-950  ">
              @csrf <!-- Add this to include the CSRF token -->
              
              <div class="flex mr-9 mb-9 mt-5 justify-end">
                <svg id="closeForm" class="w-6 h-6 text-white dark:text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
              </div>
              
              <div class="flex justify-center">
                <h1 class="text-white font-bold text-2xl">Add Recipe</h1>
              </div>
              
              <div class="relative z-0 w-full ml-44 mt-5 mb-5 group">
                <input type="text" name="depart" id="depart" class="block py-2.5 px-0 w-96  text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="depart" class="peer-focus:font-medium absolute ml-[20%] text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white font-bold peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">DEPART</label>
              </div>
              
              <div class="relative z-0 w-full mb-5 ml-44 group">
                <input type="text" name="destination" id="destination" class="block py-2.5 px-0 w-96  text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " required />
                <label for="destination" class="peer-focus:font-medium absolute ml-[18%]  text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white font-bold peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">DESTINATION</label>
              </div>
              <div class="relative z-0 w-full ml-44 mb-5 group">
                <input type="text" name="place" id="place" class="block py-2.5 px-0 w-96   text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " required />
                <label for="place	" class="peer-focus:font-medium absolute ml-[19%]  text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white font-bold peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nº DU PLACE	</label>
              </div>
              
            
              
              <div class="grid md:grid-cols-2 ml-[37%] md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <label for="devis" class="block mb-2 ml-[20%]  text-sm font-bold text-white">Select Devis</label>
                    <select id="devis"  name="devis" class="bg-emerald-950 border-0 border-b-2 border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-blue-500 block w-full p-2.5 dark:border-white dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      
                      <option value="DIRHAME">DIRHAME</option>
                      <option value="DOLLAR">DOLLAR</option>
                      <option value="EURO">EURO</option>
                      
                  </select>
                </div>
              
              </div>
              
              <div class="flex justify-center">
                <button type="submit" class="text-black bg-gray-200 hover:bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                <a href=""></a>
              </div>
              </form> 
    </div>
       
        </div>

       
<script src="{{asset('js/script.js') }}"></script> 

@endsection