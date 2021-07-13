@extends('layouts.sei')

@section('content')

<!-- slider -->
<div class="slider-content relative">
	<div class="slider relative">
		<img class="w-full" src="{{url('img/slider1.png')}}">
		<div class="bg-black bg-opacity-40 p-10 flex flex-col absolute content hidden md:block">
			<div class="sei-top-border"></div>
			<h1 class="gotham-bold text-white md:text-3xl pt-5 text-md">SOLUSI TEPAT GUNA UNTUK KEBUTUHAN EFISIENSI ENERGI ANDA</h1>
			<p class="text-white gotham-book">Kami, PT Solusi Energindo Inovasi (PT SEI) adalah perusahaan penyedia jasa Konservasi dan Efisiensi Energi menggunakan Solar PV.</p>
			<button class="text-white sei-bg-green p-2 rounded-xl nav-sei my-8 w-3/4"><p class="nav-wrapper gotham-bold text-2xl pt-3">SEE PROJECT REFERENCES</p></button>
		</div>
	</div>
	<button class="slider-left absolute"></button>
	<button class="slider-right absolute"></button>
</div>

<!-- benefit -->
<div class="bg-benefit p-10">
	<div class="p-3 flex relative justify-center z-10 quote-ps">
		<div class="flex md:flex-row sei-bg-green items-center w-3/4 p-3 nav-sei rounded-xl justify-center">
			<p class="text-white gotham-bold md:block hidden nav-wrapper">CARI TAHU BERAPA BESAR EFISIENSI ENERGI YANG BISA ANDA LAKUKAN DENGAN SOLAR PANEL</p>
			<button class="bg-white p-2 md:ml-6 rounded-xl"><p class="nav-wrapper text-sm gotham-bold p-2">GET QUOTE</p></button>
		</div>
	</div>
	<div class="md:mx-20  flex flex-col items-center">
		<h1 class="gotham-bold md:mx-40 text-center text-xl">Kami adalah SOLUSI bagi kebutuhan energi efisiensi untuk para pelanggan perumahan, komersial, industri dan BUMN demi tercapainya Indonesia yang lebih maju dan sejahtera.</h1>
		<div class="my-10 flex flex-col items-center">
			<div class="sei-top-border"></div>
			<h1 class="text-center sei-color gotham-bold text-2xl" >BENEFITS OF SOLAR PV</h1>
		</div>
		<div class="flex flex-col md:w-2/3">
			<div class="flex md:flex-row flex-col dot-border-bottom p-5">
				<div class="benefit-img md:w-1/3">
					<img src="{{url('img/benefit1.png')}}" class="w-full">
				</div>
				<div class="flex flex-col justify-center m-5 md:w-2/3">
					<h3 class="sei-green gotham-bold text-3xl">Penurunan biaya tagihan listrik PLN</h3>
					<p class="gotham-book text-md">Tidak mengenal adanya pemadaman listrik untuk sistem off-grid dan hybrid</p>
				</div>
			</div>
			<div class="flex md:flex-row flex-col dot-border-bottom p-5">
				<div class="benefit-img md:w-1/3">
					<img src="{{url('img/benefit2.png')}}" class="w-full">
				</div>
				<div class="flex flex-col justify-center m-5 md:w-2/3">
					<h3 class="sei-green gotham-bold text-3xl">Energi Matahari - sumber energi bersih</h3>
					<p class="gotham-book text-md">Listrik yang dihasilkan oleh penggunaan Solar PV diperoleh dari Energi Matahari dan merupakan sumber energi bersih dikarenakan tidak ada emisi rumah kaca yang dilepaskan ke atmosfer</p>
				</div>
			</div>
			<div class="flex md:flex-row flex-col dot-border-bottom p-5">
				<div class="benefit-img md:w-1/3">
					<img src="{{url('img/benefit3.png')}}" class="w-full">
				</div>
				<div class="flex flex-col justify-center m-5 md:w-2/3">
					<h3 class="sei-green gotham-bold text-3xl">Biaya pengoperasian rendah</h3>
					<p class="gotham-book text-md">Proses fotovoltaik yang mengubah sinar matahari menjadi listrik, tidak memerlukan bahan bakar apapun dan Anda dapat melakukan penghematan biaya</p>
				</div>
			</div>
			<div class="flex md:flex-row flex-col dot-border-bottom p-5">
				<div class="benefit-img md:w-1/3">
					<img src="{{url('img/benefit4.png')}}" class="w-full">
				</div>
				<div class="flex flex-col justify-center m-5 md:w-2/3">
					<h3 class="sei-green gotham-bold text-3xl">Ramah Lingkungan dan Bebas polusi (CO₂)</h3>
					<p class="gotham-book text-md">Tidak menghasilkan emisi berbahaya seperti karbon dioksida (CO2)</p>
				</div>
			</div>
			<div class="flex md:flex-row flex-col dot-border-bottom p-5">
				<div class="benefit-img md:w-1/3">
					<img src="{{url('img/benefit5.png')}}" class="w-full">
				</div>
				<div class="flex flex-col justify-center m-5 md:w-2/3">
					<h3 class="sei-green gotham-bold text-3xl">Metode pembiayaan proyek yang beragam</h3>
					<p class="gotham-book text-md">Dapat disesuaikan dengan anggaran dan kebutuhan Anda</p>
				</div>
			</div>
			<div class="flex md:flex-row flex-col dot-border-bottom p-5">
				<div class="benefit-img md:w-1/3">
					<img src="{{url('img/benefit6.png')}}" class="w-full">
				</div>
				<div class="flex flex-col justify-center m-5 md:w-2/3">
					<h3 class="sei-green gotham-bold text-3xl">Mendapatkan ‘Green Energy Certificate'</h3>
					<p class="gotham-book text-md">Untuk pelanggan Gedung Komersial dan Industri</p>
				</div>
			</div>
			<div class="flex md:flex-row flex-col p-5">
				<div class="benefit-img md:w-1/3">
					<img src="{{url('img/benefit7.png')}}" class="w-full">
				</div>
				<div class="flex flex-col justify-center m-5 md:w-2/3">
					<h3 class="sei-green gotham-bold text-3xl">Dapat diperbarui</h3>
					<p class="gotham-book text-md">Solar PV menghasilkan listrik dengan mengubah aliran energi matahari yang terus menerus dapat diperbarui</p>
				</div>
			</div>
		</div>
	</div> 
