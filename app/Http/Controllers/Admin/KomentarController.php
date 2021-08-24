<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Komentar;
use App\Models\ReplyKomen;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class KomentarController extends Controller
{
    public function balasKomentar(Request $request, $id_komentar)
    {
        $data = $request->all();
        $data['komentar_id'] = $id_komentar;

        ReplyKomen::create($data);

        return redirect()->back();
    }

    public function hapusKomentar($id)
    {
        $data = Komentar::findOrFail($id);

        $data->delete();

        return redirect()->back();
    }
}
