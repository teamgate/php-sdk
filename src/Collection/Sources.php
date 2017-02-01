<?php

namespace Teamgate\Collection;

class Sources extends Collection
{
    public function fetchRelation($objectUri, $id)
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'sources';
        return $this;
    }
}