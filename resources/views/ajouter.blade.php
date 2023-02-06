@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-10">
        <h3>Ajouter etudiant</h3>
    </div>
    <div class="col-12 col-md-2 text-end">
        <a class="btn btn-danger" href="{{route('index')}}">Liste</a>
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach

    </ul>

</div>
@endif
        <form method="POST" action="{{route('etudiants.store')}}">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="" name="nom" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="" name="prenom" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Matiere">Matiere</label>
                    <select name="matiere" id="matiere" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        @foreach($matiere as $mat)
                        <option value="{{$mat}}"> {{$mat }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="" class="form-label">Note 1</label>
                    <input type="number" class="form-control" id="" name="note" placeholder=""></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="" class="form-label">Examen</label>
                    <input type="number" class="form-control" id="" name="examen" placeholder=""></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="semestre" class="form-label">Semestre</label>
                    <select name="semestre" id="semestre" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        @foreach($semestre as $sem)
                        <option value="{{$sem}}"> {{$sem }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
			<br>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
@endsection