<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,600,700,800&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
    <!-- Styles -->
    <style>
        body {
            margin: 0px;
            padding: 0px;
            font-family: 'Figtree';
        }

        .width {
            width: -webkit-fill-available;
        }

        .height {
            height: -webkit-fill-available;
        }

        .linear-gradient {
            background: linear-gradient(180deg, #000000 0%, rgba(0, 0, 0, 0) 100%);
        }

        .linear-gradient-2 {
            padding-bottom: 136px;
            background: linear-gradient(180deg, #000000 0%, rgba(0, 0, 0, 0) 100%);
            transform: matrix(1, 0, 0, -1, 0, 0);

        }

        .checkbox-round {
            width: 28px;
            height: 28px;
            background-color: #313131;
            border-radius: 50%;
            vertical-align: middle;
            border: 7px solid #313131;
            appearance: none;
            -webkit-appearance: none;
            outline: none;
            cursor: pointer;
        }

        .checkbox-round:checked {
            background-color: #4BBEFF;
        }

        .boxed input[type="radio"]+label {

            background: #313131;
            color: white;
        }

        .boxed input[type="radio"]:checked+label {

            background: #4BBEFF;
            color: white;
        }

        .boxed input[type="radio"] {
            display: none;
        }

        .content_img {
            position: relative;

        }

        .content_img div {
            visibility: hidden;

        }

        .content_img:hover {
            cursor: pointer;
            opacity: 0.7;
        }

        .content_img:hover div {

            visibility: visible;
            z-index: 3;
        }

        .linking-img {
            width: 57px;
            padding: 12px 14px;
        }

        .bluring {
            backdrop-filter: blur(120.5px);
        }

        #smoothly {
            scroll-behavior: smooth !important;
        }


        @media (min-width: 1024px) {
            .extra-width {
                width: -webkit-fill-available;
            }

            .height-2 {
                height: 920px;
            }
        }

        @media (max-width: 1023px) {
            .for-background {
                background: #000000B0;
            }
        }
    </style>
</head>

<body>
    <div class="flex flex-col min-h-screen relative">
        <img class="extra-width height object-cover lg:!h-auto absolute -z-10" src="images/hero-section.png" />
        <div class="for-background linear-gradient lg:pb-20">

            <!-- <nav class="flex justify-center lg:justify-between lg:mx-20 pt-9 pb-5 lg:py-9 items-center relative">
                <div class="absolute lg:hidden left-10 top-[38%]"><img src="/images/phone.png" alt=""></div>
                <div class="flex flex-col items-center">
                    <img class="" src="images/logo.png" alt="Image" />
                    <img class="block lg:hidden mt-3" src="images/dropdown.png" alt="">
                </div>
                <div class="space-x-10 lg:flex hidden">
                    <a class="no-underline text-white text-base hover:font-bold border-b-4 border-transparent hover:border-[#4BBEFF] hover:w-fit pb-2" href="">
                        <div> HOME</div>
                    </a>
                    <a class="no-underline text-white text-base hover:font-bold border-b-4 border-transparent hover:border-[#4BBEFF] hover:w-fit pb-2" href="">
                        <div> SERVICES</div>
                    </a>
                    <a class="no-underline text-white text-base hover:font-bold border-b-4 border-transparent hover:border-[#4BBEFF] hover:w-fit pb-2" href="">
                        <div> PROJECTS</div>
                    </a>
                </div>
                <a href="">
                    <button
                        class="hidden lg:block bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 hover:bg-[#0a90db]">LET'S
                        TALK</button>
                </a>
            </nav> -->
            <div class="hidden lg:block">
                <nav class="flex justify-center lg:justify-between lg:mx-20 pt-9 pb-5 lg:py-9 items-center relative">
                    <div class="absolute lg:hidden left-10 top-[38%]"><img src="/images/phone.png" alt=""></div>
                    <div class="flex flex-col items-center">
                        <img class="" src="images/logo.png" alt="Image" />
                        <img class="block lg:hidden mt-3" src="images/dropdown.png" alt="">
                    </div>
                    <div class="space-x-10 lg:flex hidden">
                        <a class="no-underline text-white text-base hover:font-bold border-b-4 border-transparent hover:border-[#4BBEFF] hover:w-fit pb-2"
                            href="">
                            <div> HOME</div>
                        </a>
                        <a class="no-underline text-white text-base hover:font-bold border-b-4 border-transparent hover:border-[#4BBEFF] hover:w-fit pb-2"
                            href="">
                            <div> SERVICES</div>
                        </a>
                        <a class="no-underline text-white text-base hover:font-bold border-b-4 border-transparent hover:border-[#4BBEFF] hover:w-fit pb-2"
                            href="">
                            <div> PROJECTS</div>
                        </a>
                    </div>
                    <a href="">
                        <button
                            class="hidden lg:block bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 hover:bg-[#0a90db]">LET'S
                            TALK</button>
                    </a>
                </nav>
            </div>
            <nav class="relative">
                <div class="block lg:hidden max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                    <div
                        class="flex justify-center lg:justify-between lg:mx-20 pt-9 pb-5 lg:py-9 items-center relative">
                        <div class="absolute lg:hidden left-10 top-[38%]"><img src="/images/phone.png" alt=""></div>
                        <div class="flex flex-col items-center">
                            <img class="" src="images/logo.png" alt="Image" />
                            <img id="main-menu" class="block lg:hidden mt-3" src="images/dropdown.png" alt="">
                        </div>
                        <div class="hidden sm:ml-6">
                            <div class="flex">
                                <a href="#"
                                    class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-gray-300">Home</a>
                                <a href="#"
                                    class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-gray-300">About</a>
                                <a href="#"
                                    class="px-3 py-2 rounded-md text-sm font-medium text-white hover:text-gray-300">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sm:hidden bg-black absolute w-full opacity-[0.9] bluring z-[2]" id="menu">
                    <div class="flex justify-between py-6 px-9 border-b border-white">
                        <a href="">
                            <button class="text-white font-bold text-lg hover:text-[#4BBEFF]">CALL NOW</button></a>
                        <img src="/images/breaker.png" alt="">
                        <a href="">
                            <button class="text-white font-bold text-lg hover:text-[#4BBEFF]">LET'S TALK</button>
                        </a>
                    </div>
                    <div class="mt-16 mb-20 ml-5">
                        <a href="">
                            <h1 class="text-5xl text-white hover:text-[#4BBEFF] font-bold ">SERVICES</h1>
                        </a>
                        <a href="">
                            <h1 class="text-5xl text-white hover:text-[#4BBEFF] font-bold mt-16">PROJECTS</h1>
                        </a>
                        <a href="">
                            <h1 class="text-5xl text-white hover:text-[#4BBEFF] font-bold mt-16">LEARN MORE</h1>
                        </a>
                    </div>
                    <div class="text-center text-white font-bold text-base mb-7">
                        <h1>STAY CONNECTED</h1>
                        <img class="m-auto mt-3 cursor-pointer" src="images/dropdown.png" alt="">
                    </div>
                    <div class="border-t border-b border-white">
                        <div class="flex  space-x-10 items-center justify-center py-6 px-9">
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-instagram text-white">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                </svg>
                            </a>
                            <a href=""> <img src="images/twitter.png" alt=""></a>
                            <a href=""><img src="images/fb.png" alt=""></a>
                        </div>
                    </div>
                    <div class="my-9 flex justify-center">
                        <a href="">
                            <button
                                class=" bg-[#4BBEFF] text-base font-bold text-white px-16 py-2.5 hover:bg-[#0a90db]">EXIT</button>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container flex  mx-auto flex-1 flex-col">
            <div class="flex-1 justify-center flex flex-col ml-10 lg:ml-28 2xl:ml-3 ">
                <h1 class=" text-4xl lg:text-7xl text-white font-bold !leading-[30px] lg:!leading-[57px]">LET US TAKE
                </h1>
                <h1 class="text-4xl lg:text-7xl text-white font-bold !leading-[30px] lg:!leading-[57px]"> YOUR BUSINESS
                </h1>
                <h1 class="text-4xl lg:text-7xl text-white font-bold !leading-[30px] lg:!leading-[57px]"> TO THE NEXT
                </h1>
                <h1 class="text-4xl lg:text-7xl text-white font-bold !leading-[30px] lg:!leading-[57px]"> LEVEL.</h1>
                <a href="">
                    <button
                        class="bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 mt-7 hover:bg-[#0a90db]">SERVICES</button>
                </a>
            </div>
            <div
                class="text-center text-white font-bold text-base lg:-mb-[90px] z-10 absolute lg:relative bottom-0 left-0 right-0 m-auto lg:translate-y-0 -translate-y-[159%]">
                <h1>LEARN MORE</h1>
                <img class="m-auto mt-2 cursor-pointer" src="images/dropdown.png" alt="">
            </div>

        </div>
        <div class="linear-gradient-2 lg:absolute lg:-bottom-[17%] 2xl:-bottom-[12%] extra-width"></div>
    </div>
    <section id="smoothly" class="scroll-smooth">
        <div
            class="lg:ml-auto flex container mx-auto justify-between mt-[74px] lg:mt-80 mb-20 lg:mb-40 flex-col-reverse lg:flex-row ">

            <div class="flex-1 mt-20 lg:mt-0 mx-7 lg:mx-0 ml-7 lg:ml-28 2xl:ml-3 ">
                <div>
                    <img class="w-48 lg:w-auto" src="/images/rectangle.png" alt="">
                    <h1 class="text-2xl lg:text-4xl font-bold mt-6 lg:mt-8 uppercase">Discover & define</h1>
                    <p class="text-sm lg:text-xl mt-3 lg:mt-4 uppercase !leading-[19px]">Together we dive right into the
                        problem with the goal of
                        uncovering ideas and opportunities. No vision is too big for a simple prototype. Validated ideas
                        ensure we’re on the right path. </p>
                </div>
                <div class="mt-24 lg:mt-36">
                    <img class="w-48 lg:w-auto" src="/images/circle.png" alt="">
                    <h1 class="text-2xl lg:text-4xl font-bold mt-6 lg:mt-8 uppercase">Design & build

                    </h1>
                    <p class="text-sm lg:text-xl mt-3 lg:mt-4 uppercase !leading-[19px]">Delightful user experiences
                        meet precise engineering. By
                        continuously optimizing and improving with user feedback, we craft products that are rock-solid
                        and simple to use.
                    </p>
                </div>
                <div class="mt-24 lg:mt-36">
                    <img class="w-48 lg:w-auto" src="/images/tick.png" alt="">
                    <h1 class="text-2xl lg:text-4xl font-bold mt-6 lg:mt-8 uppercase">Launch & scale
                    </h1>
                    <p class="text-sm lg:text-xl mt-3 lg:mt-4 uppercase !leading-[19px]">Achieving a product-market-fit
                        is about making the right
                        decisions. The data-driven approach helps us draw insights, refine the product, and utilize the
                        right distribution and promotion strategy.

                    </p>
                </div>
            </div>
            <div class="flex-1 mx-7 lg:mx-0">
                <h1
                    class="text-[37px] lg:text-6xl font-extrabold uppercase !leading-[30px] lg:!leading-[48px] lg:sticky top-[4%]">
                    Beautifully Built Websites &
                    Apps.</h1>
                <div class="mt-6 lg:sticky top-[22%] 2xl:top-[16%]">
                    <a href="">
                        <button
                            class=" bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 hover:bg-[#0a90db]">LET'S
                            TALK</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="flex flex-col relative">
            <div class="pb-[150px] linear-gradient lg:pb-24">
            </div>
            <img class="extra-width height object-cover height-2 absolute -z-10" src="/images/gallery.jpg" alt="">
            <div class="container mx-auto">
                <div class="">
                    <div class="absolute lg:relative top-[60px]">
                        <h1 class="leading-none text-4xl lg:text-7xl text-white font-bold ml-5 lg:ml-28 2xl:ml-3 ">WHAT
                            SERVICES </h1>
                        <h1 class="leading-none text-4xl lg:text-7xl text-white font-bold ml-5 lg:ml-28 2xl:ml-3 "> WE
                            OFFERS.</h1>
                        <a href="">
                            <button
                                class="ml-5 lg:ml-28 2xl:ml-3 bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 mt-7 hover:bg-[#0a90db]">PROJECTS</button>
                        </a>
                    </div>
                    <div class="flex flex-col lg:flex-row  lg:space-x-14 text-center mt-24 lg:mx-28 2xl:mx-3 2xl:ml-24">
                        <div style="backdrop-filter: blur(7.5px);"
                            class="mx-5 lg:mx-0 lg:w-[350px] bg-[#0000005C] text-white px-7 pt-8 pb-12">
                            <img class="m-auto" src="/images/Icon.png" alt="">
                            <p class="mt-9 text-xs ">WEB DEVELOPMENT</p>
                            <div class="w-20 h-1 bg-[#4BBEFF] m-auto mt-2.5 mb-10"></div>
                            <p class="text-xs uppercase leading-5">We take a client-centric approach to web development,
                                offering a wide range of services that are customized to meet our clients' unique needs.
                                We focus on delivering a website that is both aesthetically pleasing and functional,
                                optimized for speed, security, and scalability, and optimized for search engines.</p>
                        </div>
                        <div style="backdrop-filter: blur(7.5px);"
                            class="mt-20 lg:mt-0 mx-5 lg:mx-0 lg:w-[350px] bg-[#0000005C] text-white px-7 pt-8 pb-12">
                            <img class="m-auto" src="/images/Icon-2.png" alt="">
                            <p class="mt-9 text-xs ">APP DEVELOPMENT</p>
                            <div class="w-20  h-1 bg-[#4BBEFF] m-auto mt-2.5 mb-10"></div>
                            <p class="text-xs uppercase leading-5">We understand that creating a successful app requires
                                a combination of technical expertise, design skills, and attention to detail. Our team
                                of app developers is highly skilled and experienced in developing custom apps that are
                                tailored to meet the unique needs of our clients.
                            </p>
                        </div>
                        <div style="backdrop-filter: blur(7.5px);"
                            class="mb-20 lg:mb-0 mt-20 lg:mt-0 mx-5 lg:mx-0 lg:w-[350px] bg-[#0000005C] text-white px-7 pt-8 pb-12">
                            <img class="m-auto" src="/images/Icon-3.png" alt="">
                            <p class="mt-9 text-xs ">MARKETING</p>
                            <div class="w-20 h-1 bg-[#4BBEFF] m-auto mt-2.5 mb-10"></div>
                            <p class="text-xs uppercase leading-5">We take a data-driven approach to marketing, offering
                                a wide range of services that are customized to meet our clients' unique needs. We focus
                                on delivering measurable results that provide a positive return on investment and
                                staying up-to-date with the latest trends.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="text-center text-white font-bold text-base lg:-mb-[81px] z-10 absolute lg:relative bottom-0 left-0 right-0 m-auto lg:translate-y-[41px] -translate-y-[159%]">
                <h1>OUR PROJECTS</h1>
                <img class="m-auto mt-2 cursor-pointer" src="images/dropdown.png" alt="">
            </div>
            <div class="linear-gradient-2 lg:-mb-[126px]"></div>
        </div>
    </section>
    <section class="smoothly">
        <div
            class="lg:ml-auto flex container mx-auto justify-between mt-[74px] lg:mt-80 mb-20 lg:mb-40 flex-col-reverse lg:flex-row ">

            <div class="flex-1 mt-20 lg:mt-0 lg:mx-0 mx-5 lg:ml-28 2xl:ml-3">
                <div class="">
                    <!-- <img class="" src="/images/house.png" alt=""> -->
                    <div class="relative content_img">

                        <img src="/images/house.png" alt="Your image" class="img  transition-opacity duration-300">
                        <div href=""
                            class="flex items-center text absolute top-1/2 left-1/2 transform -translate-x-1/2 2xl:-translate-x-[96%] -translate-y-1/2  transition-opacity duration-300">
                            <button
                                class=" bg-[#4BBEFF] text-base font-bold text-white px-4 py-2.5 hover:bg-[#0a90db]">VISIT
                                WEBSITE</button>
                            <img class="ml-3 bg-[#4BBEFF]  hover:bg-[#0a90db] linking-img" src="/images/linking.png"
                                alt="">
                        </div>


                    </div>
                    <h1 class="text-2xl lg:text-4xl font-bold mt-6 lg:mt-8 uppercase">BLACKOAK</h1>
                    <div class="flex items-center mt-2">
                        <p class="text-base font-bold">“JARED SMITH ”</p>
                        <span class="flex ml-1.5">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                        </span>
                    </div>
                    <p class="text-sm lg:text-xl mt-3 lg:mt-4">I can't say enough good things about my experience
                        working with Kovsk Digital. They truly went above and beyond to create a website that exceeded
                        my expectations, and I would highly recommend them to anyone looking for top-notch web design
                        and development services.</p>
                </div>
                <div class="mt-24 lg:mt-36">
                    <img class="" src="/images/image 6.png" alt="">
                    <h1 class="text-2xl lg:text-4xl font-bold mt-6 lg:mt-8 uppercase">PLATINUM RENTALS
                        <div class="flex items-center mt-2">
                            <p class="text-base font-bold">“PCG KUSH ”</p>
                            <span class="flex ml-1.5">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.png" alt="">
                            </span>
                        </div>
                    </h1>
                    <p class="text-sm lg:text-xl mt-3 lg:mt-4">couldn't be happier with the work that Kovsk Digital did
                        on my website. They exceeded my expectations in every way, and I would highly recommend them to
                        anyone looking for top-notch web design and development services. If you're looking to take your
                        car rental business to the next level, Kovsk Digital is the partner you need.
                    </p>
                </div>
                <div class="mt-24 lg:mt-36">
                    <img class="" src="/images/image 7.png" alt="">
                    <h1 class="text-2xl lg:text-4xl font-bold mt-6 lg:mt-8 uppercase">THE ENTERPRISE
                    </h1>
                    <div class="flex items-center mt-2">
                        <p class="text-base font-bold">“STEVEN BLACK ”</p>
                        <span class="flex ml-1.5">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                        </span>
                    </div>
                    <p class="text-sm lg:text-xl mt-3 lg:mt-4">The website looked great and functioned flawlessly, and
                        I've already seen an increase in sales since it launched. If you're looking for a web
                        development partner that truly cares about your business and your success, I would highly
                        recommend Kovsk Digital. They are simply the best.

                    </p>
                </div>
            </div>
            <div class="flex-1 lg:mx-0 mx-7 lg:ml-28 2xl:ml-3">
                <h1
                    class="text-[40px] lg:text-6xl font-extrabold uppercase !leading-[30px] lg:!leading-[48px] lg:sticky top-[4%]">
                    HERE ARE SOME RECENT PROJECTS.
                </h1>
                <div class="mt-6 lg:sticky top-[27%] 2xl:top-[16%]">
                    <a href="">
                        <button
                            class=" bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 hover:bg-[#0a90db]">LET'S
                            TALK</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="flex flex-col  relative ">
            <div class="pb-[150px] linear-gradient lg:pb-24">
            </div>
            <img class="extra-width height object-cover height-2 absolute -z-10" src="/images/research.png" alt="">
            <div class="container mx-auto">
                <div class="">
                    <div class="absolute lg:relative top-[60px]">
                        <h1 class="leading-none text-4xl lg:text-7xl text-white font-bold ml-5 lg:ml-28 2xl:ml-3 ">WE
                            WANT TO </h1>
                        <h1 class="leading-none text-4xl lg:text-7xl text-white font-bold ml-5 lg:ml-28 2xl:ml-3 "> HELP
                            YOU GROW.</h1>
                        <a href="">
                            <button
                                class="ml-5 lg:ml-28 2xl:ml-3 bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 mt-7 hover:bg-[#0a90db]">LEARN
                                MORE</button>
                        </a>
                    </div>
                    <div class="flex flex-col lg:flex-row  lg:space-x-7 text-center mt-24 lg:mx-28 2xl:mx-3 2xl:ml-24">
                        <div style="backdrop-filter: blur(7.5px);"
                            class="rounded-[85px] mx-5 lg:mx-0 flex-1 bg-[#0000005C] text-white px-7 pt-8 pb-12">

                            <p class="mt-9 text-xs ">STEP 1</p>
                            <div class="w-20 h-1 bg-[#4BBEFF] m-auto mt-2.5 mb-7"></div>
                            <h1 class="text-4xl font-bold mb-4">RESEARCH</h1>
                            <p class="text-xs uppercase leading-5">All of our projects start with a client research to
                                identify goals and establish a strategy for the project.</p>
                        </div>
                        <div style="backdrop-filter: blur(7.5px);"
                            class="rounded-[85px] mt-20 lg:mt-0 flex-1 mx-5 lg:mx-0  bg-[#0000005C] text-white px-7 pt-8 pb-12">

                            <p class="mt-9 text-xs ">STEP 2</p>
                            <div class="w-20  h-1 bg-[#4BBEFF] m-auto mt-2.5 mb-7"></div>
                            <h1 class="text-4xl font-bold mb-4">DESIGN</h1>
                            <p class="text-xs uppercase leading-5">After we establish our strategy, our team begins
                                designing the layout & look of your new website.
                            </p>
                        </div>
                        <div style="backdrop-filter: blur(7.5px);"
                            class="rounded-[85px]  lg:mb-0 flex-1 mt-20 lg:mt-0 mx-5 lg:mx-0  bg-[#0000005C] text-white px-7 pt-8 pb-12">

                            <p class="mt-9 text-xs ">STEP 3</p>
                            <div class="w-20 h-1 bg-[#4BBEFF] m-auto mt-2.5 mb-7"></div>
                            <h1 class="text-4xl font-bold mb-4">Engineering</h1>
                            <p class="text-xs uppercase leading-5">Once the design has been finalized, our programmers
                                begin developing your responsive website so it works seamlessly on desktop and mobile.
                            </p>
                        </div>
                        <div style="backdrop-filter: blur(7.5px);"
                            class="rounded-[85px] mb-20 lg:mb-0 flex-1 mt-20 lg:mt-0 mx-5 lg:mx-0  bg-[#0000005C] text-white px-7 pt-8 pb-12">

                            <p class="mt-9 text-xs ">STEP 4</p>
                            <div class="w-20 h-1 bg-[#4BBEFF] m-auto mt-2.5 mb-7"></div>
                            <h1 class="text-4xl font-bold mb-4">DATA</h1>
                            <p class="text-xs uppercase leading-5">After thorough testing, it’s time to launch your new
                                website and begin driving traffic with digital marketing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="text-center text-white font-bold text-base lg:-mb-[81px] z-10 absolute lg:relative bottom-0 left-0 right-0 m-auto lg:translate-y-[41px] -translate-y-[159%]">
            </div>
            <div
                class="!pb-[90px] lg:!pb-[244px] linear-gradient-2 lg:absolute -bottom-[36%] 2xl:-bottom-[45%] extra-width">
            </div>
        </div>
    </section>
    <section id="smoothly">
        <div
            class="lg:ml-auto flex container mx-auto justify-between mt-[74px] lg:mt-96 2xl:mt-[28rem] mb-20 flex-col-reverse lg:flex-row ">
            <div class="flex-1 mt-10 lg:mt-0 lg:mx-0 mx-5 lg:ml-28 2xl:ml-3">
                <div class="relative hidden lg:block">
                    <img class="relative w-48 lg:w-auto" src="/images/iphone.png" alt="">
                    <div class="absolute top-0 w-full 2xl:w-[74%] ml-10 text-center">
                        <h3 class="text-xl text-[#4BBEFF] mt-16 font-bold">Please Fill Out This Form.</h3>
                        <div class="bg-[#E6E6E6] w-[221px] h-[2px] my-5 mx-auto"></div>
                        <form action="">
                            <input
                                class="outline-none py-3 pl-5 pr-36 rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                type="text" placeholder="Full Name?"></br>
                            <input
                                class="outline-none mt-1 py-3 pl-5 pr-36 rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                type="text" placeholder="Email?"></br>
                            <div class="relative">
                                <input
                                    class="outline-none mt-1 py-3 pl-5 pr-36 rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                    type="text" placeholder="Phone?">
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[103px] 2xl:left-[115px]">
                                </div>
                            </div>
                            <div class="relative">
                                <h5
                                    class="px-5 w-fit mt-2 py-3 rounded-full bg-[#313131] text-white text-sm font-bold mx-auto mr-[100px] 2xl:mr-[20.5%]">
                                    What Service Do You Need?</h5>
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[100px] 2xl:right-[20.5%] rotate-[140deg]">
                                </div>
                            </div>
                            <div class="ml-[100px] text-left mt-3">
                                <div class="">
                                    <input type="checkbox" class="checkbox-round" />
                                    <label for="" class="ml-2 text-lg font-bold">WEB DEVELOPMENT</label><br />
                                </div>
                                <div class="mt-2">
                                    <input type="checkbox" class="checkbox-round" />
                                    <label for="" class="ml-2 text-lg font-bold">MOBILE DEVELOPMENT</label><br />
                                </div>
                                <div class="mt-2">
                                    <input type="checkbox" class="checkbox-round" />
                                    <label for="" class="ml-2 text-lg font-bold">SOFTWARE DEVELOPMENT</label><br />
                                </div>
                                <div class="mt-2">
                                    <input type="checkbox" class="checkbox-round" />
                                    <label for="" class="ml-2 text-lg font-bold">MARKETING</label><br />
                                </div>
                            </div>
                            <div class="relative">
                                <h5
                                    class="px-5 w-fit mt-2 py-3 rounded-full bg-[#313131] text-white text-sm font-bold mx-auto mr-[100px] 2xl:mr-[20.5%]">
                                    What’s Your Budget?</h5>
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[100px] 2xl:right-[20.5%] rotate-[140deg]">
                                </div>
                            </div>
                            <div class="boxed gap-y-1.5 mt-2.5 ml-[100px]">
                                <input type="radio" id="amount-1" name="skills" value="amount-1">
                                <label
                                    class="cursor-pointer border font-normal  text-xs bg-white rounded-full py-3.5 w-44 items-center flex justify-center"
                                    for="amount-1">Up to $5,000</label>
                                <input type="radio" id="amount-2" name="skills" value="amount-2">
                                <label
                                    class="cursor-pointer mt-1 border font-normal  text-xs bg-white rounded-full py-3.5 w-44 items-center flex justify-center"
                                    for="amount-2">$5,000 to $10,000</label>
                                <input type="radio" id="amount-3" name="skills" value="amount-3">
                                <label
                                    class="cursor-pointer mt-1 border font-normal  text-xs bg-white rounded-full py-3.5 w-44 items-center flex justify-center"
                                    for="amount-3">$10,000 to $50,000</label>
                                <input type="radio" id="amount-4" name="skills" value="amount-4">
                                <label
                                    class="cursor-pointer px-10 mt-1 border font-normal text-xs rounded-full py-3.5 w-44 items-center flex justify-center"
                                    for="amount-4">Over $100,000</label>
                            </div>
                            <button class="mt-5 text-lg bg-[#4BBEFF] font-bold px-20 py-2 rounded-full text-white"
                                type="submit">SEND NOW</button>

                        </form>
                    </div>
                </div>
                <div class="w-full text-center block lg:hidden">
                    <div class="bg-[#E6E6E6] w-[221px] h-[2px]  mx-auto mt-16"></div>
                    <h3 class="text-xl text-[#4BBEFF] mt-5 mb-16 font-bold">Please Fill Out This Form.</h3>

                    <form action="">
                        <input
                            class="outline-none py-3 pl-5 w-full rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                            type="text" placeholder="Full Name?"></br>
                        <input
                            class="outline-none mt-1 py-3 pl-5 w-full rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                            type="text" placeholder="Email?"></br>
                        <div class="relative">
                            <input
                                class="outline-none mt-1 py-3 pl-5 w-full rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                type="text" placeholder="Phone?">
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[0%] 2xl:left-[115px]">
                            </div>
                        </div>
                        <div class="relative flex justify-end">
                            <h5
                                class="mx-[inherit] px-5 w-[75%] mt-4 py-3 rounded-full bg-[#313131] text-white text-sm font-bold ">
                                What Service Do You Need?</h5>
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[0%] rotate-[140deg]">
                            </div>
                        </div>
                        <div class="text-left mt-4">
                            <div class="">
                                <input type="checkbox" class="checkbox-round" />
                                <label for="" class="ml-3 text-lg font-bold">WEB DEVELOPMENT</label><br />
                            </div>
                            <div class="mt-2">
                                <input type="checkbox" class="checkbox-round" />
                                <label for="" class="ml-3 text-lg font-bold">MOBILE DEVELOPMENT</label><br />
                            </div>
                            <div class="mt-2">
                                <input type="checkbox" class="checkbox-round" />
                                <label for="" class="ml-3 text-lg font-bold">SOFTWARE DEVELOPMENT</label><br />
                            </div>
                            <div class="mt-2">
                                <input type="checkbox" class="checkbox-round" />
                                <label for="" class="ml-3 text-lg font-bold">MARKETING</label><br />
                            </div>
                        </div>
                        <div class="relative flex justify-end">
                            <h5
                                class="mx-[inherit] px-5 w-[75%] mt-4 py-3 rounded-full bg-[#313131] text-white text-sm font-bold ">
                                What’s Your Budget?</h5>
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[0%] rotate-[140deg]">
                            </div>
                        </div>
                        <div class="boxed gap-y-1.5 mt-4">
                            <input type="radio" id="amount-1-mb" name="skills" value="amount-1">
                            <label
                                class="cursor-pointer border font-normal  text-xs bg-white rounded-full py-3.5 w-44 items-center flex justify-center"
                                for="amount-1-mb">Up to $5,000</label>
                            <input type="radio" id="amount-2-mb" name="skills" value="amount-2">
                            <label
                                class="cursor-pointer mt-2 border font-normal  text-xs bg-white rounded-full py-3.5 w-44 items-center flex justify-center"
                                for="amount-2-mb">$5,000 to $10,000</label>
                            <input type="radio" id="amount-3-mb" name="skills" value="amount-3">
                            <label
                                class="cursor-pointer mt-2 border font-normal  text-xs bg-white rounded-full py-3.5 w-44 items-center flex justify-center"
                                for="amount-3-mb">$10,000 to $50,000</label>
                            <input type="radio" id="amount-4-mb" name="skills" value="amount-4">
                            <label
                                class="cursor-pointer px-10 mt-2 border font-normal text-xs rounded-full py-3.5 w-44 items-center flex justify-center"
                                for="amount-4-mb">Over $100,000</label>
                        </div>
                        <button class="mt-5 text-lg bg-[#4BBEFF] font-bold px-20 py-2 rounded-full text-white"
                            type="submit">SEND NOW</button>

                    </form>
                </div>
            </div>
            <div class="flex-1 lg:mx-0 mx-7 lg:ml-28 2xl:ml-3">
                <h1
                    class="text-[40px] lg:text-6xl font-extrabold !leading-[30px] lg:!leading-[48px] uppercase lg:sticky top-[4%]">
                    LET’S TALK ABOUT YOUR PROJECT.
                </h1>
                <div class="mt-6 lg:sticky top-[27%] 2xl:top-[16%]">
                    <a href="">
                        <button
                            class=" bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 hover:bg-[#0a90db]">SERVICES</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer class="relative ">
        <img class="hidden lg:block absolute -z-[1] h-[655px] w-full" src="/images/footer-img.png" alt="">
        <img class="block lg:hidden absolute -z-[2] h-full w-full" src="/images/long-img.png" alt="">
        <img class="block lg:hidden absolute -z-[1] h-full w-full" src="/images/gradient.png" alt="">
        <div class="flex-col-reverse lg:flex-row flex container mx-auto pt-20 lg:pt-32 ">
            <div class="ml-5 lg:ml-0 mt-20 lg:mt-0">
                <h1 class="text-xl font-bold text-white border-b-4 border-[#4BBEFF] w-fit pb-2">LOCATION</h1>
                <p class="text-xl text-white font-light mt-3 uppercase">9515 Lee Hwy,</p>
                <p class="text-xl text-white font-light mb-3 uppercase">Ooltewah, TN 37363</p>
                <h1 class="text-xl font-bold text-white ">CHATTANOOGA, TN</h1>
                <h1 class="text-xl font-bold text-white border-b-4 border-[#4BBEFF] w-fit pb-2 mt-14">CONTACT</h1>
                <p class="text-xl text-white font-light mt-3">KOVSKDIGITAL@GMAIL.COM</p>
                <h1 class="text-xl font-bold text-white ">423-605-8210</h1>
            </div>
            <div class="lg:text-center flex-[2] flex flex-col justify-center">
                <h1 class="uppercase lg:text-5xl font-bold text-white leading-none text-4xl ml-5">Unlock your businesses
                </h1>
                <h1 class="uppercase lg:text-5xl font-bold text-white leading-none text-4xl ml-5">potential with Kovsk.
                </h1>
                <div class="mt-6 ml-5 lg:ml-0">
                    <a href="">
                        <button
                            class=" bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 hover:bg-[#0a90db]">SERVICES</button>
                    </a>
                </div>
            </div>
        </div>
        <section class="block lg:hidden">
            <div class="flex-col-reverse lg:flex-row flex container mx-auto mt-20 items-center justify-between">
                <div class="flex items-center flex-col lg:flex-row ">
                    <a href=""><img class="my-8 lg:my-0" src="images/logo.png" alt="Image" /></a>

                    <div class="flex lg:ml-14 space-x-6 items-center mb-6 lg:mb-0">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-instagram text-white">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                            </svg>
                        </a>
                        <a href=""> <img src="images/twitter.png" alt=""></a>
                        <a href=""><img src="images/fb.png" alt=""></a>

                    </div>
                </div>
                <div class="flex mt-7 lg:mt-0 mb-8 lg:mb-0">
                    <a class="mr-14 no-underline text-white text-base hover:font-bold" href="">
                        <div> HOME</div>
                    </a>
                    <a class="mr-10  no-underline text-white text-base hover:font-bold" href="">
                        <div> SERVICES</div>
                    </a>
                    <a class="no-underline text-white text-base hover:font-bold" href="">
                        <div> PROJECTS</div>
                    </a>
                </div>

                <div class="flex flex-col ">
                    <a href="">
                        <button
                            class=" bg-white text-base font-bold text-[#4BBEFF] px-11 py-2.5 hover:bg-[#4BBEFF] hover:text-white">CALL
                            NOW</button>
                    </a>
                    <a href="#">
                        <button
                            class="mt-3 bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 hover:bg-[#0a90db]">LET'S
                            TALK</button>
                    </a>
                </div>
            </div>
        </section>
    </footer>
    <section class="hidden lg:block">
        <div class="flex container mx-auto mt-20 items-center justify-between">
            <div class="flex items-center">
                <a href=""><img class="" src="images/logo.png" alt="Image" /></a>

                <div class="flex ml-14 space-x-6 items-center">
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-instagram text-white">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href=""> <img src="images/twitter.png" alt=""></a>
                    <a href=""><img src="images/fb.png" alt=""></a>

                </div>
            </div>
            <div class="flex">
                <a class="mr-14 no-underline text-white text-base hover:font-bold border-b-4 border-transparent hover:border-[#4BBEFF] hover:w-fit pb-2"
                    href="">
                    <div> HOME</div>
                </a>
                <a class="mr-10  no-underline text-white text-base hover:font-bold border-b-4 border-transparent hover:border-[#4BBEFF] hover:w-fit pb-2"
                    href="">
                    <div> SERVICES</div>
                </a>
                <a class="no-underline text-white text-base hover:font-bold border-b-4 border-transparent hover:border-[#4BBEFF] hover:w-fit pb-2"
                    href="">
                    <div> PROJECTS</div>
                </a>
            </div>

            <div class="flex flex-col">
                <a href="">
                    <button
                        class=" bg-white text-base font-bold text-[#4BBEFF] px-11 py-2.5 hover:bg-[#4BBEFF] hover:text-white">CALL
                        NOW</button>
                </a>
                <a href="#">
                    <button
                        class="mt-3 bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 hover:bg-[#0a90db]">LET'S
                        TALK</button>
                </a>
            </div>
        </div>
    </section>
</body>
<script>
    const navbarToggle = document.getElementById('main-menu');
    const navbarMenu = document.getElementById('menu');
    navbarToggle.addEventListener('click', () => {
        navbarMenu.classList.toggle('hidden');
        navbarToggle.querySelector('svg:first-child').classList.toggle('block');
        navbarToggle.querySelector('svg:last-child').classList.toggle('hidden');
    });


    let myDiv = document.getElementById("smoothly");
    let intervalId;

    function slowScroll() {
        console.log("slow")
        let scrollPos = myDiv.scrollTop;
        myDiv.scrollTop = scrollPos + 1; 
    }

    myDiv.addEventListener("mouseenter", function () {
        intervalId = setInterval(slowScroll, 50); 
    });

    myDiv.addEventListener("mouseleave", function () {
        clearInterval(intervalId); 
    });
</script>

</html>