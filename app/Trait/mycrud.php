<?php

namespace App\Trait;

trait mycrud
{
    protected $model;
    protected $storerequest;
    protected $updaterequest;

    public function index()
    {
        return $this->model->all();
    }

    public function store()
    {
        return response()->json($this->model->create(app($this->storerequest)->validated()),201);
    }
    public function show($id)
    {
        return ($this->model->find($id))?? response()->json(['message'=>'Not Found'],404);
    }
    public function update($id)
    {
        return response()->json(($this->show($id)->update(app($this->updaterequest)->validated())? $this->show($id):'error'),200);
    }
    public function destroy($id)
    {
        return response()->json($this->show($id)->delete(),204);
    }
}
