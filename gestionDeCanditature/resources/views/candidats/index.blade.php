@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="card mt-4form-control col-md-8 offset-md-2">
        <div class="h4 text-center bg-primary p-2 text-white">Formulaire d'ajout de Candidat</div>
        <div class="card-body">
            <form action="/store" class="align-middle" method="post">
                @csrf
                <div class="row mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Nom</label>
                    <input name="nom" required type="text" class="form-control col-md-8">
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Prenom</label>
                    <input name="prenom" required type="text" class="form-control col-md-8">
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Email</label>
                    <input name="email" required type="email" class="form-control col-md-8">
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Age</label>
                    <input name="age" max="35" min="18" type="number" class="form-control col-md-8">
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Niveau d'Etude</label>
                    <select required name="niveauEtude" id="0" class="form-control col-md-8">
                        <option default value="">Niveau d'Etude</option>
                        <option value="Licence 1">Licence 1</option>
                        <option value="Licence 2">Licence 2</option>
                        <option value="Licence 3">Licence 3</option>
                        <option value="Master 1">Master 1</option>
                        <option value="Master 2">MAster 2</option>
                    </select>
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Sexe</label>
                    <select required name="sexe" id="0" class="form-control col-md-8">
                        <option default value="">Sexe</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success btn-lg mt-2">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection