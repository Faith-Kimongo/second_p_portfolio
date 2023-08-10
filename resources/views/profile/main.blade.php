<x-app-layout>
  <div class="mt-2 w-full relative mx-auto max-w-7xl px-4 lg:px-2">

  @if (Auth::user()->completion_percentage < 80)
  <x-alert  :message="'Please update your profile to be listed on Find Talents'"/>
  @endif
  <section class="mt-2" aria-labelledby="profile-overview-title">
    <div class="overflow-hidden rounded-lg bg-white shadow">
      <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
      <div class="bg-white p-6">
        <div class="sm:flex sm:items-center sm:justify-between">
          <div class="sm:flex sm:space-x-5">
            <div class="flex-shrink-0">
              <a href="{{route('profile.show')}}">
                <img class="mx-auto h-20 w-20 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="">
              </a>
            </div>
            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
              <p class="text-sm font-medium text-gray-600">Welcome back,</p>
              <p class="text-xl font-bold text-gray-900 sm:text-2xl">{{Auth::user()->name}}</p>
              <p class="text-sm font-medium text-gray-600"> </p>
            </div>
          </div>
          <div class="mt-5 flex justify-center sm:mt-0">
            <a href="{{route('profile.show')}}" class="flex items-center justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Edit profile</a>
          </div>
        </div>
      </div>
      {{-- <div class="grid grid-cols-1 divide-y divide-gray-200 border-t border-gray-200 bg-gray-50 sm:grid-cols-3 sm:divide-x sm:divide-y-0">
        <div class="px-6 py-5 text-center text-sm font-medium">
          <span class="text-gray-900">12</span>
          <span class="text-gray-600">Vacation days left</span>
        </div>

        <div class="px-6 py-5 text-center text-sm font-medium">
          <span class="text-gray-900">4</span>
          <span class="text-gray-600">Sick days left</span>
        </div>

        <div class="px-6 py-5 text-center text-sm font-medium">
          <span class="text-gray-900">2</span>
          <span class="text-gray-600">Personal days left</span>
        </div>
      </div> --}}
    </div>
  </section>
  @if ($errors->any())
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
      <ul class="list-disc list-inside">
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif


@if (session('success'))
  <div class="rounded-md bg-green-50 p-4">
    <div class="flex">
      <div class="flex-shrink-0">
        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M18.707,5.293 C19.098,5.684 19.098,6.316 18.707,6.707 L9.707,15.707 C9.316,16.098 8.684,16.098 8.293,15.707 L1.293,8.707 C0.902,8.316 0.902,7.684 1.293,7.293 C1.684,6.902 2.316,6.902 2.707,7.293 L9,13.586 L17.293,5.293 C17.684,4.902 18.316,4.902 18.707,5.293 Z"></path>
        </svg>
      </div>
      <div class="ml-3">
        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
      </div>
    </div>
  </div>
