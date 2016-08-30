<?php
/**
 * Created by PhpStorm.
 * User: sivaji
 * Date: 30/8/16
 * Time: 3:17 PM
 */

namespace Appizens\ShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Appizens\ShopBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for($i=0; $i<=100; $i++){
            $category = new Category();
            $category->setName('Category - '.$i);
            $category->setSlug('Category-slug-'.$i);
            $manager->persist($category);
        }

        $manager->flush();
    }
}