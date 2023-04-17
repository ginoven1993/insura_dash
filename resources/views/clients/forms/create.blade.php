@extends('layouts.template')
@section('title')
 Forms clients
@endsection
@section('content')

<main>
    <div class="head-title">
        <div class="left">
            <h1>Forms Builder</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Forms</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="/clients">Clients</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Create Input</h3>
            </div>
            <div class="forms">
                <form action="{{route('clients.forms.store')}}" method="POST">
                    @csrf
                        <div>
                            <label>
                                <input type="checkbox" name="field_type" value="text">
                                <span class="list">Text Field</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="field_type" value="textarea">
                                <span class="list">Textarea</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="field_type" value="tel">
                                <span class="list">Number Field</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="field_type" value="date">
                                <span class="list">Date</span>
                            </label>
                        </div> 
                        <div>
                            <label>
                                <input type="checkbox" name="field_type" value="time">
                                <span class="list">Time</span>
                            </label>
                        </div> 
                        <div>
                            <label>
                                <input type="checkbox" name="field_type" value="password">
                                <span class="list">password</span>
                            </label>
                        </div> 
                        <div>
                            <label>
                                <input type="checkbox" name="field_type" value="password">
                                <span class="list">checkbox</span>
                            </label>
                        </div> 
                        
                        <div class="fields">
                            <label>Enter a Label Name</label> 
                            <input type="text" name="label_name" placeholder="Label Name">
                        </div>
                        <div class="fields">
                            <label>Enter a Placeholder</label>
                            <input type="text" name="placeholder" placeholder="Placeholder">
                        </div> 
                        <button class="nextbtn" type="submit"><span class="btnText">ADD Field</span></button>
                </form>
            </div>
        </div>
    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Input Fields</h3>
                <span style="color:red">The fields FirstName and LastName already exists statically</span>
            </div>
            <div class="todo">
					<ul class="todo-list">
                        @foreach ($form_builders as $form)
                            <li class="completed">
                                <p>{{$form->field_type}}</p>  <p>{{$form->label_name}}</p>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                        @endforeach
						
					</ul>
				</div> 
           
        </div>
    </div>
</main>

<script>
    const checkboxes = document.querySelectorAll('input[name="field_type"]');
    checkboxes.forEach((checkbox) => {
      checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
          checkboxes.forEach((otherCheckbox) => {
            if (otherCheckbox !== checkbox) {
              otherCheckbox.checked = false;
            }
          });
        }
      });
    });
  </script>
  <script>
    // Récupérer toutes les balises i
    var icons = document.querySelectorAll('i');
  
    // Parcourir chaque balise i et ajouter un gestionnaire d'événements clic
    icons.forEach(function(icon) {
      icon.addEventListener('click', function() {
        // Trouver l'élément parent de la balise i (dans ce cas, le Li)
        var parentLi = this.parentNode;
  
        // Masquer l'élément parent (cacher le Li)
        parentLi.style.display = 'none';
      });
    });
  </script>

@endsection