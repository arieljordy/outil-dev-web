<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;


class DocumentController extends Controller
{
    public function index()
    {
        $documents= Document::all();
        return view('document.index',compact('documents'));
        
    }

    public function save(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'date' => 'required|date',
            'publier_par' => 'required|string|max:255',
            'extension' => 'required|string|max:10',
            'type_document' => 'required|string|max:255',
            'etat' => 'required|boolean',
            'description' => 'nullable|string',
            'nombre_vue' => 'nullable|integer',
            ]);
        

        $data=[
            'titre'=> $request->input('titre'),
            'date'=> $request->input('date'),
            'publier_par'=> $request->input('publier_par'),
            'extension'=> $request->input('extension'),
            'type_document'=> $request->input('type_document'),
            'etat'=> $request->input('etat'),
            'description'=> $request->input('description'),
            'nombre_vue'=> $request->input('nombre_vue'),
                   
        ];
        //dd($request->all());
        Document::create($data);
        return redirect()->back()->with('success', 'Document créé avec succès');
    }

    public function edit($id)
    {
        $document = Document::find($id);
        $documents= Document::all();

        return view('document.index', compact( 'documents', 'document'));
         
    }

    
    public function update(Request $request, $id){
        // Validate the request data
        $request->validate([
            'titre' => 'required|string|max:255',
            'date' => 'required|date',
            'publier_par' => 'required|string|max:255',
            'extension' => 'nullable|string|max:10',
            'type_document' => 'nullable|string|max:255',
            'etat' => 'required|boolean',
            'description' => 'nullable|string',
            'nombre_vue' => 'nullable|integer',
        ]);

    

        // Find the document by its ID
        $document = Document::findOrFail($id);


        // Update the document with the request data
        $document->update([
            'titre' => $request->input('titre'),
            'date' => $request->input('date'),
            'publier_par' => $request->input('publier_par'),
            'extension' => $request->input('extension'),
            'type_document' => $request->input('type_document'),
            'etat' => $request->input('etat'),
            'description' => $request->input('description'),
            'nombre_vue' => $request->input('nombre_vue'),
            // Conserver le chemin du fichier
        ]);

        // Redirect back with a success message
        return redirect()->route('document.index')->with('success', 'Document mis à jour avec succès');
    }

    public function delete($id)
    {
    // Find the document by its ID
    $document = Document::findOrFail($id);

    // Delete the document
    $document->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Document deleted successfully');
    }
}