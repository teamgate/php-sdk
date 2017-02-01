<?php

namespace Teamgate\Collection;

class CustomerStatuses extends Collection
{
    public function fetchRelation($objectUri, $id)
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'customerStatuses';
        return $this;
    }
}