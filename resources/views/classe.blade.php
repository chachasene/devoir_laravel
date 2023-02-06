@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12 col-md-10">
        <h3>Liste de la Classe</h3>
    </div>
    <div class="col-12 col-md-2 text-end">
        <a class="btn btn-success" href="{{route('homepage')}}">Ajouter Etudiant</a>
    </div>

</div>




<div class="row">
    <div class="col-12">
        <table class="table table-info">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Matiere</th>
                    <th>Matiere</th>
                    <th>Note</th>
                    <th>Examen</th>
                </tr>
            </thead>
            <tbody>
                @if($etudiants->count() > 0)
                @foreach($etudiants as $projet)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$projet->nom}}</td>
                    <td>{{$projet->prenom}}</td>
                    <td>{{$projet->matiere}}</td>
                    <td>{{$projet->note}}</td>
                    <td>{{$projet->examen}}</td>
                    <td>{{$projet->semestre}}</td>
                    
                </tr>
                @endforeach
                @else

                @endif
            </tbody>
        </table>

    </div>



</div>
@endsection