<div class="border-b border-gray-300 dark:border-opacity-20 sticky top-0 z-10 ">
    <div class="max-w-6xl mx-auto px-6 "  x-data="{ pages: false }">
        <nav class=" flex sm:space-x-6 sm:justify-start justify-center text-sm leading-5 overflow-x-auto flex-wrap scrollbar-hide text-gray-500">
            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'dashboard' )border-b-2  dark:border-gray-300 border-newgray-900 @endif ">
                <a href="{{url('/cms/dashboard')}}" class=" px-0.5  @if($nav == 'dashboard' )   text-newgray-900 dark:text-gray-300 @endif   hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer" >Dashboard</a>
            </div>
            <div @click="pages = ! pages" @click.away="pages=false" class=" cursor-pointer flex-col flex hover:bg-gray-200 dark:hover:bg-newgray-700 py-3  rounded @if($nav == 'pages' )border-b-2  dark:border-gray-300 border-newgray-900 @endif " x-data="{pages:false}">
                <a   class="px-2 hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer inline-flex   items-center" >Pages
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <div class=" flex flex-col space-y-3 sm:w-2/12 w-full  rounded absolute sm:mt-10 mt-10 z-20 bg-gray-200 dark:bg-newgray-700  px-4 py-2" x-show="pages" x-cloak style="display: none !important">
                    <a  href="{{url('/cms/pagewhoweare')}}" class="hover:text-newgray-900 dark:hover:text-gray-300">Who we are</a>
                    <a href="{{url('/cms/pagewaykambas')}}" class="hover:text-newgray-900 dark:hover:text-gray-300">Way kambas</a>
                    <a href="{{url('/cms/pagerawakadut')}}" class="hover:text-newgray-900 dark:hover:text-gray-300">Restorasi kadut</a>
                    {{-- <a href="{{url('/cms/pagesilvikultur')}}" class="hover:text-newgray-900 dark:hover:text-gray-300">Silvikultur</a> --}}
                </div>
            </div>
            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'az' )border-b-2  dark:border-gray-300 border-newgray-900 @endif">
                <a href="{{url('/cms/cmsaz')}}" class=" px-0.5 py-3  @if($nav == 'az' )  text-newgray-900:text-gray-300 @endif hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer   " >A-Z Restoration</a>
            </div>
            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'story' )border-b-2  dark:border-gray-300 border-newgray-900 @endif">
                <a href="{{url('/cms/cmsstory')}}" class=" px-0.5 py-3  @if($nav == 'story' )  text-newgray-900:text-gray-300 @endif hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer   " >Story</a>
            </div>
            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'diary' )border-b-2  dark:border-gray-300 border-newgray-900 @endif">
                <a href="{{url('/cms/cmsdiary')}}" class=" px-0.5 py-3  @if($nav == 'diary' )  text-newgray-900:text-gray-300 @endif hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer   " >Diary</a>
            </div>
            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'settings' )border-b-2  dark:border-gray-300 border-newgray-900 @endif">
                <a href="{{url('/cms/settings')}}" class=" px-0.5 py-3  @if($nav == 'settings' )  text-newgray-900:text-gray-300 @endif hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer   " >Settings</a>
            </div>

        </nav>
    </div>
</div>
