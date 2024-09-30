<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body id="home">
    <section class="flex bg-orange-400 justify-center items-center px-6 lg:px-0 md:py-6 h-screen md:h-auto md:rounded-b-3xl">
        <div class="max-w-5xl mx-auto my-8 text-sm md:text-sm ">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mx-auto">
            <!-- Image Section -->
                <div class="md:col-span-5 lg:col-span-5 order-1 md:order-2 flex items-center justify-center" data-aos="zoom-in" data-aos-duration="1500">
                    <img src="{{ asset('assets/img1.png') }}" class="animate-smallbounce brightness-110">
                </div>
        
                <!-- Text Section -->
                <div class="md:col-span-7 lg:col-span-7 order-2 md:order-1 place-self-center md:mt-2 md:pr-12 lg:pr-20"  data-aos="fade-up" data-aos-duration="1500">

                    {{-- header title --}}
                    <h1 class="text-4xl md:text-3xl lg:text-4xl font-bold tracking-tight leading-none text-white">
                        Lorem ipsum dolor amet consectetur.
                    </h1>
                    <p class="my-5 font-medium text-gray-100 text-sm md:text-sm ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt tenetur debitis perferendis temporibus minus, numquam quaerat ullam magnam placeat vel culpa ipsum incidunt explicabo.</p>
                    
                    {{-- button here --}}
                    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4">
                        <a href="#about" class="flex inline-flex space-x-2 bg-white hover:bg-slate-100 text-orange-900 font-semibold py-2 items-center text-center justify-center px-2 rounded-full text-sm md:text-xs hover:shadow-lg active:bg-slate-100 focus:outline-none focus:ring focus:ring-orange-300 group">
                            <p>Get started</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2 my-1 transition ease-in-out group-hover:translate-x-2 duration-300">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                        <a href="#" class="inline-flex space-x-2 border-2 text-white border-white hover:bg-white hover:text-orange-900 font-semibold py-2 items-center text-center justify-center px-2 rounded-full text-sm md:text-xs hover:shadow-lg active:bg-white focus:outline-none focus:ring focus:ring-orange-300 transition duration-500 group" onclick="toggleModal(true)">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6  "> 
                                {{-- transition ease-in-out group-hover:origin-center group-hover:-rotate-12 group-hover:-translate-x-1 duration-300 --}}
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                            </svg>
                            <p>Watch Video</p>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
    
</body>
</html>

 <!-- Modal Web -->
 <div id="webModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-100">
    <!-- Close Button Positioned on the Overlay -->
    <button class="absolute top-10 right-10 text-white hover:text-gray-300 z-50" onclick="toggleModal(false)">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Modal Content -->
    <div class="relative bg-white rounded-sm shadow-lg max-w-4xl w-full h-4/5">
        <div class="w-full h-full">
            <iframe id="webIframe" class="w-full h-full" src="" frameborder="0"></iframe>
        </div>
    </div>
</div>

<script>
    function toggleModal(show) {
        const modal = document.getElementById('webModal');
        const iframe = document.getElementById('webIframe');
        if (show) {
            // Ganti dengan URL web yang ingin ditampilkan
            iframe.src = "http://127.0.0.1:8000/";
            modal.classList.remove('hidden');
        } else {
            iframe.src = "";
            modal.classList.add('hidden');
        }
    }
</script>




