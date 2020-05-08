<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterentalRequest;
use App\Http\Requests\UpdaterentalRequest;
use App\Repositories\rentalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class rentalController extends AppBaseController
{
    /** @var  rentalRepository */
    private $rentalRepository;

    public function __construct(rentalRepository $rentalRepo)
    {
        $this->rentalRepository = $rentalRepo;
    }

    /**
     * Display a listing of the rental.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rentals = $this->rentalRepository->all();

        return view('rentals.index')
            ->with('rentals', $rentals);
    }

    /**
     * Show the form for creating a new rental.
     *
     * @return Response
     */
    public function create()
    {
        return view('rentals.create');
    }

    /**
     * Store a newly created rental in storage.
     *
     * @param CreaterentalRequest $request
     *
     * @return Response
     */
    public function store(CreaterentalRequest $request)
    {
        $input = $request->all();

        $rental = $this->rentalRepository->create($input);

        Flash::success('Rental saved successfully.');

        return redirect(route('rentals.index'));
    }

    /**
     * Display the specified rental.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rental = $this->rentalRepository->find($id);

        if (empty($rental)) {
            Flash::error('Rental not found');

            return redirect(route('rentals.index'));
        }

        return view('rentals.show')->with('rental', $rental);
    }

    /**
     * Show the form for editing the specified rental.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rental = $this->rentalRepository->find($id);

        if (empty($rental)) {
            Flash::error('Rental not found');

            return redirect(route('rentals.index'));
        }

        return view('rentals.edit')->with('rental', $rental);
    }

    /**
     * Update the specified rental in storage.
     *
     * @param int $id
     * @param UpdaterentalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterentalRequest $request)
    {
        $rental = $this->rentalRepository->find($id);

        if (empty($rental)) {
            Flash::error('Rental not found');

            return redirect(route('rentals.index'));
        }

        $rental = $this->rentalRepository->update($request->all(), $id);

        Flash::success('Rental updated successfully.');

        return redirect(route('rentals.index'));
    }

    /**
     * Remove the specified rental from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rental = $this->rentalRepository->find($id);

        if (empty($rental)) {
            Flash::error('Rental not found');

            return redirect(route('rentals.index'));
        }

        $this->rentalRepository->delete($id);

        Flash::success('Rental deleted successfully.');

        return redirect(route('rentals.index'));
    }
}
