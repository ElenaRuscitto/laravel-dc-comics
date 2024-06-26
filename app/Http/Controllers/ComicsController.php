<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helper;
use App\Http\Requests\ComicRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $comics = Comic::all();
        $comics = Comic::paginate(8);

        return view('Comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Nuovo Comics";
        $route = route('comics.store');
        $method = 'POST';
        $comic = null;
        return view('Comics.create-edit', compact('title', 'route', 'method', 'comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {
        $form_data = $request->all();

            $new_comic = new Comic();

            $form_data['slug'] = Helper::generateSlug($form_data['title'],new Comic());
            $new_comic->fill($form_data);
            // $new_comic->title = $form_data['title'];
            // $new_comic->slug = Helper::generateSlug($new_comic->title,new Comic());
            // $new_comic->description = $form_data['description'];
            // $new_comic->thumb = $form_data['thumb'];
            // $new_comic->price = $form_data['price'];
            // $new_comic->series = $form_data['series'];
            // $new_comic->sale_date = $form_data['sale_date'];
            // $new_comic->type = $form_data['type'];
            // $new_comic->artists = $form_data['artists'];
            // $new_comic->writers = $form_data['writers'];

            // dd($new_comic);
             $new_comic->save();

             return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('Comics.show', compact ('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $title = "Stai modificando:  $comic->title";
        $route = route('comics.update', $comic);
        $method = 'PUT';
        return view('Comics.create-edit', compact('title', 'route', 'method', 'comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $form_data = $request->all();
        // genero nuvo Slug solo se nuovo titolo è diverso dal vecchio
        if($form_data['title'] === $comic->title) {
            $form_data['slug'] = $comic->slug;
        } else {
            // altrimenti mantengo il vecchio slug
            $form_data['slug'] = Helper::generateSlug($form_data['title'], new Comic());
        }
        // effettuo il fill dei dati e salvo nel DB
        $comic->update($form_data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('delete', 'Il Comic' . $comic->title . ' è stato eliminato correttamente');
    }

    // public function index() {

    //     $count_project = Project::count();
    //     $last_project = Project::orderBy('id', 'desc')->first();
    //     return view('admin.home', compact('count_project', 'last_project'));
    //    }
}
