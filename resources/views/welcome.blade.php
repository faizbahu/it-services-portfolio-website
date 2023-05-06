<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600,700,800&display=swap" rel="stylesheet" />

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

            <nav class="flex justify-center lg:justify-between lg:mx-20 pt-9 pb-5 lg:py-9 items-center relative">
                <div class="absolute lg:hidden left-10 top-[38%]"><img src="/images/phone.png" alt=""></div>
                <div class="flex flex-col items-center">
                    <img class="" src="images/logo.png" alt="Image" />
                    <img class="block lg:hidden mt-3" src="images/dropdown.png" alt="">
                </div>
                <div class="space-x-10 lg:flex hidden">
                    <a class="no-underline text-white text-base hover:font-bold" href="">
                        <div> HOME</div>
                    </a>
                    <a class="no-underline text-white text-base hover:font-bold" href="">
                        <div> SERVICES</div>
                    </a>
                    <a class="no-underline text-white text-base hover:font-bold" href="">
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
        <div class="container flex  mx-auto flex-1 flex-col">
            <div class="flex-1 justify-center flex flex-col ml-10 lg:ml-28 2xl:ml-3">
                <h1 class="leading-none text-4xl lg:text-7xl text-white font-bold">LET US TAKE </h1>
                <h1 class="leading-none text-4xl lg:text-7xl text-white font-bold"> YOUR BUSINESS </h1>
                <h1 class="leading-none text-4xl lg:text-7xl text-white font-bold"> TO THE NEXT </h1>
                <h1 class="leading-none text-4xl lg:text-7xl text-white font-bold"> LEVEL.</h1>
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
    <section class="scroll-smooth">
        <div
            class="lg:ml-auto flex container mx-auto justify-between mt-[74px] lg:mt-80 mb-20 lg:mb-40 flex-col-reverse lg:flex-row ">

            <div class="flex-1 mt-20 lg:mt-0 mx-7 lg:mx-0 ml-7 lg:ml-28 2xl:ml-3 ">
                <div>
                    <img class="w-48 lg:w-auto" src="/images/rectangle.png" alt="">
                    <h1 class="text-2xl lg:text-4xl font-bold mt-6 lg:mt-8 uppercase">Discover & define</h1>
                    <p class="text-sm lg:text-xl mt-3 lg:mt-4">Together we dive right into the problem with the goal of
                        uncovering ideas and opportunities. No vision is too big for a simple prototype. Validated ideas
                        ensure we’re on the right path. </p>
                </div>
                <div class="mt-24 lg:mt-36">
                    <img class="w-48 lg:w-auto" src="/images/circle.png" alt="">
                    <h1 class="text-2xl lg:text-4xl font-bold mt-6 lg:mt-8 uppercase">Design & build

                    </h1>
                    <p class="text-sm lg:text-xl mt-3 lg:mt-4">Delightful user experiences meet precise engineering. By
                        continuously optimizing and improving with user feedback, we craft products that are rock-solid
                        and simple to use.
                    </p>
                </div>
                <div class="mt-24 lg:mt-36">
                    <img class="w-48 lg:w-auto" src="/images/tick.png" alt="">
                    <h1 class="text-2xl lg:text-4xl font-bold mt-6 lg:mt-8 uppercase">Launch & scale
                    </h1>
                    <p class="text-sm lg:text-xl mt-3 lg:mt-4">Achieving a product-market-fit is about making the right
                        decisions. The data-driven approach helps us draw insights, refine the product, and utilize the
                        right distribution and promotion strategy.

                    </p>
                </div>
            </div>
            <div class="flex-1 mx-7 lg:mx-0">
                <h1 class="leading-none text-[40px] lg:text-6xl font-extrabold uppercase">Beautifully Built Websites &
                    Apps.</h1>
                <div class="mt-6">
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
                                class="ml-5 lg:ml-28 2xl:ml-3 bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 mt-7 hover:bg-[#0a90db]">SERVICES</button>
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
    <section>
        <div
            class="lg:ml-auto flex container mx-auto justify-between mt-[74px] lg:mt-80 mb-20 lg:mb-40 flex-col-reverse lg:flex-row ">

            <div class="flex-1 mt-20 lg:mt-0 lg:mx-0 mx-5 lg:ml-28 2xl:ml-3">
                <div class="">
                    <img class="" src="/images/house.png" alt="">
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
                <h1 class="leading-none text-[40px] lg:text-6xl font-extrabold uppercase">HERE ARE SOME RECENT PROJECTS.
                </h1>
                <div class="mt-6">
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
    <section>
        <div
            class="lg:ml-auto flex container mx-auto justify-between mt-[74px] lg:mt-80 mb-20 lg:mb-40 flex-col-reverse lg:flex-row ">

            <div class="flex-1 mt-20 lg:mt-0 lg:mx-0 mx-5 lg:ml-28 2xl:ml-3">
                <div class="relative">
                    <img class="relative w-48 lg:w-auto" src="/images/iphone.png" alt="">
                    <div class="absolute top-0 w-full ml-10 text-center">
                        <h3 class="text-xl text-[#4BBEFF] mt-20 font-bold">Please Fill Out This Form.</h3>
                        <div class="bg-[#E6E6E6] w-[221px] h-[2px] my-7 mx-auto"></div>
                        <form action="">
                            <input
                                class="py-3 pl-5 pr-36 rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                type="text" placeholder="Full Name?"></br>
                            <input
                                class="mt-2 py-3 pl-5 pr-36 rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                type="text" placeholder="Email?"></br>
                            <div class="relative">
                                <input
                                    class="mt-2 py-3 pl-5 pr-36 rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                    type="text" placeholder="Phone?">
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[103px]">
                                </div>
                            </div>
                            <div class="relative">
                                <h5
                                    class="px-5 w-fit mt-2 py-3 rounded-full bg-[#313131] text-white text-sm font-bold mx-auto mr-[100px]">
                                    What Service Do You Need?</h5>
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[100px] rotate-[140deg]">
                                </div>
                            </div>
                            <div class="ml-[100px] text-left mt-5">
                                <div class="">
                                    <input type="checkbox" class="checkbox-round" />
                                    <label for="" class="ml-2 text-lg font-bold">WEB DEVELOPMENT</label><br />
                                </div>
                                <div class="mt-3">
                                    <input type="checkbox" class="checkbox-round" />
                                    <label for="" class="ml-2 text-lg font-bold">MOBILE DEVELOPMENT</label><br />
                                </div>
                                <div class="mt-3">
                                    <input type="checkbox" class="checkbox-round" />
                                    <label for="" class="ml-2 text-lg font-bold">SOFTWARE DEVELOPMENT</label><br />
                                </div>
                                <div class="mt-3">
                                    <input type="checkbox" class="checkbox-round" />
                                    <label for="" class="ml-2 text-lg font-bold">MARKETING</label><br />
                                </div>
                            </div>
                            <div class="relative">
                                <h5
                                    class="px-5 w-fit mt-2 py-3 rounded-full bg-[#313131] text-white text-sm font-bold mx-auto mr-[100px]">
                                    What’s Your Budget?</h5>
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[100px] rotate-[140deg]">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex-1 lg:mx-0 mx-7 lg:ml-28 2xl:ml-3">
                <h1 class="leading-none text-[40px] lg:text-6xl font-extrabold uppercase">LET’S TALK ABOUT YOUR PROJECT.
                </h1>
                <div class="mt-6">
                    <a href="">
                        <button
                            class=" bg-[#4BBEFF] text-base font-bold text-white px-11 py-2.5 hover:bg-[#0a90db]">SERVICES</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>