<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FormsFixture
 */
class FormsFixture extends TestFixture
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
                'email' => 'Lorem ipsum dolor sit amet',
                'question_01' => 'Lorem ipsum dolor sit amet',
                'question_02' => 'Lorem ipsum dolor sit amet',
                'question_03' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-08-14 00:04:25',
                'modified' => '2022-08-14 00:04:25',
            ],
        ];
        parent::init();
    }
}
