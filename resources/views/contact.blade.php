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

<body>
    <div class="bg-black">
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
                <div class="flex justify-center lg:justify-between lg:mx-20 pt-9 pb-5 lg:py-9 items-center relative">
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
                        <h1 class="text-5xl text-white font-bold hover:text-[#4BBEFF]">SERVICES</h1>
                    </a>
                    <a href="">
                        <h1 class="text-5xl text-white font-bold mt-16 hover:text-[#4BBEFF]">PROJECTS</h1>
                    </a>
                    <a href="">
                        <h1 class="text-5xl text-white font-bold mt-16 hover:text-[#4BBEFF]">LEARN MORE</h1>
                    </a>
                </div>
                <div class="text-center text-white font-bold text-base mb-7">
                    <h1>STAY CONNECTED</h1>
                    <img class="m-auto mt-3 cursor-pointer" src="images/dropdown.png" alt="">
                </div>
                <div class="border-t border-b border-white">
                    <div class="flex  space-x-10 items-center justify-center py-6 px-9">
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
                <div class="my-9 flex justify-center">
                    <a href="">
                        <button
                            class=" bg-[#4BBEFF] text-base font-bold text-white px-16 py-2.5 hover:bg-[#0a90db]">EXIT</button>
                    </a>
                </div>
            </div>
        </nav>
    </div>


    <section>
        <div
            class="lg:ml-auto flex container mx-auto justify-between mt-[74px] lg:mt-44 2xl:mt-[15rem] mb-10 lg:mb-20 flex-col-reverse lg:flex-row ">
            <div class="flex-1 mt-10 lg:mt-0 lg:mx-0 mx-5 lg:ml-28 2xl:ml-3">
                <div class="relative hidden lg:block">
                    <img class="relative w-48 lg:w-auto" src="/images/iphone.png" alt="">
                    <div class="absolute top-0 w-full 2xl:w-[74%] ml-10 text-center">
                        <h3 class="text-xl text-[#4BBEFF] mt-16 font-bold">We’ll Be In Contact Soon!</h3>
                        <div class="bg-[#E6E6E6] w-[221px] h-[2px] my-5 mx-auto"></div>
                        <form action="">
                            <div class="relative">
                                <input
                                    class="w-[63%] outline-none mt-1 py-3 pl-5  rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                    type="text" disabled placeholder="Ok My Project Information Was Sent!">
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[103px] 2xl:left-[115px]">
                                </div>
                            </div>
                            <div class="relative">
                                <h5
                                    class="px-5 w-fit mt-3 py-3 rounded-full bg-[#313131] text-white text-sm font-bold mx-auto mr-[100px] 2xl:mr-[20.5%]">
                                    Your Business Will Thank You Later!</h5>
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[100px] 2xl:right-[20.5%] rotate-[140deg]">
                                </div>
                            </div>
                            <div class="relative">
                                <input
                                    class="w-[63%] outline-none mt-3 py-3 pl-5  rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                    type="text" disabled placeholder="How Long Does It Take You To Respond?">
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[103px] 2xl:left-[115px]">
                                </div>
                            </div>
                            <div class="relative">
                                <h5
                                    class="px-5 w-fit mt-3 py-3 rounded-full bg-[#313131] text-white text-sm font-bold mx-auto mr-[100px] 2xl:mr-[20.5%]">
                                    You Should Get a Response in 24hrs.</h5>
                                <!-- <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[100px] 2xl:right-[20.5%] rotate-[140deg]">
                                </div> -->
                            </div>
                            <div class="relative">
                                <h5
                                    class="px-5 w-fit mt-3 py-3 rounded-full bg-[#313131] text-white text-sm font-bold mx-auto mr-[100px] 2xl:mr-[20.5%]">
                                    If Anything, Even Sooner!</h5>
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[100px] 2xl:right-[20.5%] rotate-[140deg]">
                                </div>
                            </div>
                            <div class="relative">
                                <input
                                    class="w-[63%] outline-none mt-3 py-3 pl-5  rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                    type="text" disabled placeholder="Perfect! What’s Your # Incase I’d Like To Call.">
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[103px] 2xl:left-[115px]">
                                </div>
                            </div>
                            <div class="relative">
                                <h5
                                    class="px-5 w-fit mt-3 py-3 rounded-full bg-[#313131] text-white text-sm font-bold mx-auto mr-[100px] 2xl:mr-[20.5%]">
                                    It’s 423-605-8210.</h5>
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[100px] 2xl:right-[20.5%] rotate-[140deg]">
                                </div>
                            </div>
                            <div class="relative">
                                <input
                                    class="w-[63%] outline-none mt-3 py-3 pl-5  rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                    type="text" disabled placeholder="Awesome! Thanks.">
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[103px] 2xl:left-[115px]">
                                </div>
                            </div>
                            <div class="relative">
                                <input
                                    class="w-[63%] outline-none mt-3 py-3 pl-5  rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                    type="text" disabled placeholder="Can’t Wait To Hear Back From You.">
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[103px] 2xl:left-[115px]">
                                </div>
                            </div>
                            <div class="relative">
                                <h5
                                    class="px-5 w-fit mt-3 py-3 rounded-full bg-[#313131] text-white text-sm font-bold mx-auto mr-[100px] 2xl:mr-[20.5%]">
                                    Talk Soon!</h5>
                                <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                    class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[100px] 2xl:right-[20.5%] rotate-[140deg]">
                                </div>
                            </div>

                            <button
                                class="mt-14 2xl:mt-20 text-lg bg-[#4BBEFF] font-bold px-20 py-2 rounded-full text-white"
                                type="submit">SEND NOW</button>

                        </form>
                    </div>
                </div>
                <div class="w-full text-center block lg:hidden">
                    <div class="bg-[#E6E6E6] w-[221px] h-[2px]  mx-auto mt-16"></div>
                    <h3 class="text-xl text-[#4BBEFF] mt-5 mb-16 font-bold">We’ll Be In Contact Soon!</h3>

                    <form action="">
                        <div class="relative">
                            <input
                                class="outline-none mt-3 py-3 pl-5 w-full rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                type="text" placeholder="Ok My Project Information Was Sent!">
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[0%] 2xl:left-[115px]">
                            </div>
                        </div>
                        <div class="relative flex justify-end">
                            <h5
                                class="mx-[inherit] px-5 w-[80%] mt-3 py-3 rounded-full bg-[#313131] text-white text-sm font-bold ">
                                Your Business Will Thank You Later!</h5>
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[0%] rotate-[140deg]">
                            </div>
                        </div>
                        <div class="relative">
                            <input
                                class="outline-none mt-3 py-3 pl-5 w-full rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                type="text" placeholder="How Long Does It Take You To Respond?">
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[0%] 2xl:left-[115px]">
                            </div>
                        </div>
                        <div class="relative flex justify-end">
                            <h5
                                class="mx-[inherit] px-5 w-[80%] mt-3 py-3 rounded-full bg-[#313131] text-white text-sm font-bold ">
                                You Should Get a Response in 24hrs.</h5>
                            <!-- <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[0%] rotate-[140deg]">
                            </div> -->
                        </div>
                        <div class="relative flex justify-end">
                            <h5
                                class="mx-[inherit] px-5 w-[80%] mt-3 py-3 rounded-full bg-[#313131] text-white text-sm font-bold ">
                                If Anything, Even Sooner!</h5>
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[0%] rotate-[140deg]">
                            </div>
                        </div>
                        <div class="relative">
                            <input
                                class="outline-none mt-3 py-3 pl-5 w-full rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                type="text" placeholder="Perfect! What’s Your # Incase I’d Like To Call.">
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[0%] 2xl:left-[115px]">
                            </div>
                        </div>
                        <div class="relative flex justify-end">
                            <h5
                                class="mx-[inherit] px-5 w-[80%] mt-3 py-3 rounded-full bg-[#313131] text-white text-sm font-bold ">
                                It’s 423-605-8210.</h5>
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[0%] rotate-[140deg]">
                            </div>
                        </div>
                        <div class="relative">
                            <input
                                class="outline-none mt-3 py-3 pl-5 w-full rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                type="text" placeholder="Awesome! Thanks.">
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[0%] 2xl:left-[115px]">
                            </div>
                        </div>
                        <div class="relative">
                            <input
                                class="outline-none mt-3 py-3 pl-5 w-full rounded-full bg-[#4BBEFF] border-none placeholder:text-white placeholder:text-sm placeholder:font-bold"
                                type="text" placeholder="Can’t Wait To Hear Back From You.">
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#4BBEFF] rotate-[-150deg] absolute -bottom-[5px] left-[0%] 2xl:left-[115px]">
                            </div>
                        </div>
                        <div class="relative flex justify-end">
                            <h5
                                class="mx-[inherit] px-5 w-[80%] mt-3 py-3 rounded-full bg-[#313131] text-white text-sm font-bold ">
                                Talk Soon!</h5>
                            <div style="clip-path: polygon(48% 0, 0% 100%, 100% 100%);"
                                class="w-[15px] h-[15px] bg-[#313131] absolute -bottom-[4px] right-[0%] rotate-[140deg]">
                            </div>
                        </div>
                        <button
                            class="mt-20 text-lg bg-[#4BBEFF] font-bold px-20 py-2 rounded-full text-white uppercase"
                            type="submit">home page</button>

                    </form>
                </div>
            </div>
            <div class="flex-1 lg:mx-0 mx-7 lg:ml-28 2xl:ml-3">
                <h1 class="leading-none text-[40px] lg:text-6xl font-extrabold uppercase">NOW IT’S TIME TO TAKE YOU TO
                    THE NEXT LEVEL.
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
</script>

</html>