</div>

<!-- grow -->
<div class="bg-grow md:p-40 p-5 ">
	<div class="my-10">
		<div class="sei-top-border"></div>
		<p class="text-white gotham-bold text-xl">We are growing the way inspiring<br> people to improve energy efficiency</p>
	</div>
	<div class="flex md:flex-row flex-col">
		<div class="flex md:flex-row flex-col m-5 md:w-1/3 items-center">
			<div class="grow-img">
				<img src="{{url('img/grow1.png')}}" class="w-full">
			</div>
			<div class="flex flex-col m-3 justify-center">
				<h3 class="gotham-bold text-white text-center">981,651 kWh</h3>
				<p class="gotham-bold text-white text-center text-sm">Annual Green<br>Energy Production</p>
			</div>
		</div>
		<div class="flex md:flex-row flex-col m-5 md:w-1/3 items-center">
			<div class="grow-img">
				<img src="{{url('img/grow2.png')}}" class="w-full">
			</div>			
			<div class="flex flex-col m-3 justify-center">
				<h3 class="gotham-bold text-white text-center">8,413.92 Tones</h3>
				<p class="gotham-bold text-white text-center text-sm">Of CO Reduce<br>(25 years)</p>
			</div>
		</div>
		<div class="flex md:flex-row flex-col m-5 md:w-1/3 items-center">
			<div class="grow-img">
				<img src="{{url('img/grow3.png')}}" class="w-full">
			</div>
			<div class="flex flex-col m-3 justify-center">
				<h3 class="gotham-bold text-white text-center">215,741</h3>
				<p class="gotham-bold text-white text-center text-sm">No. of Trees<br>Planted<br>(25 years)</p>
			</div>
		</div>
	</div>
</div>

<!-- find us -->
<div class="md:mx-20 my-14">
	<h1 class="sei-green text-center text-3xl gotham-bold p-5 mt-7">Find Us On Google Maps</h1>
	<div class="map-wrapper md:relative md:left-1/4">	
		<div class="w-full" style="height: 600px">
			{!! Mapper::render() !!}
		</div>
	</div>
</div>
@endsection