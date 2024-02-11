<nav class="w-full border-b-2 py-2 flex justify-center items-center" id="navbar-container">
    {{-- mobile navbar --}}
    <div class="w-full flex flex-col items-center lg:hidden" id="navbar-container-icons">
        <div class="w-4/5 flex justify-between items-center">
            <div class="w-14 cursor-pointer flex">
                <img class="w-full" src="{{ Vite::asset('public/assets/ableton-brand.svg') }}" alt="ableton brand">
            </div>
            <div class="w-11 cursor-pointer flex sm:w-12" id="menu-icon-container-open">
                <img class="w-full" src="{{ Vite::asset('public/assets/menu.svg') }}" alt="menu-icon" id="menu-open-icon">
                <img class="w-full hidden" src="{{ Vite::asset('public/assets/menu_open.svg') }}" alt="" id="menu-close-icon">
            </div>
        </div>
        {{-- dropdown menu --}}
        @include('layouts._partials.dropdownmenu')
    </div>
    {{-- desktop navbar --}}
    <div class="hidden lg:flex lg:justify-center lg:items-center lg:w-full">
        <div class="w-full flex justify-between items-center px-5 py-2">
            <div class="flex justify-center items-center gap-5">
                <div class="w-16">
                    <img class="w-full" src="{{ Vite::asset('public/assets/ableton-brand.svg') }}" alt="ableton brand">
                </div>
                <ul class="flex justify-start items-center gap-5 w-3/4 text-base font-semibold">
                    <li class="block"><a href="#">Live</a></li>
                    <li class="block"><a href="#">Push</a></li>
                    <li class="block"><a href="#">Note</a></li>
                    <li class="block"><a href="#">Link</a></li>
                    <li class="block"><a href="#">Shop</a></li>
                    <li class="block"><a href="#">Packs</a></li>
                    <li class="block"><a href="#">Help</a></li>
                    <li class="block text-orange-500"><a href="#">More</a></li>
                </ul>
            </div>
            <div class="flex justify-center items-center gap-5 text-base font-semibold">
                <li class="list-none block text-blue-500"><a href="#">Try Live for free</a></li>
                <li class="list-none block "><a href="#">Log in or register</a></li>
            </div>
        </div>
    </div>
</nav>
