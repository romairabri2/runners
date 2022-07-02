<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRunnerRequest;
use App\Http\Requests\UpdateRunnerRequest;
use App\Repositories\RunnerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RunnerController extends AppBaseController
{
    /** @var RunnerRepository $runnerRepository*/
    private $runnerRepository;

    public function __construct(RunnerRepository $runnerRepo)
    {
        $this->runnerRepository = $runnerRepo;
    }

    /**
     * Display a listing of the Runner.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $runners = $this->runnerRepository->all();

        return view('runners.index')
            ->with('runners', $runners);
    }

    /**
     * Show the form for creating a new Runner.
     *
     * @return Response
     */
    public function create()
    {
        return view('runners.create');
    }

    /**
     * Store a newly created Runner in storage.
     *
     * @param CreateRunnerRequest $request
     *
     * @return Response
     */
    public function store(CreateRunnerRequest $request)
    {
        $input = $request->all();

        $runner = $this->runnerRepository->create($input);

        Flash::success('Runner saved successfully.');

        return redirect(route('runners.index'));
    }

    /**
     * Display the specified Runner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $runner = $this->runnerRepository->find($id);

        if (empty($runner)) {
            Flash::error('Runner not found');

            return redirect(route('runners.index'));
        }

        return view('runners.show')->with('runner', $runner);
    }

    /**
     * Show the form for editing the specified Runner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $runner = $this->runnerRepository->find($id);

        if (empty($runner)) {
            Flash::error('Runner not found');

            return redirect(route('runners.index'));
        }

        return view('runners.edit')->with('runner', $runner);
    }

    /**
     * Update the specified Runner in storage.
     *
     * @param int $id
     * @param UpdateRunnerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRunnerRequest $request)
    {
        $runner = $this->runnerRepository->find($id);

        if (empty($runner)) {
            Flash::error('Runner not found');

            return redirect(route('runners.index'));
        }

        $runner = $this->runnerRepository->update($request->all(), $id);

        Flash::success('Runner updated successfully.');

        return redirect(route('runners.index'));
    }

    /**
     * Remove the specified Runner from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $runner = $this->runnerRepository->find($id);

        if (empty($runner)) {
            Flash::error('Runner not found');

            return redirect(route('runners.index'));
        }

        $this->runnerRepository->delete($id);

        Flash::success('Runner deleted successfully.');

        return redirect(route('runners.index'));
    }
}
