<div class="">
    <livewire:toastr />
    <div class=" border-b border-gray-300 dark:border-opacity-20 ">
        <div class="max-w-6xl mx-auto px-6  flex justify-between  py-16">
            <h1 class="sm:text-4xl text-xl text-newgray-900 dark:text-newgray-300 font-semibold ">A-Z Restoration Form</h1>
            <div class="z-30">
                <button wire:loading.remove wire:target='storeaz'  wire:click='storeaz' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    Save
                </button>
                <button wire:loading wire:target='storeaz' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 md:px-8  py-8 min-h-screen" x-data="{ tabs: 'english' }">
        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6 flex gap-4">
            <div class="w-full">
                <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Category</h1>
                <select wire:model="category" class=" mb-6 bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20">
                    <option value="">...</option>
                    <option value="konteks">Konteks</option>
                    <option value="silvikultur">Silvikultur</option>
                    <option value="penanggulangankebakaran">Penanggulangan Kebakaran</option>
                    <option value="pelibatanmasyarakat">Pelibatan Masyarakat</option>
                </select>
            </div>

            <div class="w-full">
                <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Publish</h1>
                <select wire:model="is_active" class=" mb-6 bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20">
                    <option value="1">Publish</option>
                    <option value="0">Non Publish</option>
                </select>
            </div>

        </div>
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

        <div class="col-span-12 " >
            {{-- tab english --}}

            <div x-show="tabs==='english'" x-cloak style="display: none !important">

                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{count:0}">
                    <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Question</h1>
                    <input  type="text" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='titleEN' placeholder="Title. . . ">

                </div>


                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                    <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-6">Answer </h1>
                    <div class="w-full py-2 mb-6">
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#azEN',
                                height : 500,
                                height : '40vh',
                                relative_urls : false,
                                    remove_script_host : false,
                                    convert_urls : true,

                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],

                                        toolbar: 'fullscreen preview bold italic underline forecolor backcolor |bullist numlist alignleft aligncenter alignright alignjustify outdent indent|  fontselect fontsizeselect formatselect   | ' +
                                                ' | link image | print  media  | ' +
                                                ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        file_picker_callback : function(callback, value, meta) {
                                            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                                            var cmsURL = '/cms/' + 'laravel-filemanager?editor=' + meta.fieldname;
                                            if (meta.filetype == 'image') {
                                                cmsURL = cmsURL + '&type=Images';
                                            } else {
                                                cmsURL = cmsURL + '&type=Files';
                                            }

                                            tinyMCE.activeEditor.windowManager.openUrl({
                                                url : cmsURL,
                                                title : 'Filemanager',
                                                width : x * 0.8,
                                                height : y * 0.8,
                                                resizable : 'yes',
                                                close_previous : 'no',
                                                onMessage: (api, message) => {
                                                callback(message.content);
                                                }

                                            });
                                        },
                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('azEN', editor.getContent());
                                        });

                                    }

                            });">
                            <textarea rows="20" id="azEN" name="azEN"  wire:model.defer='azEN' required></textarea>
                        </div>
                    </div>
                </div>
            </div>

            {{-- tab indonesia --}}
            <div x-show="tabs==='indonesia'" x-cloak style="display: none !important">

                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{count:0}">
                    <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Question</h1>
                    <input type="text" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='titleID' placeholder="Title. . . ">

                </div>



                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                    <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-6">Answer </h1>
                    <div class="w-full py-2 mb-6">
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#azID',
                                height : 500,
                                height : '40vh',
                                relative_urls : false,
                                    remove_script_host : false,
                                    convert_urls : true,

                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],

                                        toolbar: 'fullscreen preview bold italic underline forecolor backcolor |bullist numlist alignleft aligncenter alignright alignjustify outdent indent|  fontselect fontsizeselect formatselect   | ' +
                                                ' | link image | print  media  | ' +
                                                ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        file_picker_callback : function(callback, value, meta) {
                                            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                                            var cmsURL = '/cms/' + 'laravel-filemanager?editor=' + meta.fieldname;
                                            if (meta.filetype == 'image') {
                                                cmsURL = cmsURL + '&type=Images';
                                            } else {
                                                cmsURL = cmsURL + '&type=Files';
                                            }

                                            tinyMCE.activeEditor.windowManager.openUrl({
                                                url : cmsURL,
                                                title : 'Filemanager',
                                                width : x * 0.8,
                                                height : y * 0.8,
                                                resizable : 'yes',
                                                close_previous : 'no',
                                                onMessage: (api, message) => {
                                                callback(message.content);
                                                }

                                            });
                                        },
                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('azID', editor.getContent());
                                        });

                                    }

                            });">
                            <textarea rows="20" id="azID" name="azID"  wire:model.defer='azID' required></textarea>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>
</div>
