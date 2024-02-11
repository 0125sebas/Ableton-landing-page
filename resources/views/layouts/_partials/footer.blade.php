<footer class="border-t-2 w-screen py-5">
    <section class="w-10/12 mx-auto grid grid-cols-1 gap-8 lg:w-1/2">
        <h1 class="text-4xl font-semibold">Ableton</h1>
        <section class="text-sm flex flex-col gap-2">
            <h5 class="font-bold">Sign up to our newsletter</h5>
            <p class="font-medium">
                Enter your email address to stay up to date with the latest offers, tutorials, downloads, surveys and more.
            </p>
            <div class="text-base flex justify-start items-center">
                <input class="w-4/6 sm:w-4/5 border bg-gray-200 p-1" type="email" placeholder="Email Address">
                <button class="bg-blue-500 text-blue_light-100 font-semibold py-1 px-4 border border-blue-500" type="submit">Sign up</button>
            </div>
        </section>
        <ul class="text-sm font-semibold flex flex-col gap-2">
            <li><a href="#">Register Live or Push</a></li>
            <li><a href="#">About Ableton</a></li>
            <li><a href="#">Jobs</a></li>
        </ul>
        <ul class="flex justify-start items-center gap-8">
            <li class="w-12 cursor-pointer"><img class="w-full" src="{{ Vite::asset('public/assets/facebook-icon.svg') }}" alt=""></li>
            <li class="w-12 cursor-pointer"><img class="w-full" src="{{ Vite::asset('public/assets/twitter-icon.svg') }}" alt=""></li>
            <li class="w-12 cursor-pointer"><img class="w-full" src="{{ Vite::asset('public/assets/youtube-icon.svg') }}" alt=""></li>
            <li class="w-12 cursor-pointer"><img class="w-full" src="{{ Vite::asset('public/assets/instagram-icon.svg') }}" alt=""></li>
        </ul>
        <section class="text-sm">
            <h5 class="font-bold">Education</h5>
            <ul>
                <li><a href="#">Offers for students and teachers</a></li>
                <li><a href="#">Ableton for the classroom</a></li>
                <li><a href="#">Ableton for Colleges and Universities</a></li>
            </ul>
        </section>
        <section class="text-sm">
            <h5 class="font-bold">Community</h5>
            <ul>
                <li><a href="#">Find Ableton User Groups</a></li>
                <li><a href="#">Find Certified Training</a></li>
                <li><a href="#">Become a certified Trainer</a></li>
            </ul>
        </section>
        <section class="text-sm flex flex-col gap-5">
            <h5 class="font-bold">Language and Location</h5>
            <select class="p-3 cursor-pointer" name="" id="">
                <option value="English">English</option>
                <option value="Spanish">Spanish</option>
            </select>
            <select class="p-3 cursor-pointer" name="" id="">
                <option value="Colombia">Colombia</option>
                <option value="United States">United States</option>
            </select>
        </section>
        <section class="flex flex-col text-sm font-semibold gap-5">
            <h5>Contact Us</h5>
            <ul class="flex flex-col gap-5">
                <li><a href="#">Press Resources</a></li>
                <li><a href="#">Legal Info</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookie Settings</a></li>
                <li><a href="#">Imprint</a></li>
            </ul>
        </section>
        <section class="flex justify-start items-center gap-5 text-sm font-semibold py-2">
            <div class="w-12">
                <img class="w-full cursor-pointer" src="{{ Vite::asset('public/assets/ableton-brand.svg') }}" alt="">
            </div>
            <p>Made in Berlin</p>
        </section>
    </section>
</footer>