@endif



  <div class="mt-4 grid grid-row-1 gap-4 sm:grid-cols-2">
    <ul>
      <li class="shadow-xl rounded-2xl p-4">
      <div >
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
          <div class="ml-4 mt-2">
            <h3 class="text-sm font-medium leading-6 text-black font-bold">Career Bio</h3>
          </div>
          <div class="ml-4 mt-4 flex-shrink-0">
            <a  href="{{route('profile.show')}}" id="modal-bio" class="trigger">
              <button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="#fff" d="M21.5 5.5l-3-3c-.5-.5-1.2-.5-1.7 0l-1.8 1.8 3.7 3.7 1.8-1.8c.5-.5.5-1.2 0-1.7zM2.5 18.5V22h3.5l11.6-11.6-3.5-3.5L2.5 18.5z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
              </svg>
              
            </button></a>
          </div>
      </div>
      @if (Auth::user()->bio)
      <p class="text-gray-500 pb-8 text-sm"> {{Auth::user()->bio}} </p>
      @else
      <p class="text-gray-500 pb-8 text-sm"> No career bio now, please click the above code to add </p>

      @endif

    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4">
     

      {{-- Modal start --}}
     
      
      {{-- Modal end --}}
    
      <div class="px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Education</h1>
            <p class="mt-2 text-sm text-gray-700">Your education  list.</p>
          </div>
          <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{route('profile.education.create')}}" type="button" class="block rounded-md bg-pink-700 py-1.5 px-3 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="#fff" d="M10 10V2c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v8h8c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1h-8v8c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-8H2c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1h8z"/>
              </svg>
            </a>
          </div>
        </div>
        <div class="mt-8 flow-root">
          <div class="-my-2 -mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle">
              <table class="min-w-full border-separate border-spacing-0">
                <thead>
                  <tr>
                    <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:pl-8">Institution Name</th>
                    <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Field</th>
                    <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pr-6 pl-3 backdrop-blur backdrop-filter lg:pr-8">From - To
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @forelse (Auth::user()->educations as $education)
                  <tr>
                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-6 pr-3 text-sm font-medium text-gray-900 lg:pl-8">{{$education->name}} </td>
                    <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">{{$education->field}}</td>
                    {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">lindsay.walton@example.com</td> --}}
                    {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">Member</td> --}}
                    <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-6 pl-3 text-left text-sm font-medium lg:pr-8">
                      {{$education->start_date->format('Y')}}-{{$education->end_date->format('Y')}}
                    </td>
                    <td>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                      </svg>

                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-6 pr-3 text-sm font-medium text-gray-900 lg:pl-8">                    
                      No Education added yet
                    </td>

                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4">
     
      <div class="px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Work Experience</h1>
            <p class="mt-2 text-sm text-gray-700">Your job experience list.</p>
          </div>
          <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{route('experience.create')}}" type="button" class="block rounded-md bg-pink-700 py-1.5 px-3 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="#fff" d="M10 10V2c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v8h8c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1h-8v8c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-8H2c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1h8z"/>
              </svg>
            </a>
          </div>
        </div>
        <div class="mt-8 flow-root">
          <div class="-my-2 -mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle">
              <table class="min-w-full border-separate border-spacing-0">
                <thead>
                  <tr>
                    <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:pl-8">Employer Name</th>
                    <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Job Title</th>
                    <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pr-6 pl-3 backdrop-blur backdrop-filter lg:pr-8">From - To
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @forelse (Auth::user()->experiences as $experience)
                  <tr>
                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-6 pr-3 text-sm font-medium text-gray-900 lg:pl-8">{{$experience->employer_name}} </td>
                    <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">{{$experience->job_title}}</td>
                    {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">lindsay.walton@example.com</td> --}}
                    {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">Member</td> --}}
                    <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-6 pl-3 text-left text-sm font-medium lg:pr-8">
                      {{$experience->start_date->format('Y')}}-{{$experience->end_date->format('Y')}}
                    </td>
                    <td>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                      </svg>

                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-6 pr-3 text-sm font-medium text-gray-900 lg:pl-8">No experience added yet
                    </td>

                  </tr>
                  @endforelse
                  
      
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      


    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4 mb-3">
      
      <div class="px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Skillset</h1>
            <p class="mt-2 text-sm text-gray-700">Your skills list.</p>
          </div>
          <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{route('skills.create')}}" type="button" class="block rounded-md bg-pink-700 py-1.5 px-3 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="#fff" d="M10 10V2c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v8h8c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1h-8v8c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-8H2c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1h8z"/>
              </svg>
            </a>

            
          </div>
        </div>
        <div class="mt-8 flow-root">
          <div class="-my-2 -mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle">
              <table class="min-w-full border-separate border-spacing-0">
                <thead>
                  <tr>
                    <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:pl-8">Skills</th>
                    <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell"></th>
                    
                  </tr>
                </thead>
                <tbody>
                  @forelse (Auth::user()->skills as $skill)
                  <tr>
                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-6 pr-3 text-sm font-medium text-gray-900 lg:pl-8">{{$skill->name}} </td>
                    
                    {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">lindsay.walton@example.com</td> --}}
                    {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">Member</td> --}}
                    
                    </td>
                    <td>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                      </svg>

                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-6 pr-3 text-sm font-medium text-gray-900 lg:pl-8">                    
                      No Skill added yet
                    </td>

                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4 mb-3">
      
      <div class="px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Curriculum Vitae (CV)</h1>
          </div>
        
        </div>
        <div class="mt-4 flow-root">
          <div class="-my-2 -mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle">
              <table class="min-w-full border-separate border-spacing-0">
               
                <tbody>
                   
                    
                     
                          @if (auth()->user()->cv)
                          <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                              <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                  <div class="flex w-0 flex-1 items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-2 w-0 flex-1 truncate">{{Auth::user()->cv}}</span>
                                  </div>
                                  <div class="ml-4 flex-shrink-0">
                                    <a href=" {{ route('user-profile.downloadcv')}} " class="font-medium text-pink-700 hover:text-pink-600">Download</a>
                                  </div>
                                </li>
                               
                              </ul>
                            </dd>
                          </div>
                          @else
                          <div class="rounded-md bg-blue-50 p-4">
                            <div class="flex">
                              <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd" />
                                </svg>
                              </div>
                              <div class="ml-3 flex-1 md:flex md:justify-between">
                                <p class="text-sm text-pink-700">Please upload your CV below</p>
                               
                              </div>
                            </div>
                          </div>
                          
                          @endif
                  

             
                  <div>
                   
                    <form method="POST" action="{{ route('user-profile.uploadcv') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="mt-2 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                          <div class="space-y-1 text-center">
                              <div class="flex text-sm text-gray-600">
                                  <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-pink-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-pink-600">
                                      <span>Upload a file</span>
                                      <input id="file-upload" name="file-upload" type="file" >
                                  </label>
                                  <p class="pl-1">or drag and drop</p>
                              </div>
                              <p class="text-xs text-gray-500">PDF to 10MB</p>
                          </div>
                      </div>
                      <button type="submit" class="mt-3 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900 ml-5">Save</button>
                  </form>
                  </div>
                </div>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>

  <div class="shadow-2xl m-4 rounded-2xl p-6">
  

    <div class="mt-10">
      <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-wrap">
        <div class="ml-4 mt-2">
          <h3 class="text-lg font-medium leading-6 text-black font-bold">Job Applications</h3>
        </div>
        <div class="ml-4 mt-2 flex-shrink-0">
          <a href=""><p class="text-sm text-blue-700">View my job application</p></a>
        </div>
    </div>
    <div class="mt-4 grid grid-cols-1 gap-4 flex items-center">
      <div class="mb-4">
        <ul role="list" class="-mb-8 mt-6">
          @forelse (auth()->user()->applications as $application)
          <li>
            <div class="relative pb-8">
                <span class="block inline-flex items-center justify-center rounded-md p-3" aria-hidden="true"></span>
                <div class="relative flex space-x-3">
                  <div>
                    <span class="h-8 w-8 rounded-full flex items-center justify-center ">
                      <!-- Heroicon name: mini/user -->
                      <img class="h-12 w-12 rounded-full object-cover" src="{{ $application->job->user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </span>
                  </div>
                  <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                    <div>
                        <p><a href="#" class="font-medium text-gray-900">{{$application->job->title}}</a></p>
                        <p class="text-gray-600"> {{$application->job->user->name}} </p>
                    </div>

                  </div>

                  <div class="flex min-w-0 flex-1 justify-end space-x-4 pt-1.5">
                    <div>
                        <p><a href="#" class="mt-8 text-gray-600"> {{$application->created_at->diffForHumans()}} </a></p>
                    </div>
                  </div>

                </div>
              </div>
        </li>
          @empty
              
          @endforelse
        

        

       
      </ul>

      </div>
    </div>
    </div>

  </div>



  </div>


  {{-- Bio Modal --}}
  <div id="modal-bio" class="modal">
    <div id="modal-bio" class="mt-24 modal bg-black bg-opacity-50 absolute inset-0 hidden flex justify-center items-center z-10"  >
      <div class="relative w-full max-w-lg h-full lg:h-auto">
        <div id="modal-content" class="bg-gray-200 max-w-4xl rounded-2xl shadow-xl text-gray-800 text-center">
          <div class="modal-title w-full justify-center items-center rounded-xl border-b border-pink-900 bg-gradient-to-r from-teal-800 to-pink-900 shadow-sm hover:from-teal-700 hover:to-pink-900">
            <h3 class="text-md font-medium text-white dark:text-white p-2">Update your Bio</h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="small-modal">
            </button>
          </div>

          <div class="sm:col-span-2 m-6 rounded-lg">
            <div class="flex justify-between">
              <label for="message" class="block text-sm font-medium text-gray-900">Bio</label>
              <!-- <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span> -->
            </div>
            <div class="mt-1">
              <textarea id="message" name="message" rows="4" class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" aria-describedby="message-max"></textarea>
            </div>
          </div>
          <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense" id="buttons">
            <input type="submit" class="mb-5 w-full inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-900 to-pink-900 bg-origin-border px-2 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-teal-900">
            <button id="modal-bio" type="button" class="close-modal mb-5 w-full inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-900 to-pink-900 bg-origin-border px-2 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-teal-900" >Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</x-app-layout>
