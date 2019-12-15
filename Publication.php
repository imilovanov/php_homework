<?php

abstract class Publication
{
 

    public abstract function getSource()
    {

    }

    public abstract function getContent() {
    }

    public abstract function getAll();
}

class News extends Publication
{
    public function getAll()
    {
        return $this;
    }
}

class Announce extends Publication
{
    public function getAll()
    {
        return $this;
    }
}