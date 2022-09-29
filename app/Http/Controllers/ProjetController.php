<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projet::orderBy('updated_at', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->filter(request(['search']))
            ->paginate(12);

        return view('admin.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $online = $request->online ? true : false;

        $rules = [
            'name'     => 'required',
            'duree'    => 'required',
        ];

        if ($request->image) {
            $rules['image'] = 'required|mimes:png,jpg,jpeg,PNG,JPG,JPEG,jfif|max:4000';
            $filename = time() . '.' . $request->image->extension();
            $path = $request->image->storeAs('img/projects', $filename, 'public');
        }

        $request->validate($rules);

        Projet::create([
            'duree'   => $request->duree,
            'name'            => strtolower($request->name),
            'image'           => $path ?? null,
            'description'     => $request->description ?? null,
            'online'          => $online,
        ]);

        return to_route('project.index')->with("message", 'Votre projet a été ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        $project = $projet;
        return view('admin.project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projet $projet)
    {
        $project = $projet;

        $online = $request->online ? true : false;

        $rules = [
            'duree'       => 'required',
            'name'         => 'required',
        ];

        if ($request->image) {
            $rules['image'] = 'required|mimes:png,jpg,jpeg,PNG,JPG,JPEG,jfif|max:4000';
            $filename = time() . '.' . $request->image->extension();
            $path = $request->image->storeAs('img/products', $filename, 'public');
        }else {
            $path = $project->image;
        }

        $request->validate($rules);

        $project->update([
            'duree'   => $request->duree,
            'name'            => strtolower($request->name),
            'image'           => $path ?? null,
            'description'     => $request->description ?? null,
            'online'          => $online,
        ]);

        return to_route('project.index')->with("message", 'Votre projet a été mis à avec succès !');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        $projet->delete();

        return to_route('project.index');
    }
}
