@extends('main')

@section('content')

<div class="container">

    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#add_breed">
        Add 
    </button>


    
   <table class="table">
        <thead>
            
                <th>Name</th>
                <th>Furparent Name</th>
                <th>Date of Adoption</th>
            </tr> 
        </thead>
        <tbody>
           
      
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> 
        </tbody>
    </table>

    <!-- Create Furparent Modal -->
    <div class="modal fade" id="add_breed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form method="POST" action=" {{  route('breed.add') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control" type="text" name="name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Breed</label>
                            <select class="form-control" name="furparent_id" request>
                            <option disabled selected>-- Select Furparent --</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Adoption Date</label>
                            <input class="form-control" type="date" name="adoptiondate" required>
                        </div>
                        

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
