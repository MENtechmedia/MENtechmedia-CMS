<?php

namespace App;

trait ExplodableDate
{
	public function getYear()
    {
        return explode("-", $this->date)[0];
    }

    public function getMonth()
    {
        return intVal(explode("-", $this->date)[1]);
    }

    public function getDate()
    {
        return intVal(explode("-", $this->date)[2]);
    }
}