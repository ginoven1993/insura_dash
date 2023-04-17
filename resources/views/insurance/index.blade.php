@extends('layouts.template')
@section('title')
 Insurances
@endsection
@section('content')
<!-- MAIN -->
<main>
        
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>The Insurances</h3>
                <i class='bx bx-search' ></i>
                <i class='bx bx-filter' ></i>
                <a onclick="document.getElementById('addinsurance').style.display='block'" class="btn-download" class="btn-download">
                    <i class='bx bx-plus' ></i>
                    <span class="text">Add Insurance</span>
                </a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Categories</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($insurances as $insurance)
                    <tr>
                        <td>{{$insurance->categorie}}</td>
                        <td>{{$insurance->description}}</td>
                        <td>
                           <a href=""> <ion-icon name="create" style="font-size: 1.5em;background-color: rgba(32, 126, 170, 0.959);color: white;padding: 8px 6px;"></ion-icon></a> &nbsp  &nbsp;
                           <a href=""><ion-icon name="trash" style="font-size: 1.5em;background-color: rgb(238, 60, 60);color: white;padding: 8px 6px;"></ion-icon> </a>
                       </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="modal" id="addinsurance" >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                    <div class="header">
                        <h3>Add Partner</h3>
                    </div> <hr>
                   
                    <form action="{{route('insurance.store')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">

                            <div class="input-field">
                                <input type="text" class="form-control" placeholder="Categorie"  name="categorie" required>	
                            </div>
                        
                            <div class="input-field">
                                <input type="text" class="form-control" placeholder="Description"  name="description" required>	
                            </div>

                        </div>
                    <div class="footer">
                        <button class="nextbtn" type="submit"><span class="btnText">ADD</span></button>
                        <button onclick="document.getElementById('addclient').style.display='none'"><span >CANCEL</span></button>  
                    </div>     
                    </form>
                
            </div>
        </div>
 </div>

</main>
<!-- MAIN -->
@endsection