<?php

namespace Teamgate\Model;

class Company extends Model
{
    protected $_uri = 'companies';
    
    protected $_relations = [
        'people' => 'People',
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