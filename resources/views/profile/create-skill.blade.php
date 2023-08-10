<x-app-layout>
  <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- Session --}}
  
          <div class="mx-auto max-w-4xl py-16 px-4 sm:py-8 sm:px-6 lg:px-8">
             
            <div class="rounded-2xl bg-white shadow-2xl">
        
              <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Contact information -->
              
                <!-- Contact form -->
                <div class="py-4 px-6 sm:px-10 lg:col-span-4 xl:pt-1">
                  <div class="flex  justify-center p-4 border-b border-gray-200">
                      <h3 class="text-lg font-medium leading-6 text-gray-900">Add Skills</h3>
                    </div>
  
  @if (session('success'))
  <div class="rounded-md bg-green-50 p-4">
    <div class="flex">
      <div class="flex-shrink-0">
        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
        </svg>
      </div>
      <div class="ml-3">
        <h3 class="text-sm font-medium text-green-800"> {{ session('success')}} </h3>
        <div class="mt-2 text-sm text-green-700">
          <p>Skill added successfully.</p>
        </div>
        <div class="mt-4">
          <div class="-mx-2 -my-1.5 flex">
            <a href="{{route('user-profile')}}" type="button" class="rounded-md bg-green-50 px-2 py-1.5 text-sm font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">View Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  @endif  
  <div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
      <h3 class="text-lg font-medium leading-6 text-gray-900">Update your skills</h3>
      <div class="mt-2 max-w-xl text-sm text-gray-500">
        <p>Add 5 best your skills to boost your job recommendations.</p>
      </div>
      <form method="POST" action="{{route('profile.skills.save')}}" class="mt-5 sm:flex sm:items-center">
        @csrf
        <div class="w-full sm:max-w-xs">
          <label for="email" class="sr-only">Skill(s)</label>
          <select multiple="multiple" id="location" name="skills[]" class="js-example-basic-single mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-pink-600 focus:outline-none focus:ring-pink-500 sm:text-sm">
            @foreach ($skills as $skill)
    <option value="{{$skill->id}}" @if (in_array($skill->id, Auth::user()->skills->pluck('id')->toArray()))
      selected
    @endif> {{$skill->name}} </option>
  @endforeach
           
          </select>


        </div>
        <button type="submit" class="mt-3 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-pink-700 px-4 py-2 font-medium text-white shadow-sm hover:bg-pink-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Save</button>
      </form>
    </div>
  </div>

  <div class="px-6 lg:px-8">
  
    <div class="-mx-6 mt-8 sm:-mx-0">
      <table class="min-w-full divide-y divide-gray-300">
        <thead>
          <tr>
            <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Skill(s)</th>
           
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">
          @forelse (Auth::user()->skills as $skill)
          <tr>
            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{$skill->name}}</td>
          </tr>
          @empty
          <tr>
            <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900 sm:pl-0">No skills added yet</td>
          </tr>
          @endforelse
        
        </tbody>
      </table>
    </div>
  </div>

  <script>
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2({
      maximumSelectionLength: 5,
      placeholder: 'Search for your skill',

    });
});
  </script>
  
  
  </x-app-layout>