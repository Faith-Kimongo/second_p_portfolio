<span class="inline-flex items-center text-sm">
    <button wire:click="like" type="button" class="{{ $myhustle->isLiked() ? 'text-pink-700 hover:text-pink-800' : 'text-gray-400 hover:text-gray-500' }} like-button inline-flex space-x-2 text-gray-400 hover:text-gray-500">
      <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z" />
      </svg>
      <span class="font-medium text-gray-900">{{$count}}</span>
      <span class="sr-only">likes</span>
    </button>
</span>
