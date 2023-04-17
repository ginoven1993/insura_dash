@extends('layouts.template')
@section('title')
 Home
@endsection
@section('content')
<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<!--<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<ul class="box-info">
				<li>
					<!--<i class='bx bxs-calendar-check' ></i> -->
					<img src="{{asset('assets/img/Vector.png')}}" alt="">
					<span class="text">
						<h3>0</h3>
						<p>Insured Clients</p>
					</span>
				</li>
				<li>
					<img src="{{asset('assets/img/Vectors.png')}}" alt="">
					<span class="text">
						<h3>0</h3>
						<p>Partners</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>0</h3>
						<p>Employees</p>
					</span>
				</li>
                <li>
					<img src="{{asset('assets/img/Vector.png')}}" alt="">
					<span class="text">
						<h3>0</h3>
						<p>Board Employees</p>
					</span>
				</li>
			</ul>


		</main>
		<!-- MAIN -->
@endsection