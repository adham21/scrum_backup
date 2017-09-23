<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class TeamsController extends Controller
{
   
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $teams = Team::select(['id', 'kode_team', 'nama_team']);
            return Datatables::of($teams)
                ->addColumn('action', function($team){
                    return view('datatable._action', [
                        'model' => $team,
                        'form_url' => route('teams.destroy', $team->id),
                        'edit_url' => route('teams.edit', $team->id),
                        'confirm_message' => 'Yakin mau menghapus ' . $team->nama_team . '?'
                    ]);
                })->make(true);

        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'kode_team', 'kode_team'=>'kode_team', 'title'=>'Kode Team'])
            ->addColumn(['data' => 'nama_team', 'nama_team'=>'nama_team', 'title'=>'Nama Team'])
            ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'Aksi', 'orderable'=>false, 'searchable'=>false]);
           
        return view('teams.index')->with(compact('html'));
    }

    public function create()
    {
        
        return view('teams.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_team' => 'required|unique:teams,kode_team',
            'nama_team' => 'required|unique:teams,nama_team'
        ]);
        $team = Team::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan ".$team->kode_team." & ".$team->nama_team.""
        ]);
        return redirect()->route('teams.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $team = Team::find($id);
        return view('teams.edit')->with(compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $team->update($request->only('kode_team','nama_team'));
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan ".$team->kode_team." & ".$team->nama_team.""
        ]);
        return redirect()->route('teams.index');

    }

    public function destroy($id)
    {
        Team::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Team berhasil dihapus"
        ]);

        return redirect()->route('teams.index');

    }
}
