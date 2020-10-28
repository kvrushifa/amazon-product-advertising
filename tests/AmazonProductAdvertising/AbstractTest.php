<?php declare(strict_types=1);

namespace Calcifer1337\Tests\AmazonProductAdvertising;

use PHPUnit\Framework\TestCase;

use Calcifer1337\Tests\AmazonProductAdvertising\NonPublic\TestTrait;
use Calcifer1337\AmazonProductAdvertising\Client;

abstract class AbstractTest extends TestCase {
    use TestTrait;

    protected $apiClient;

    public function createAPIClient()
    {
        $this->apiClient = new Client();
    }
}