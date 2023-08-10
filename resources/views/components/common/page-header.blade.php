<div>
    <div>
        <nav class="sm:hidden" aria-label="Back">
            <a href="" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                <svg class="-ml-1 mr-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                        clip-rule="evenodd" />
                </svg>
                Back
            </a>
        </nav>
        <nav class="hidden sm:flex" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-4">

                @if (isset($backurl))
                <li>
                    <div class="flex">
                        <a href=" {{ $backurl }} "
                            class="text-sm font-medium text-gray-500 hover:text-gray-700"> {{$backtitle}} </a>
                    </div>
                </li>
                @endif
               
                @if (isset($currenturl))
                <li>
                    <div class="flex items-center">
                        <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href=" {{$currenturl}} "
                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"> {{$title}} </a>
                    </div>
                </li>
                @endif
                <li>
                    <div class="flex items-center">


                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <div class="mt-2 md:flex md:items-center md:justify-between">
        <div class="min-w-0 flex-1">
            <h2
                class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                {{$title}}</h2>
        </div>

    </div>
</div>
@auth
<div class="mt-2">
    <a href="{{ route('job.index') }}" class="font-semibold hover:text-blue-800 text-pink-700">Jobs</a> |
    <a href="{{ route('saved-jobs.index') }}" class="font-semibold hover:text-pink-700">Saved Jobs </a> |
    <a href="{{ route('job.applications') }}" class="font-semibold hover:text-pink-700"> Applications </a>
</div>
@endauth


<hr class="m-4">



