@extends('layouts-tp2.app')

@section('content')


<div class="card card-primary card-outline mb-4"> <!--begin::Header-->
    <div class="card-header">
        <div class="card-title">Formulaire</div>
    </div> <!--end::Header--> <!--begin::Form-->
    <form method="post" action="{{ isset($document) ? route('document.update', $document->id) : route('document.save') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($document))
            @method('PUT')
        @endif
    <!--begin::Body-->
    <div class="card-body">
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" value="{{isset($document)?$document->titre:""}}" class="form-control" name="titre" id="titre" aria-describedby="titreHelp">
            <div id="titreHelp" class="form-text">
                Donnez un titre significatif.
            </div>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" value="{{isset($document)?$document->date:""}}" class="form-control" name="date" id="date">
        </div>
        <div class="mb-3">
            <label for="publie_par" class="form-label">Publié par</label>
            <input type="text" value="{{isset($document)?$document->publier_par:""}}" class="form-control"  name="publier_par" id="publie_par">
        </div>
        <div class="mb-3">
            <label for="extension" class="form-label">Extension</label>
<select class="form-control" name="extension" id="extension">
<option value="pdf" {{ isset($document) && $document->extension == "pdf" ? "selected" : "" }}>PDF</option>
<option value="doc" {{ isset($document)?( ($document->extension=="docs")? "selected":"") : "" }}>DOC</option>
<option value="docx" {{ isset($document)?( ($document->extension=="docx")? "selected":"") : "" }}>DOCX</option>
<option value="xlsx" {{ isset($document) && $document->extension == "xlsx" ? "selected" : "" }}>XLSX</option>
<option value="png" {{ isset($document) && $document->extension == "png" ? "selected" : "" }}>PNG</option>
<option value="jpg" {{ isset($document) && $document->extension == "jpg" ? "selected" : "" }}>JPG</option>
</select>
        </div>
        <div class="mb-3">
            <label for="type_document" class="form-label">Type de document</label>
            <input type="text" value="{{isset($document)?$document->type_document:""}}" class="form-control" name="type_document" id="type_document">
        </div>
        <div class="mb-3">
            <label for="etat" class="form-label">État</label>
            <div class="mb-3 form-check">
                <input type="radio" class="form-check-input" id="publie" name="etat" value="1" {{ isset($document) && $document->etat == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="publie">Publié</label>
            </div>
            <div class="mb-3 form-check">
                <input type="radio" class="form-check-input" id="non-publie" name="etat" value="0" {{ isset($document) && $document->etat == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="non-publie">Non publié</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" value="{{isset($document)?$document->description:""}}" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="nombre_vue" class="form-label">Nombre de vues</label>
            <input type="number" value="{{isset($document)?$document->nombre_vue:""}}" class="form-control" name="nombre_vue" id="nombre_vue">
            @if(isset($document) && $document->file_path)
            <small class="form-text text-muted">
                Fichier actuel : <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank">{{ $document->file_name }}</a>
            </small>
            @endif
        </div>
        <div class="input-group mb-3">
            <input type="file" name="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02" accept=".pdf,.doc,.docx,.xlsx,.png,.jpg">Fichier</label>
        </div>
    </div> <!--end::Body--> <!--begin::Footer-->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ isset($document) ? "Mettre à jour" : "Enregistrer" }}</button>
    </div>
    </form> <!--end::Form-->

@include('document.table')
</div>

@endsection