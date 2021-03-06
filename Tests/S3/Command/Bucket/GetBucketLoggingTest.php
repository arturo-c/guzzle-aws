<?php
/**
 * @package Guzzle PHP <http://www.guzzlephp.org>
 * @license See the LICENSE file that was distributed with this source code.
 */

namespace Guzzle\Aws\Tests\S3\Command\Bucket;

/**
 * @author Michael Dowling <michael@guzzlephp.org>
 */
class GetBucketLoggingTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @covers Guzzle\Aws\S3\Command\Bucket\GetBucketLogging
     * @covers Guzzle\Aws\S3\Model\BucketLoggingStatus
     */
    public function testGetBucketLogging()
    {
        $command = new \Guzzle\Aws\S3\Command\Bucket\GetBucketLogging();
        $command->setBucket('test');

        $client = $this->getServiceBuilder()->get('test.s3');
        $this->setMockResponse($client, 's3/GetBucketLoggingResponse');
        $client->execute($command);

        $this->assertEquals('http://test.s3.amazonaws.com/?logging', $command->getRequest()->getUrl());
        $this->assertEquals('GET', $command->getRequest()->getMethod());
        $this->assertInstanceOf('Guzzle\\Aws\\S3\\Model\\BucketLoggingStatus', $command->getResult());

        $status = $command->getResult();

        $this->assertInstanceOf('SimpleXMLElement', $status->getXml());
        $this->assertFalse($status->isLoggingEnabled());
        $this->assertFalse($status->getTargetBucket());
        $this->assertFalse($status->getTargetPrefix());
        $this->assertEquals(array(), $status->getGrants());
    }

    /**
     * @covers Guzzle\Aws\S3\Model\BucketLoggingStatus
     */
    public function testGetBucketLoggingEnabled()
    {
        $command = new \Guzzle\Aws\S3\Command\Bucket\GetBucketLogging();
        $command->setBucket('test');
        $client = $this->getServiceBuilder()->get('test.s3');
        $this->setMockResponse($client, 's3/GetBucketLoggingEnabledResponse');
        $client->execute($command);

        $status = $command->getResult();
        $this->assertInstanceOf('SimpleXMLElement', $status->getXml());
        $this->assertTrue($status->isLoggingEnabled());
        $this->assertEquals('mybucketlogs', $status->getTargetBucket());
        $this->assertEquals('mybucket-access_log-/', $status->getTargetPrefix());
        $this->assertEquals(array(
            array('user@company.com', 'READ')
        ), $status->getGrants());
    }
}