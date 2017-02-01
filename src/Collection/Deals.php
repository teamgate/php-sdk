<?php

namespace Teamgate\Collection;

class Deals extends Collection 
{
    protected $_model = 'deal';

    public function fetchRelation($objectUri, $id) 
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'deals';
        return $this;
    }
}
