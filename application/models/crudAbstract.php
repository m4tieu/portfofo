<?php

abstract class Crud_Model extends CI_Model {

    public abstract function get($id);

    public abstract function getAll();

    public abstract function add($object);

    public abstract function update($object);

    public abstract function delete($id);
}
