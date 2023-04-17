@extends('layouts.template')
@section('title')
 Partners
@endsection
@section('content')
<!-- MAIN -->
		<main>
        
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>The Partners</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
                        <a onclick="document.getElementById('addpartner').style.display='block'" class="btn-download" class="btn-download">
                            <i class='bx bx-plus' ></i>
                            <span class="text">Add Partner</span>
				        </a>
					</div>
					<table>
						<thead>
							<tr>
                                <th>Image</th>
                                <th>Names</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Description</th>
                                <th>Actions</th>
							</tr>
						</thead>
						@foreach ($partners as $partner)
						   <tbody>
                           		 @if(!empty($partner))
									<tr>
										<td><img src="{{asset('assets/img/K2.png')}}" alt=""></td>
										<td>{{ $partner->name }}</td>
										<td>{{ $partner->email }}</td>
										<td>{{ $partner->phone}}</td>
										<td>{{ $partner->partner_type}}</td>
										<td>
											<a href=""><ion-icon name="create" style="font-size: 1.5em;background-color: rgba(32, 126, 170, 0.959);color: white;padding: 8px 6px;"></ion-icon></a> &nbsp  &nbsp;
											<a href=""><ion-icon name="trash" style="font-size: 1.5em;background-color: rgb(238, 60, 60);color: white;padding: 8px 6px;"></ion-icon></a>
										</td>
									</tr>
									@else
									<tr>
										No Data Found !
									</tr>
								@endif
						   </tbody>
						@endforeach
					</table>
				</div>
				
			</div>
            <div class="modal" id="addpartner" >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                            <div class="header">
                                <h3>Add Partner</h3>
                            </div> <hr>
                           
                            <form action="{{route('partners.store')}}" method="POST" enctype="multipart/form-data">
                               
                                <div class="card-body">
        
                                    <div class="input-field">
                                        <input type="text" class="form-control" placeholder="Enter name"  name="name" >	
                                    </div>
                                
                                    <div class="input-field">
                                        <input type="text" class="form-control" placeholder="Enter email"  name="email" >	
                                    </div>
        
                                    <div class="input-field">
                                        <input type="tel" class="form-control" placeholder="Enter phone"  name="phone" >	
                                    </div>
                                
                                    <div class="input-field">
                                        <input type="text" class="form-control" placeholder="Enter town"  name="town" >	
                                    </div>

									<div class="input-field">
                                        <input type="file" class="form-control" placeholder="Enter logo"  name="logo" >	
                                    </div>

									<div class="input-field">
                                        <input type="text" class="form-control" placeholder="Enter Partner Type"  name="partner_type" >	
                                    </div>
        
                                </div>
                            <div class="footer">
                                <button class="nextbtn" type="submit"><span class="btnText">ADD</span></button>
                                <button onclick="document.getElementById('addpartner').style.display='none'"><span >CANCEL</span></button>  
                            </div>     
                            </form>
                        
                    </div>
                </div>
         </div>
    
		</main>
		<!-- MAIN -->
@endsection
