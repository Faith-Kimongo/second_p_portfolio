<div>


    @if($show_rep)
    <div class="relative px-4 pt-4 pb-20 sm:px-6 lg:px-8 lg:pt-6 lg:pb-28 rounded-2xl flex justify-center">
        <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12 shadow-lg rounded-2xl">
            <h3 class="text-xl font-bold text-indigo-900 text-center">Company Representative Sign Up</h3>
            <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              <div>
                <label for="first-name" class="block text-sm font-medium text-warm-gray-900">First Name</label>
                <div class="mt-1">
                  <input type="text" wire:model="first_name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="First Name">
                
                  @error('first_name')
                  <span class="error-label text-red-500">{{ $message }}</span>
                @enderror
                </div>
              </div>
              <div>
                <label for="last-name" class="block text-sm font-medium text-warm-gray-900">Last Name</label>
                <div class="mt-1">
                  <input type="text" wire:model="last_name"id="last-name" autocomplete="family-name" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Last Name">
                  @error('last_name')
                  <span class="error-label text-red-500">{{ $message }}</span>
                @enderror
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="subject" class="block text-sm font-medium text-warm-gray-900">Work Email</label>
                <div class="mt-1">
                  <input type="email" wire:model="rep_email" id="email" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Work Email">
                  @error('rep_email')
                  <span class="error-label text-red-500">{{ $message }}</span>
                @enderror
                </div>
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-warm-gray-900">Position in Company</label>
                <div class="mt-1">
                  <input id="position" wire:model="position" type="text" autocomplete="position" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Position in Company">
                  @error('position')
                  <span class="error-label text-red-500">{{ $message }}</span>
                @enderror
                </div>
              </div>
              <div>
                <div class="flex justify-between">
                  <label for="phone" class="block text-sm font-medium text-warm-gray-900">Phone Number</label>
                </div>
                <div class="mt-1">
                  <input type="text" wire:model="rep_phone" id="phone" autocomplete="tel" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Phone">
                
                  @error('rep_phone')
                  <span class="error-label text-red-500">{{ $message }}</span>
                @enderror
            </div>
              </div>
              
              <p class="text-gray-400">Have an account? <a href="Login.html" class="text-indigo-600">Log In</a> </p>
              <div class="sm:col-span-2 sm:flex sm:justify-end">
                
                <a href="/companies#"  class="mt-2 inline-flex w-full items-left mr-4 justify-center rounded-md border border-transparent bg-red-800 px-6 py-3 text-base font-medium text-white shadow-lg hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-pink-800 focus:ring-offset-2 sm:w-auto">Cancel</a>
                <button wire:click="rep" class="mt-2 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-pink-800 px-6 py-3 text-base font-medium text-white shadow-lg hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-pink-800 focus:ring-offset-2 sm:w-auto">Next</button>
              
                
              </div>
            </div>
          </div>
        </div>
        @elseif($show_details)
        <div class="relative px-4 pt-4 pb-20 sm:px-6 lg:px-8 lg:pt-6 lg:pb-28 rounded-2xl flex justify-center">
            <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12 shadow-lg rounded-2xl">
                <h3 class="text-xl font-bold text-indigo-900 text-center">Company Details</h3>
                <div  class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                  <div>
                    <label for="first-name" class="block text-sm font-medium text-warm-gray-900">Company Name</label>
                    <div class="mt-1">
                      <input type="text" wire:model="company_name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Company Name">
                  
                      @error('company_name')
                      <span class="error-label text-red-500">{{ $message }}</span>
                    @enderror
                  
                    </div>
                  </div>
                  <div>
                    <label for="last-name" class="block text-sm font-medium text-warm-gray-900">Organization Size</label>
                    <div class="mt-1">
                      <input type="number" wire:model="company_size" id="last-name" autocomplete="family-name" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Organization Size">
                   
                      @error('company_size')
                      <span class="error-label text-red-500">{{ $message }}</span>
                    @enderror
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="subject" class="block text-sm font-medium text-warm-gray-900">Primary Country of Operation</label>
                    <div class="mt-1">
                      <input type="text" wire:model="company_country" id="subject" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Primary Country of Operation">
                      @error('company_country')
                      <span class="error-label text-red-500">{{ $message }}</span>
                    @enderror
                    
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="subject" class="block text-sm font-medium text-warm-gray-900">Company Email</label>
                    <div class="mt-1">
                      <input type="email" wire:model="company_email" id="subject" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Primary Country of Operation">
                      @error('company_email')
                      <span class="error-label text-red-500">{{ $message }}</span>
                    @enderror
                    
                    </div>
                  </div>

                  <div class="sm:col-span-2 mt-6">
                    <div class="flex justify-between">
                      <label for="message" class="block text-sm font-medium text-gray-900">Company Bio</label>
                      <!-- <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span> -->
                    </div>
                    <div class="mt-1">
                      <textarea id="company_bio" wire:model="company_bio" rows="4" placeholder="Professional company bio that best describes you" class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" aria-describedby="message-max"></textarea>
                      @error('company_bio')
                      <span class="error-label text-red-500">{{ $message }}</span>
                    @enderror
                    
                    </div>
                  </div>



                  <div>
                    <label for="email" class="block text-sm font-medium text-warm-gray-900">Website URL</label>
                    <div class="mt-1">
                      <input id="website" wire:model="company_website" type="text" autocomplete="website" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Website URL">
                      @error('company_website')
                      <span class="error-label text-red-500">{{ $message }}</span>
                    @enderror
                    
                    
                    </div>
                  </div>
                  <div>
                    <div class="flex justify-between">
                      <label for="phone" class="block text-sm font-medium text-warm-gray-900">Where did you hear about us?</label>
                    </div>
                    <div class="mt-1">
                      <input type="text" wire:model="source" id="phone" autocomplete="tel" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Where did you hear about us?">
                   
                      @error('source')
                      <span class="error-label text-red-500">{{ $message }}</span>
                    @enderror
                    </div>
                  </div>
    
                  <div>
                    <label for="email" class="block text-sm font-medium text-warm-gray-900">Password</label>
                    <div class="mt-1">
                      <input id="password" wire:model="password" type="password" autocomplete="password" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Password">
                   
                      @error('password')
                      <span class="error-label text-red-500">{{ $message }}</span>
                    @enderror
                   
                    </div>
                  </div>
                  <div>
                    <div class="flex justify-between">
                      <label for="phone" class="block text-sm font-medium text-warm-gray-900">Confirm Password</label>
                    </div>
                    <div class="mt-1">
                      <input type="password" wire:model="password_confirmation" id="phone" autocomplete="tel" class="block w-full rounded-md border border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" placeholder="Confirm Password">
                   
                      @error('password_confirmation')
                      <span class="error-label text-red-500">{{ $message }}</span>
                    @enderror
                 </div>
                  </div>
    
                  
                  <div class="sm:col-span-2 sm:flex sm:justify-end">
                    <!-- <div class="flex justify-start">
                        <p class="text-gray-500 dark:text-gray-400">The free updates that will be provided is based on the <a href="#" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">roadmap</a> that we have laid out for this project.  </p>
                    </div> -->
    
                    <button wire:click="register" class="mt-2 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-pink-800 px-6 py-3 text-base font-medium text-white shadow-lg hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-pink-800 focus:ring-offset-2 sm:w-auto">Create Account</button>
                  </div>
                </div>
              </div>
            </div>
        @endif
</div>
