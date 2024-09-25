<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaamilah</title>
    @vite('resources/css/app.css') <!-- Include Tailwind CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script> 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        #container {
            --target: 100%;
            background: linear-gradient(to right, #000 var(--target), #fff var(--target));
        }

        #title{
            background: linear-gradient(to right, #fff var(--target), #fff var(--target));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #kaa{
            background: linear-gradient(to right, #000 var(--target), #000 var(--target));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        body {
            overflow-x: hidden;
        }

        #con, #container {
            max-width: 100vw; /* Pastikan lebar elemen tidak melebihi viewport */
            overflow: hidden;
        }

    </style>

</head>
<body class="p-0 m-0">
        <x-navbar/>
        
        <div id="con" class="w-screen h-screen flex justify-center items-center">
           <a href="#"> <p id="logo" class=" text-black absolute text-5xl sm:text-8xl top-14 left-10 sm:top-60 sm:left-72 font-bodoni font-semibold -z-10 ">K'</p></a>
            {{-- <img src="{{ asset('kaamilah.png') }}" alt="Logo" class="w-24 absolute top-28 left-12 bg-black rounded-md"> --}}
            <h1 id="there" class="text-4xl sm:text-6xl text-white ">Hi There</h1>
            
            <div id="kotak-putih" class="w-72 h-40 md:w-[50vh] md:h-[25vh] sm:w-[100vh] sm:h-[50vh] -z-10 overflow-hidden rounded-xl bg-black absolute">
                <div id="bar" class="w-6 h-3 sm:w-10 sm:h-5 rounded-full bg-white mt-2 ml-2">
                    <div id="titik" class="w-2 h-2 sm:w-3 sm:h-3 relative top-[2px] left-[2px] sm:top-1 sm:left-1 rounded-full bg-black"></div>
                </div>
            </div>
            <h1 class="bottom-24 sm:bottom-36 overflow-hidden absolute">Scroll Down</h1>
            <x-ri-arrow-down-wide-line class=" w-9 sm:w-10 bottom-16 sm:bottom-28 overflow-hidden absolute"/>
        </div>
        <div id="container" class="w-screen h-screen flex justify-center items-center z-10">
            <h1 id="title" class="text-4xl sm:text-6xl md:text-[8vw] lg:text-6xl text-center leading-none tracking-tighter">
                We Are
            </h1>
            <span id="kaa" class="text-4xl sm:text-6xl text-center">Ka'amilah</span>
        </div>
    
        <!-- Spacer to allow scrolling effect -->
        <div class="w-screen h-[130vh] bg-slate-100 flex flex-1 justify-center text-black relative">
        {{-- <div>

            <div>
                <div id="about" class="w-32 h-14 sm:w-56 sm:h-16 rounded-full bg-black mt-5 flex items-center relative justify-center -top-32 left-10">
                    <p class="text-xl sm:text-2xl font-serif    ">About Us</p>
                </div>
            </div>

            <div class="flex flex-col gap-10">

                <div id="card-abt-1" class="w-72 h-56  sm:w-[500px] sm:h-44 bg-white relative left-[100px] top-52 rounded-2xl text-black ">
                    <div class="w-3 h-3 ml-3 top-3 absolute bg-red-400 rounded-full "></div>
                    <div class="w-3 h-3 ml-7 top-3 absolute bg-yellow-400 rounded-full "></div>
                    <div class="w-3 h-3 ml-11 top-3 absolute bg-green-400 rounded-full "></div>
                    <p class="p-10"> <strong>Lorem </strong>ipsum dolor sit amet consectetur, adipisicing elit. Consectetur officiis adipisci incidunt perspiciatis sequi similique necessitatibus praesentium eligendi inventore alias.</p>
                </div>

                <div id="card-abt-2" class="w-72 h-72 sm:w-[500px] sm:h-44 bg-white relative top-52 right-24 rounded-2xl text-black ">
                    <div class="w-3 h-3 ml-3 top-3 absolute bg-red-400 rounded-full "></div>
                    <div class="w-3 h-3 ml-7 top-3 absolute bg-yellow-400 rounded-full "></div>
                    <div class="w-3 h-3 ml-11 top-3 absolute bg-green-400 rounded-full "></div>
                    <p class="p-10"> <strong>Lorem </strong>ipsum dolor sit amet consectetur, adipisicing elit. Consectetur officiis adipisci incidunt perspiciatis sequi similique necessitatibus praesentium eligendi inventore alias.</p>
                </div>
            </div>
        </div> --}}
        
        <div class="top-32 left-16 sm:left-[500px] absolute">
            <h1 class="text-4xl sm:text-5xl font-bodoni">About Us</h1>
        </div>

        <div data-aos="fade-left"
             data-aos-easing="ease-in-out"
             data-aos-anchor-placement="center-bottom"
             data-aos-duration="1000"
         class="w-72 sm:w-[1100px] text-xl top-56 sm:top-[350px] left-[30%] absolute font-raleway flex flex-col gap-11">
            <p class="text-xl font-medium sm:text-4xl"><strong class="text-4xl">Welcome to Ka'amilah </strong>– your trusted solution for efficient and professional radiator repair. We are a service company dedicated to helping your vehicle perform at its best by providing optimal radiator maintenance and repair.</p>
            <h1><strong>Who Are We?</strong></h1>
        </div>

        </div>

        <div class="w-screen h-[100vh] bg-gray-800 flex justify-center text-white">
        </div>
    
        <!-- Particles Container -->
        {{-- <div class="bg-emerald-800 h-screen relative ">            <div id="particles-js"></div>
            <div class="place-content-center flex">
                <img class="w-36 mt-16 " src="{{ asset('kaamilah.png') }}" alt="Logo">
            </div>
            <div class="absolute top-1/4 left-1/4 sm:w-[30rem] z-10" >
                <div id="typed-strings" class="text-4xl font-bold">
                    <h1>Hey There!!.</h1>
                    <p>We are Ka'amillah Radiator</p>
                    <p>And...</p>
                    <p>Our job is to repair your radiator</p>
                </div>
                <span id="typed" class="text-2xl flex-wrap-reverse font-bold sm:text-7xl">
                    <!-- Text will be dynamically inserted here -->
                </span>
            </div>
            <div >
                <div id="Box" class=" w-48 h-72 bg-orange-400 rounded-md ml-24 bottom-96 absolute "></div>
                <div class="w-44 h-52 bg-cyan-100"></div>
            </div>
        </div>
        <div class="h-96"></div> --}}
        
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

        <script>
            AOS.init();
            console.clear();
            gsap.config({ trialWarn: false });
            gsap.registerPlugin(ScrollTrigger);
            gsap.to("#container", {
            "--target": "0%",
            ease: "none",
            scrollTrigger: {
                trigger: "#container",
                // markers: {
                // startColor: "yellow",
                // endColor: "#42a6e0",
                // fontSize: "14px"
                // },
                start: "top top",
                end: "+=2000",
                pin: true,
                scrub: 1
            }
            });

            gsap.to('#logo', {
                scrollTrigger:{
                    trigger:'#logo',
                    scrub:2.5,
                    start:'top top',
                    end:'+=1000',
                },
                y:800,
                rotate:30,
            })

            gsap.from('#logo',{
                y:250,
                rotate:20,
                duration:1.5, 
            })

            gsap.to('#con', {
                // ease: 'power4',
                scrollTrigger:{
                    trigger:'#con',
                    // markers:true,
                    start: 'top top',
                    end:'+=1000',
                    pin: '#there',
                    scrub: 2,
                    pinType: 'transform',
                },
                // scale:3,
                y:300,
                // opacity:0,
            })

            gsap.from('#con',{
                y:100,
                duration:1,
                ease:'power2.inOut'
            })

            gsap.from('#there',{
                y:200,
                duration:1,
                opacity:0,
            })
            
            gsap.to('#kotak-putih',{
                // rotate:180,
                y:200,
                scale:3,
                // ease: 'back.inOut(1.7)',
                scrollTrigger :{
                    // rotate: '#kotak-putih',
                    scrub:2,
                }
            })
            
            gsap.from('#kotak-putih',{
                y:200,
                scale:3,
                duration:.9,
            })


            let mm = gsap.matchMedia();

                mm.add("(min-width: 800px)", () => {
                    gsap.to('#bar', {
                    scrollTrigger:{
                        trigger:'#bar',
                        start: 'top top',
                        end: '+=50',
                        // markers:true,
                        scrub:2,
                    },
                    y:300,
                })

                gsap.to('#titik', {
                    scrollTrigger:{
                        trigger:'#titik',
                        start: 'top top',
                        end: 'bottom center',
                        // markers:true,
                        scrub:2,
                    },
                    x:20,
                })

                gsap.to('#card-abt-1', {
                scrollTrigger:{
                    trigger:'#card-abt-1',
                    scrub:1,
                    start:'top center',
                    end: 'bottom center',
                },
                x:-900,
            })

                });

                mm.add("(max-width: 799px)", () => {
                    gsap.to('#bar', {
                    scrollTrigger:{
                        trigger:'#bar',
                        start: 'top top',
                        end: '+=50',
                        // markers:true,
                        scrub:2,
                    },
                    y:125,
                })

            gsap.to('#titik', {
                scrollTrigger:{
                    trigger:'#titik',
                    start: 'top top',
                    end: 'bottom center',
                    // markers:true,
                    scrub:2,
                },
                x:10,
            })

            gsap.to('#card-abt-1', {
                scrollTrigger:{
                    trigger:'#card-abt-1',
                    scrub:1,
                    start:'top center',
                    end: 'bottom center',
                },
                x:-200,
            })
        });

            gsap.to('#about', {
                scrollTrigger:{
                    trigger:'#about',
                    scrub:1,
                    start:'center center',
                    end:'bottom center',
                },
                pin:'#about',
                y:200,
            })

            

            const lenis = new Lenis()

                lenis.on('scroll', (e) => {
                console.log(e)
                })

                function raf(time) {
                lenis.raf(time)
                requestAnimationFrame(raf)
                }

                requestAnimationFrame(raf)

        </script>
</body>

</html>