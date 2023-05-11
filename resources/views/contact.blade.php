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
    <section>
        <div
            class="lg:ml-auto flex container mx-auto justify-between mt-[74px] lg:mt-44 2xl:mt-[15rem] mb-20 flex-col-reverse lg:flex-row ">
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
</html>