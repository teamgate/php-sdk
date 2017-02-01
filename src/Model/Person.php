<?php

namespace Teamgate\Model;

class Person extends Model
{
    protected $_uri = 'people';
    
    protected $_relations = [
        'companies' => 'Companies',
        'customerStatuses' => 'CustomerStatuses',
        'prospectStatuses' => 'ProspectStatuses',
        'sources' => 'Sources', 
        'industries' => 'Industries', 
        'tags' => 'Tags', 
        'customFields' => 'CustomFields', 
        'events' => 'Events',
        'deals' => 'Deals'
    ];
}