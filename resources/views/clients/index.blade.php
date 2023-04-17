@extends('layouts.template')
@section('title')
 Clients
@endsection
@section('content')
<!-- MAIN -->
		<main>
        
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>The Clients</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
						<a onclick="document.getElementById('addclient').style.display='block'" class="btn-download">
                            <i class='bx bxs-cloud-download' ></i>
                            <span class="text">Add Client</span>
				        </a>
					</div>
					<table>
						<thead>    
							<tr>
                                <th>ID</th>
                                <th>Noms</th>
                                <th>Status</th>
                                <th>Actions</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($clients as $client)
                            @if($client =! isempty())
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->firstname }} {{ $client->lastname }}</td>
                                    <td>
                                        @if ($client->status == '0')
                                            <span class="status completed">Insured</span>
                                        @else 
                                            <span class="status pending">Uninsured</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href=""><ion-icon name="people-circle-outline" style="font-size: 1.5em;background-color: rgba(26, 175, 26, 0.959);color: white;padding: 8px 6px;"></ion-icon> </a>
                                        <a href=""><ion-icon name="create" style="font-size: 1.5em;background-color: rgba(32, 126, 170, 0.959);color: white;padding: 8px 6px;"></ion-icon> &nbsp  &nbsp;</a>
                                        <a href=""> <ion-icon name="trash" style="font-size: 1.5em;background-color: rgb(238, 60, 60);color: white;padding: 8px 6px;"></ion-icon> </a>
                                </td>
                                </tr>
                                @else
                                <tr>
                                    No Data Found !
                                </tr>
                                @endif
                                @endforeach
						</tbody>    
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
		<div class="modal" id="addclient" >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                        <div class="header">
                            <h3>Add Client</h3>
                        </div> <hr>
                       
                        <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
                           @csrf
                        <div class="card-body">
                            <div class="input-field">
                                <input type="text" class="form-control" placeholder="Enter The FirstName"  name="firstname" required>	
                            </div>
                            <div class="input-field">
                                <input type="text" class="form-control" placeholder="Enter The LastName"  name="lastname" required>	
                            </div>
                            @foreach ($form_builders as $form)
                                <div class="input-field">
                                    <input type="{{$form->field_type}}" class="form-control" placeholder="{{$form->placeholder}}"  name="{{$form->label_name}}" required>	
                                </div>
                            @endforeach
                            @foreach ($partners as $partner)
                                <div class="input-field">
                                    <label for="">Partners</label>
                                    <select name="partner_id" id="">
                                        <option value="{{$partner->partner_id}}">{{$partner->name}}</option>
                                    </select>
                                </div>
                            @endforeach
                            @foreach ($insurances as $insurance)
                                <div class="input-field">
                                    <label for="">Insurances</label>
                                    <select name="insurance_id" id="">
                                        <option value="" disabled></option>
                                        <option value="{{$insurance->insurance_id}}">{{$insurance->categorie}}</option>
                                    </select>
                                </div>
                             @endforeach

                        </div>
                        <div class="footer">
                            <button class="nextbtn" type="submit"><span class="btnText">ADD</span></button>
                            <button onclick="document.getElementById('addclient').style.display='none'"><span >CANCEL</span></button>  
                        </div>     
                    </form>
                    
                </div>
            </div>

    </div>
@endsection
