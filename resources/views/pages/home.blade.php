@extends('layouts.app')

@section('content')
    <x-hero />
    <x-categories :categories="$categories" />

    <div class="container relative mt-16 lg:mt-24">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-5">
                <div class="relative">
                    <img src="{{ asset('images/about.jpg') }}" class="shadow-md rounded-xl" alt="">
                    <div class="absolute text-center bottom-2/4 translate-y-2/4 start-0 end-0">
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="inline-flex items-center justify-center w-20 h-20 text-green-600 bg-white rounded-full shadow-md lightbox dark:shadow-gyay-700 dark:bg-slate-900">
                            <i class="inline-flex items-center justify-center text-2xl mdi mdi-play"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-7">
                <div class="lg:ms-4">
                    <h4 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl lg:leading-normal">Efficiency. Transparency. <br> Control.</h4>
                    <p class="max-w-xl text-slate-400">Hously developed a platform for the Real Estate marketplace that allows buyers and sellers to easily execute a transaction on their own. The platform drives efficiency, cost transparency and control into the hands of the consumers. Hously is Real Estate Redefined.</p>

                    <div class="mt-4">
                        <a href="" class="mt-3 text-white bg-green-600 rounded-md btn hover:bg-green-700">Learn More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container relative mt-16 lg:mt-24">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">How It Works</h3>

            <p class="max-w-xl mx-auto text-slate-400">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <div class="relative overflow-hidden text-center transition-all duration-500 ease-in-out bg-transparent group lg:px-10 rounded-xl">
                <div class="relative -m-3 overflow-hidden text-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-32 h-32 mx-auto feather feather-hexagon fill-green-600/5"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                    <div class="absolute flex items-center justify-center mx-auto text-4xl text-green-600 align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 start-0 end-0 rounded-xl">
                        <i class="uil uil-estate"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <h5 class="text-xl font-medium">Evaluate Property</h5>
                    <p class="mt-3 text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                </div>
            </div>

            <div class="relative overflow-hidden text-center transition-all duration-500 ease-in-out bg-transparent group lg:px-10 rounded-xl">
                <div class="relative -m-3 overflow-hidden text-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-32 h-32 mx-auto feather feather-hexagon fill-green-600/5"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                    <div class="absolute flex items-center justify-center mx-auto text-4xl text-green-600 align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 start-0 end-0 rounded-xl">
                        <i class="uil uil-bag"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <h5 class="text-xl font-medium">Meeting with Agent</h5>
                    <p class="mt-3 text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                </div>
            </div>

            <div class="relative overflow-hidden text-center transition-all duration-500 ease-in-out bg-transparent group lg:px-10 rounded-xl">
                <div class="relative -m-3 overflow-hidden text-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-32 h-32 mx-auto feather feather-hexagon fill-green-600/5"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                    <div class="absolute flex items-center justify-center mx-auto text-4xl text-green-600 align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 start-0 end-0 rounded-xl">
                        <i class="uil uil-key-skeleton"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <h5 class="text-xl font-medium">Close the Deal</h5>
                    <p class="mt-3 text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                </div>
            </div>
        </div>
    </div>

    <x-featured-listings :listings="$listings" />

    <x-review-container :reviews="$reviews" />

@endsection


