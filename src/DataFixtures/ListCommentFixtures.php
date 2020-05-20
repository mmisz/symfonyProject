<?php
/**
 * ListCommentFixtures fixtures.
 */

namespace App\DataFixtures;

use App\Entity\ListComment;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

/**
 * Class ListCommentFixtures.
 */
class ListCommentFixtures extends AbstractBaseFixtures implements DependentFixtureInterface
{
    /**
     * Load data.
     *
     * @param \Doctrine\Persistence\ObjectManager $manager Persistence object manager
     */
    public function loadData(ObjectManager $manager): void
    {
        $this->createMany(50, 'listComments', function ($i) {
            $listComment = new ListComment();
            $listComment->setComment($this->faker->sentence);
            $listComment->setToDoList($this->getRandomReference('toDoLists'));

            return $listComment;
        });

        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on.
     *
     * @return array Array of dependencies
     */
    public function getDependencies(): array
    {
        return [ToDoListFixtures::class];
    }
}