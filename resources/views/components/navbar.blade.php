<nav id="navbar" class="bg-transparent fixed w-full z-20 top-0 start-0 px-2 md:px-12 text-white md:text-sm transition-all duration-300">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <div class="">
                <img src="{{ asset('assets/logo.png') }}" class="w-10 h-10 bg-white rounded-full p-2">
            </div>
            <span class="self-center text-lg md:text-xl md:mb-1 lg:mb-0 font-semibold whitespace-nowrap">NeoBilling</span>
        </div>

        <!-- Menu Toggle Button -->
        <div id="menu-button" class="lg:hidden p-2 border-2 border-slate-300 rounded-lg cursor-pointer active:bg-orange-500 focus:outline-none focus:ring-1 focus:ring-white">
            <!-- Menu Icon -->
            <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
            </svg>
            <!-- Close Icon (Hidden by Default) -->
            <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>             
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center justify-between w-full md:w-auto md:space-x-3 rtl:space-x-reverse text-sm ">
            <ul class="flex flex-col md:flex-row p-4 md:mr-8 md:p-0 mt-4 md:mt-0 font-medium border border-gray-100 rounded-lg md:space-x-4 rtl:space-x-reverse md:border-0">
                <li><a href="#home" class="block py-2 px-2 hover:text-orange-900 nav-link transition duration-300" aria-current="page">Beranda</a></li>
                <li><a href="#about" class="block py-2 px-2 hover:text-orange-900 nav-link transition duration-300">Tentang</a></li>
                <li><a href="#services" class="block py-2 px-2 hover:text-orange-900 nav-link transition duration-300">Layanan</a></li>
                <li><a href="#price" class="block py-2 px-2 hover:text-orange-900 nav-link transition duration-300">Harga</a></li>
                {{-- <li><a href="#faq" class="block py-2 px-2 hover:text-orange-900 nav-link transition duration-300">FAQ</a></li> --}}
                <li><a href="#contact" class="block py-2 px-2 hover:text-orange-900 nav-link transition duration-300">Kontak</a></li>
            </ul>

            <!-- Desktop Buttons -->
            <div class="hidden lg:flex space-x-4 rtl:space-x-reverse">
                <a href="http://my.idneobilling.com/auth/register">
                    <button type="button" class="border-2 border-white px-8 py-2 rounded-full text-white font-medium text-xs hover:bg-white hover:text-orange-900 hover:shadow-xl active:bg-slate-100 focus:outline-none focus:ring focus:ring-orange-300 transition duration-300">Daftar</button>             
                </a>
                <a href="https://wa.me/6281384329600" class="flex justify-center items-center bg-white px-4 py-2 rounded-lg text-black font-medium text-xs hover:shadow-xl hover:text-orange-800">
                    <button type="button" class="flex items-center justify-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5 text-green-500" fill="currentColor">
                            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                        </svg>
                        <span>Hubungi di Whatsapp</span>
                    </button>                 
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- mobile menu --}}
<div class="items-center justify-center fixed z-10 w-full px-4 mt-16">
            <!-- Dropdown (Mobile Menu) -->
            <div id="dropdown-menu" class="items-center top-16 my-4 w-full text-black border-2 border-orange-300 hidden lg:hidden bg-white rounded-xl py-4">
                <ul class="flex flex-col text-base font-medium w-full space-y-2">
                    <li><a href="#home" class="block py-4 px-6 border-b border-gray-50 hover:bg-slate-100">Beranda</a></li>
                    <li><a href="#about" class="block py-4 px-6 border-b border-gray-50 hover:bg-slate-100">Tentang</a></li>
                    <li><a href="#services" class="block py-4 px-6 border-b border-gray-50 hover:bg-slate-100">Layanan</a></li>
                    <li><a href="#price" class="block py-4 px-6 border-b border-gray-50 hover:bg-slate-100">Harga</a></li>
                    {{-- <li><a href="#faq" class="block py-4 px-6 border-b border-gray-50 hover:bg-slate-100">FAQ</a></li> --}}
                    <li><a href="#contact" class="block py-4 px-6 border-b border-gray-50 hover:bg-slate-100">Kontak</a></li>
                    <hr class="w-1/2 bg-gray-600 mx-auto text-center">

                {{-- button mobile --}}
                    <div class="justify-center">
                        <div class="justify-center items-center space-y-4 px-4 text-sm mt-4 w-full">
                            <a href="http://my.idneobilling.com/auth/register" class="flex justify-center items-center bg-orange-400 text-white font-semibold border-2 border-orange-400 hover:bg-white hover:text-orange-500 py-4 rounded-full hover:shadow-lg">
                                <button class="">Daftar</button>
                            </a>
                            <a href="https://wa.me/6281384329600" class="flex justify-center items-center border-2 border-green-400 hover:bg-white  hover:text-orange-300 hover:shadow-lg py-4 rounded-2xl">
                                <button class="flex space-x-3 items-center justify-center">
                                    <!-- WhatsApp Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-7 h-7 text-green-500" fill="currentColor">
                                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                    </svg>
                                    <!-- WhatsApp Text -->
                                    <span>Hubungi di Whatsapp</span>
                                </button>
                            </a>                            
                        </div>
                    </div>                    
                </ul>
            </div>
</div>

<script>
    // Toggle navbar
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.getElementById('menu-button');
        const dropdownMenu = document.getElementById('dropdown-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        menuButton.addEventListener('click', function() {
            // Toggle visibility of the dropdown menu
            dropdownMenu.classList.toggle('hidden');

            // Toggle between menu icon and close icon
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    });


    // buat navbar menjadi transparant
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        
        // Jika scroll lebih dari 50px, tambahkan bg-orange-400, jika tidak, tetap transparan
        if (window.scrollY > 50) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-orange-400');
        } else {
            navbar.classList.remove('bg-orange-400');
            navbar.classList.add('bg-transparent');
        }
    });

    // kustomisasi navbar aktif
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        let current = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100; // Sesuaikan offset jika diperlukan
            const sectionHeight = section.clientHeight;
            
            if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            // Hapus semua kelas termasuk border saat menu tidak aktif
            link.classList.remove('text-orange-900', 'font-bold', 'border-b-2', 'text-white');
            link.classList.add('text-white'); // Kembalikan ke keadaan default (putih)

            if (link.getAttribute('href').substring(1) === current) {
                // Tambahkan kelas untuk link yang aktif
                link.classList.add('text-orange-900', 'font-bold', 'border-b-2'); // Menambahkan border bawah pada menu aktif
            }
        });
    });

</script>


