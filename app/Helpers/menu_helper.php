<?php

use CodeIgniter\HTTP\URI;

function set_active(string $path, string $segment = '2'): string
{
    $uri = service('uri');
    return ($uri->getSegment((int) $segment) === $path) ? 'active' : $uri->getSegment((int) $segment);
}
function set_open(string $path, string $segment = '1'): string
{
    $uri = service('uri');
    return ($uri->getSegment((int) $segment) === $path) ? 'active' : $uri->getSegment((int) $segment);
}
