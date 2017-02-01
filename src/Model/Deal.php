<?php

namespace Teamgate\Model;

class Deal extends Model
{
    protected $_uri = 'deals';
    
    protected $_relations = [
        'people' => 'People',
        'companies' => 'Companies',
        'sources' => 'Sources', 
        'industries' => 'Industries', 
        'tags' => 'Tags', 
        'customFields' => 'CustomFields', 
        'events' => 'Events',
        'pipeline' => 'Pipelines'
    ];
}