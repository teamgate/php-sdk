<?php

namespace Teamgate\Collection;

class Pipelines extends Collection
{
    public function fetchRelation($objectUri, $id)
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'stages';
        return $this;
    }
}