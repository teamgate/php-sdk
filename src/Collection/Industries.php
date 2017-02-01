<?php

namespace Teamgate\Collection;

class Industries extends Collection
{
    public function fetchRelation($objectUri, $id)
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'industries';
        return $this;
    }
}