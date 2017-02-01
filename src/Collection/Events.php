<?php

namespace Teamgate\Collection;

class Events extends Collection
{
   protected $_model = 'event';
   
   public function fetchRelation($objectUri, $id)
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'events';
        return $this;
    }
}