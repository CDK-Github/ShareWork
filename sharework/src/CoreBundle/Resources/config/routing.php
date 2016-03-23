<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('core_homepage', new Route('/', array(
    '_controller' => 'CoreBundle:Default:index',
)));

$collection->add('core_share', new Route('/', array(
    '_controller' => 'CoreBundle:Default:share',
)));

$collection->add('core_inventory', new Route('/', array(
    '_controller' => 'CoreBundle:Default:inventory',
)));

return $collection;
