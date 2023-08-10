<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex w-full justify-center rounded-md border border-transparent bg-pink-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-900 focus:ring-offset-2']) }}>
    {{ $slot }}
</button>
