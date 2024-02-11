@extends('layouts.app')

@section('title')
    Learn more about Ableton - maker of Live and Push | Ableton
@endsection


@section('content')
<header>
    @include('layouts._partials.navbar')
    <section class="w-5/6 mx-auto my-5 lg:w-1/2">
        <ul class="flex gap-5 text-sm font-semibold mb-5">
            <li><a class="text-orange-500" href="#">About</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Apprenticeships</a></li>
        </ul>
        <div>
            <img class="w-full" src="{{ Vite::asset('public/imgs/ableton-header-picture.jpeg') }}" alt="A men in front of a computer">
        </div>
    </section>
</header>
<main>
    <section class="w-5/6 mx-auto mb-10 xl:my-24 md:w-2/3 lg:w-1/2">
        <h2 class="text-lg xl:text-3xl font-semibold mb-4">
            We make <a class="text-blue-500" href="#">Live</a>, <a class="text-blue-500" href="#">Push</a> and <a class="text-blue-500" href="#">Link</a> - unique software and hardware for music creation and performance.
            With these products, our community of users creates amazing things.
        </h2>
        <article class="text-sm xl:text-xl font-medium mb-5">
            <p>
                Ableton was founded in 1999 and released the first version of Live in 2001. Our products are used by a community of dedicated musicians,
                sound designers, and artists from across the world.
            </p>
        </article>
    </section>
    <div class="mb-10 flex lg:w-1/2 mx-auto">
        <div class="w-1/2">
            <img class="w-full" src="{{ Vite::asset('public/imgs/photo-1.jpeg') }}" alt="">
        </div>
        <div class="w-1/2 bg-yellow-500">
            <img class="w-3/4 mx-auto relative top-10" src="{{ Vite::asset('public/imgs/photo-2.jpeg')}}" alt="">
        </div>
    </div>
    <section class="w-5/6 mx-auto mb-10 xl:my-24 md:w-2/3 lg:w-1/2">
        <h2 class="text-lg xl:text-3xl font-semibold mb-4">Making music isn't easy. It takes time, effort, and learning. But when you're in the flow, it's incredibly rewarding.</h2>
        <article class="text-sm xl:text-xl font-medium">
            <p>
                We feel the same way about making Ableton products. The driving force behing Ableton is our
                passion for what we make, and the people we make it for.
            </p>
            <video class="mt-5 xl:mt-24 mb-2 w-full" controls>
                <source src="{{ Vite::asset('public/assets/Why-Ableton-Juanpe.mp4') }}" type="video/mp4">
                your brower doesn't support the video tag.
            </video>
            <p class="text-sm font-medium"><cite>Why Ableton?</cite> - Juanpe Bolivar</p>
        </article>
    </section>
    <section class="w-5/6 mx-auto mb-10 xl:my-24 md:w-2/3 lg:w-1/2">
        <h2 class="text-lg xl:text-3xl font-semibold mb-4">
            We are more than 350 people from 30 different countries divided between our headquarters in Berlin
            and our offices in los Angeles and Tokyo.
        </h2>
        <article class="text-sm xl:text-xl font-medium">
            <p>
                Most of us are active musicians, producers, and DJs, and many of us use Live and Push every day.
                We come from a wide range of cultural and professional backgrounds. Some of us have PhDs,
                some are self-taught, and most of us are somewhere in between. What connect us is the shared belief
                that each of us has the skills and knowledge to contribute to something big: helping to shape the future of music culture.
            </p>
        </article>
    </section>
    <div class="flex mb-10 lg:w-1/2 mx-auto">
        <div class="w-1/2 bg-green-500 py-5 grid gap-5">
            <img class="w-3/4 mx-auto" src="{{ Vite::asset('public/imgs/photo-3.jpeg') }}" alt="">
            <img class="w-3/4 mx-auto" src="{{ Vite::asset('public/imgs/photo-4.jpeg') }}" alt="">
        </div>
        <div class="w-1/2 py-16">
            <img class="w-3/4 mx-auto" src="{{ Vite::asset('public/imgs/photo-5.jpeg') }}" alt="">
        </div>
    </div>
    <section class="w-5/6 mx-auto mb-10 xl:my-24 md:w-2/3 lg:w-1/2">
        <h2 class="text-lg xl:text-3xl font-semibold mb-4">
            We believe it takes focus to create truly outstanding instruments. We only work
            on a few products and we strive to make them great.
        </h2>
        <article class="text-sm xl:text-xl font-medium">
            <p>
                Rathe than haveing a one-size-fits-all process, we try  to give our people what they need to work their magic and grow.
                We've learned that archieving the best results comes from building teams that are richly diverse, and thus able to explore problems from a wider set of perspectives.
                We don't always agree with each other, but opinion and debate are valued and openly encouraged.
            </p>
        </article>
    </section>
    <div class="w-5/6 lg:w-1/2 mx-auto mb-10">
        <img class="w-full" src="{{ Vite::asset('public/imgs/poster-meet-the-makers.jpeg') }}" alt="">
    </div>
    <section class="w-5/6 mx-auto mb-10 xl:my-24 md:w-2/3 lg:w-1/2">
        <h2 class="text-lg xl:text-3xl font-semibold mb-4">
            We're passionate about what we do, but we're equally passionate about improving who we are.
        </h2>
        <article class="text-sm xl:text-xl font-medium">
            <p class="mb-2">
                We work hard to foster an enviroment where people can grow both personally and professionally, and
                we strive to create a wealth of oppotunities to learn from and with each other.
            </p>
            <p>
                Alongside and internal training program, employees are actively supported in acquiring new knowledge and skills,
                and coached on applying these in their daily work. In addition, staff-organized development and music salons are chance to discuss
                new technologies, production techniques and best practices.
            </p>
        </article>
    </section>
    {{-- TODO: this division will be fix it --}}
    <div class="sm:w-3/4 lg:w-1/2 mx-auto mb-10">
        <div>
            <img class="w-full" src="{{ Vite::asset('public/imgs/photo-6.jpeg') }}" alt="">
        </div>
        <div>
            <img class="w-full" src="{{ Vite::asset('public/imgs/photo-7.jpeg') }}" alt="">
        </div>
    </div>
    <section class="w-5/6 mx-auto mb-10 xl:my-24 md:w-2/3 lg:w-1/2">
        <h2 class="text-lg xl:text-3xl font-semibold mb-4">
            We want our employees to love it here. since we're looking for exceptional talent from around the world,
            we will do everything we can to make your transition as easy as possible.
        </h2>
        <article class="text-sm xl:text-xl font-medium">
            <p>
                If you're joining us in Berlin, we'll help with relocation and paperwork. We'll even provide you with free German or English lessons.
                Plus, working in Germany means you can expect comprehensive health insurance for you and your family, as well as generous maternity and paternity leave.
                Office hours are flexible, but it's not all work; we have several company and team outings throughout the year as well as a variety of fun, informal small-group activities.
            </p>
        </article>
    </section>
    <div class="w-5/6 lg:w-1/2 mx-auto flex flex-col text-lg font-semibold mb-10">
        <div class="w-full">
            <img class="w-full" src="{{ Vite::asset('public/imgs/photo-8.jpeg') }}" alt="">
        </div>
        <div class="bg-blue_light-500 p-8">
            We're really proud of the work we've done so far.
            But there's so much more to come. If you'd like to be a part of it,
            please join us.
            <div class="mt-5 text-blue-500">
                <a href="#">See latest jobs</a>
            </div>
        </div>
    </div>
</main>
@include('layouts._partials.footer')
@endsection
