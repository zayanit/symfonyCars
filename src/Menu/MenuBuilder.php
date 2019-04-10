<?php


namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(RequestStack $requestStack)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', ['route' => 'homepage'])
        ->setAttribute('class', 'nav-item')
        ->setLinkAttribute('class', 'nav-link');
        // ... add more children

        $menu->setChildrenAttribute('class', 'navbar-nav mr-auto');

        return $menu;
    }
}