<?php

namespace Teamgate\Collection;

class LeadStatuses extends Collection
{
    public function __construct($transport) {
        parent::__construct($transport);
        $this->_uri = 'leadsStatuses';
    }
    
    public function fetchRelation($objectUri, $id)
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'statuses';
        return $this;
    }
}