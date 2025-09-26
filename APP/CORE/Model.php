<?php

class Model extends Database {
    protected $table;
    protected $allowedFields = [];

    // CREATE
    public function create($data) {
       show($data);
    }

    // READ ALL
    public function getAll() {

    }

    // READ ONE
    public function getById($id) {
       
    }

    // UPDATE
    public function update($id, $data) {
        
    }

    // DELETE
    public function delete($id) {
       
    }
}