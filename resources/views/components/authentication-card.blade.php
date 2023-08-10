<div class="flex flex-col sm:flex-col sm:justify-center items-center pt-0 sm:pt-0 bg-gray-100 max-w-md" >

    <div class="text-2xl font-bold leading-7 text-gray-700 sm:truncate sm:text-3xl sm:tracking-tight">
        {{ $header }}
    </div>
    <div class="sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg space-x-4">
        {{ $slot }}
    </div>
</div>
