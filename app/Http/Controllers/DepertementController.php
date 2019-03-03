<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DepertementCreateRequest;
use App\Http\Requests\DepertementUpdateRequest;
use App\Repositories\DepertementRepository;

/**
 * Class DepertementsController.
 */
class DepertementController extends Controller
{
    /**
     * @var DepertementRepository
     */
    protected $depertement;

    /**
     * DepertementsController constructor.
     *
     * @param DepertementRepository $repository
     */
    public function __construct(DepertementRepository $depertement)
    {
        $this->depertement = $depertement;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depertements = $this->depertement->all();

        return view('depertement.index', compact('depertements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depertement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DepertementCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(DepertementCreateRequest $request)
    {
        $depertement = $this->depertement->create($request->all());

        toastr_created();
        if ($request->input('action') == 'save') {
            return redirect()->back();
        } else {
            return redirect()->route('depertements.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $depertement = $this->depertement->find($id);

        return view('depertement.edit', compact('depertement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DepertementUpdateRequest $request
     * @param string                   $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(DepertementUpdateRequest $request, $id)
    {
        $data = $request->except('_token', '_method');
        $depertement = $this->depertement->update($data, $id);

        toastr_updated();
        if ($request->input('action') == 'save') {
            return redirect()->back();
        } else {
            return redirect()->route('depertements.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = $this->brand->delete($id);

        toastr_deleted();

        return redirect()->back();
    }
}
