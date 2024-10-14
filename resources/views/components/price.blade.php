<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>price</title>
</head>
<body>

    <section id="price" class="bg-slate-50 justify-center items-center px-6 lg:px-0 py-2 md:py-12 lg:py-2">
        <div class="max-w-5xl mx-auto text-sm md:text-sm md:mt-24 md:mb-12 mt-24 mb-12">

            {{-- about title here--}}
            <div data-aos="fade-up" data-aos-duration="1500" class="text-center md:mb-10 mb-8 space-y-3">
                <h2 class="text-4xl font-bold text-orange-900 uppercase">Harga</h2>
                <div class="border-t-2 border-orange-500 my-2 w-16 mx-auto"></div>
                {{-- <p class="md:px-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, praesentium illum repudiandae aperiam laborum optio, perspiciatis rem a aspernatur nostrum tenetur et repellat minus dolorum!</p>
                <p class="md:px-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates earum necessitatibus delectus in corrupti reprehenderit.</p> --}}
                <p class="text-orange-700 font-semibold md:text-base">Pilih paket yang sesuai dengan kebutuhan anda.</p>
            </div>

            <!-- price.blade.php -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-8">
                @if (isset($packages) && count($packages) > 0)
                    @foreach ($packages as $package)
                        <!-- Pricing Card -->
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="flex flex-col py-8 px-10 w-full lg:w-auto space-y-8 mx-auto lg:mx-2 max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-200 shadow-lg hover:shadow-orange-200 transition ease-in-out hover:-translate-y-2 duration-300 h-full {{ $package['is_trial'] ? 'border-2 border-green-300' : 'border-gray-200' }}">
                                {{-- <span class="text-sm lg:text-xs font-semibold">
                                    @if ($package['is_trial'])
                                        <p class="bg-green-500 text-white p-2 w-full rounded-t-lg top-20">Paket Trial</p>
                                    @else
                                        <p class="bg-red-500 text-white p-2 w-full rounded-t-lg top-20">Paket Berbayar</p>
                                    @endif
                                </span> --}}
                                <div class="flex-grow justify-center space-y-2 text-orange-900">
                                    <h3 class="text-lg font-semibold text-orange-800">{{ $package['name'] }}</h3> 
                                    <h1 class="text-4xl font-extrabold"><span class="text-3xl align-center relative -top-2">Rp </span>{{ number_format($package['tariff'], 0, ',', '.') }}</h1>
                                    <p class="text-sm text-orange-600 font-semibold">Per
                                        @if ($package['year'] > 0)
                                            {{ $package['year'] }} Tahun
                                        @endif
                                        @if ($package['month'] > 0)
                                            {{ $package['month'] }} Bulan
                                        @endif
                                        @if ($package['day'] > 0)
                                            {{ $package['day'] }} Hari
                                        @endif
                                    </p>
                                </div>
            
                                <!-- List of features -->
                                <?php
                                    // Misalkan $package['description'] berisi HTML dengan <li>
                                    $description = $package['description'];
                                    
                                    // Mengganti setiap <li> dengan <li> yang memiliki ikon checklist
                                    $descriptionWithIcons = preg_replace(
                                        '/<li>(.*?)<\/li>/',
                                        '<li class="flex items-center leading-loose"><i class="fas fa-check-circle text-green-500 mr-2"></i> $1</li>',
                                        $description
                                    );
                                ?>

                                <ul role="list" class="space-y-3 text-left text-sm lg:text-xs flex-grow">
                                    {!! $descriptionWithIcons !!}
                                </ul>
                                
            
                                {{-- Order Button --}}
                                <a href="http://my.idneobilling.com/" class="bg-orange-400 py-3 lg:py-2 w-full font-semibold rounded-lg text-white hover:bg-orange-500">
                                    <button>mulai berlangganan</button>
                                </a>
                            </div>                    
                        </div>
                    @endforeach
                @else
                    <div class="justify-center items-center mx-auto text-center space-y-4">
                        <img src="{{ asset('assets/no-data.png') }}" class="w-32 h-auto items-center">
                        <p class="text-center text-gray-500">Tidak ada paket yang tersedia saat ini.</p>
                    </div>                
                @endif
            </div>

        </div>
    </section>
    

</body>
</html>
