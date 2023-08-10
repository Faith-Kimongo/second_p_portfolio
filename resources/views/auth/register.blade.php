<x-app-layout>
    <div class="mt-2 w-full relative mx-auto max-w-7xl px-4 lg:px-2">

    {{-- <div class="sm:mx-auto  sm:max-w-md">
        <h2 class="mt-6 text-center text-2xl font-bold tracking-tight text-gray-900">Sign up on Ajiry</h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          <a href=" {{route('login')}} " class="font-medium text-gray-600 hover:underline">Or login if you have an account</a>
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 mt-4 mr-3">
        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg md:mx-48 hidden md:flex">
            <video autoplay loop muted class="rounded-lg object-fit"><source src="images/slowed-video.mp4" type="video/mp4"/></video>
        </div>
        <x-authentication-card>


            

            <x-slot name="header">
            </x-slot>

            <x-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <div>
                    <x-label for="name" value="{{ __('First Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
                </div>
                <div class="mt-4">
                    <x-label for="name" value="{{ __('Last Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif
                
                <div class="flex items-center justify-end mt-4">
                   
                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                  
                   
                </div>

                <div class="p-2">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            
            </form>
        </x-authentication-card>
      </div> --}}

      <div class="flex min-h-full">
        <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
          <div class="mx-auto w-full max-w-sm lg:w-96">
            <div class="sm:mx-auto  sm:max-w-md">
                <h2 class="mt-6 text-center text-2xl font-bold tracking-tight text-gray-900">Sign up on Ajiry</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                  <a href=" {{route('login')}} " class="font-medium text-gray-600 hover:underline">Or login if you have an account</a>
                </p>
              </div>
      
            <div class="mt-10">
              <div>
                <x-authentication-card>


            

                    <x-slot name="header">
                    </x-slot>
        
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div>
                            <x-label for="name" value="{{ __('First Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="mt-4">
                            <x-label for="name" value="{{ __('Last Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
                        </div>
        
                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>
        
                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>
        
                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
        
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />
        
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif
                        
                        <div class="flex items-center justify-end mt-4">
                           
                            <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>
                        
                           
                        </div>
        
                        <div class="p-2">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    
                    </form>
                </x-authentication-card>
              </div>
      
              <div class="mt-10">
               
      
                
              </div>
            </div>
          </div>
        </div>
        <div class="relative hidden w-0 flex-1 lg:block">
          <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1496917756835-20cb06e75b4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="">
        </div>
      </div>
    </div>
     
</x-app-layout>
