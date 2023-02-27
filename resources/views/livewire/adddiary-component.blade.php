<div class="">
    <livewire:toastr />
    <div class=" border-b border-gray-300 dark:border-opacity-20 ">
        <div class="max-w-6xl mx-auto px-6  flex justify-between  py-16">
            <h1 class="sm:text-4xl text-xl text-newgray-900 dark:text-newgray-300 font-semibold ">Green Diary Form</h1>
            <div class="z-30">
                <button wire:loading.remove wire:target='storediary'  wire:click='storediary' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    Save
                </button>
                <button wire:loading wire:target='storediary' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 md:px-8  py-8 min-h-screen" x-data="{ tabs: 'english' }">

        <div  class="overflow-x-auto scrollbar-hide whitespace-nowrap   subpixel-antialiased flex mb-6 justify-end">
            {{-- tabs english --}}
            <div @click="tabs='english'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
            :class="{ 'border-b-2 border-newgray-900 dark:border-gray-300' : tabs === 'english' }"
            >
                <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                :class="{ 'font-black' : tabs === 'english' }"
                >English</a>
            </div>
            {{-- tabs indonesia --}}
            <div @click="tabs='indonesia'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
            :class="{ 'border-b-2 border-newgray-900 dark:border-gray-300' : tabs === 'indonesia' }"
            >
                <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                :class="{ 'font-bold' : tabs === 'indonesia' }"
                >Indonesia</a>
            </div>

        </div>
    <div class="grid grid-cols-12 gap-x-4" >
        <div class= "sm:col-span-3 col-span-12" >
            <div class="">
                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6 ">
                    <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Publish Date</h1>
                    <div wire:ignore x-init="flatpickr('#publishdate', { enableTime: false,dateFormat: 'Y-m-d ', disableMobile: 'true'});">
                    <input id="publishdate" type="text" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20 "  wire:model.defer='publishdate' placeholder="Date. . . ">
                    </div>
                </div>
            </div>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6 ">
                <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Status</h1>
                <label class="w-full"  >
                    <select wire:model='isactive' class=" mb-6 bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20">
                        <option value="1">Publish</option>
                        <option value="0">Non Publish</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="sm:col-span-9 col-span-12 " >
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{count1:0}">
                <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-6">Image </h1>
                <div class="flex items-center justify-center px-2 py-2 border border-dashed border-gray-400 rounded" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <label class="cursor-pointer">
                        @if (!$photo)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                          </svg>
                        @else
                            @if ($filetypeupload)
                            <video class=" mx-auto sm:h-96 h-full w-full rounded " controls>
                                <source src="{{$photo->temporaryUrl()}}" type="video/mp4">
                            </video>
                                    @else
                                <img src="{{$photo->temporaryUrl()}}" alt="" class=" mx-auto sm:h-96 h-full w-full rounded ">

                            @endif
                        @endif
                        <input type='file' class="hidden" wire:model='photo' accept="image/*, video/*"/>
                        <p wire:loading.remove wire:target="photo" class="text-xs text-center text-gray-400 mt-2">Clik to upload image</p>
                        {{-- <p wire:loading wire:target="photo" class="text-xs text-center text-gray-400" id="proses"></p> --}}
                        <div x-show.transition="isUploading" class="progress progress-sm mt-2 rounded flex justify-center">
                                <span class="text-xs text-white" x-text="'Uploading ' + progress + '%'"></span>
                        </div>
                    </label>
                </div>

            </div>
            {{-- tab english --}}

            <div x-show="tabs==='english'" x-cloak style="display: none !important">
                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{count1:0}">
                    <h1 class="text-2xl font-semibold mt-4  text-newbg-newgray-900 dark:text-gray-300 mb-6">Image Description</h1>
                    <textarea maxlength="155" x-ref="countme1" x-on:keyup="count1 = $refs.countme1.value.length"  rows="6"  wire:model.defer='imgDescEN' required class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20" placeholder="Description. . ."></textarea>
                    <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs">
                        <span x-html="count1"></span> / <span  x-html="$refs.countme1.maxLength"></span>
                      </div>
                </div>
                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{count:0}">
                    <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Title</h1>
                    <input maxlength="60" x-ref="countme" x-on:keyup="count = $refs.countme.value.length" type="text" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='titleEN' placeholder="Title. . . ">
                    <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs mt-2">
                        <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                      </div>
                </div>


            </div>

            {{-- tab indonesia --}}
            <div x-show="tabs==='indonesia'" x-cloak style="display: none !important">
                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{count1:0}">
                    <h1 class="text-2xl font-semibold mt-4  text-newbg-newgray-900 dark:text-gray-300 mb-6">Image Description</h1>
                    <textarea maxlength="155" x-ref="countme1" x-on:keyup="count1 = $refs.countme1.value.length"  rows="6"  wire:model.defer='imgDescID' required class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20" placeholder="Description. . ."></textarea>
                    <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs">
                        <span x-html="count1"></span> / <span  x-html="$refs.countme1.maxLength"></span>
                      </div>
                </div>
                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{count:0}">
                    <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Title</h1>
                    <input maxlength="60" x-ref="countme" x-on:keyup="count = $refs.countme.value.length" type="text" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='titleID' placeholder="Title. . . ">
                    <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs mt-2">
                        <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                      </div>
                </div>




            </div>



        </div>
    </div>
    </div>
</div>
