<?php

namespace Teamgate\Model;

class Lead extends Model
{
    protected $_uri = 'leads';
    
    protected $_relations = [
        'statuses' => 'LeadStatuses', 
        'sources' => 'Sources', 
        'industries' => 'Industries', 
        'tags' => 'Tags', 
        'customFields' => 'CustomFields', 
        'events' => 'Events'
    ];
}