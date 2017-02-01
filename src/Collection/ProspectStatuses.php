<?php

namespace Teamgate\Collection;

class ProspectStatuses extends Collection
{
    public function fetchRelation($objectUri, $id)
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'prospectStatuses';
        return $this;
    }
}