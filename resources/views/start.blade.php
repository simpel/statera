@extends('layouts.app')

@section('content')

	@include('partials.header')

	<div class="bg-primary content-between bg-bottom bg-repeat-x" style="background-image: url('images/lines.svg')">
		<div class="flex flex-col content-between max-w-xl mx-auto px-6 pb-6 ">
			<div class="flex-1 relative mt-32">
					<div class="md:w-3/4 lg:w-3/5 self-end pin-b relative">
						<h1 class="text-white font-sans font-normal leading-normal text-9xl mb-5">Track your mood. <br> It makes you feel better*</h1>
						<p class="text-white leading-normal mb-10">Let Statera track your mood over time so you can start to manage your mental health.</p>
						<a href="{{ route('register') }}" class="btn btn-large mb-3">Get started for free. Forever.</a>
						<p class="text-white text-xs">* Amado-Boccara, Donnet, and Olie, 1993.
		   Wadlinger and Isaacowitz, 2006.</p>
					</div>
				</div>
		</div>
	</div>

	@include('partials.features')
	@include('partials.register')



@endsection