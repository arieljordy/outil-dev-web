<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">Liste des Document</h3>
    </div> <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">id</th>
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Publier_par</th>
                    <th>Extension</th>
                    <th>Type_document</th>
                    <th>Etat</th>
                    <th>Description</th>
                    <th>Nombre_vue</th>
                    <th>Fichier</th>
                    <th>CRUD</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documents??[] as $document )
                <tr class="align-middle">
                    <td>{{$document->id}}</td>
                    <td>{{$document->titre}}</td>
                    <td>{{$document->date}}</td>
                    <td>{{$document->publier_par}}</td>
                    <td>{{$document->extension}}</td>
                    <td>{{$document->type_document}}</td>
                    <td>{{$document->etat}}</td>
                    <td>{{$document->description}}</td>
                    <td>{{$document->nombre_vue}}</td>
                    <td>
                        
                        Aucun fichier
                    </td>
                    <td>
                        
                        <a href="" class="badge text-bg-primary">Voir fichier</a>
                        <a href="{{ route('document.edit', ['id' => $document->id ]) }}" class="badge text-bg-success"> Modifier </a>
                        <a href="{{ route('document.delete', ['id' => $document->id ]) }}" class="badge text-bg-danger"> Supprimer </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-end">
            <li class="page-item"> <a class="page-link" href="#">«</a> </li>
            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
            <li class="page-item"> <a class="page-link" href="#">»</a> </li>
        </ul>
    </div>
</div>