<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PostsFixture
 */
class PostsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'detail' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-11-06 21:29:00',
                'modified' => '2022-11-06 21:29:00',
            ],
        ];
        parent::init();
    }
}
