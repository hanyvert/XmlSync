<?php
/**
 * Tests for XmlSync
 */

use PHPUnit\Framework\TestCase;
use Xmlsync\Xmlsync;

class XmlsyncTest extends TestCase {
    private Xmlsync $instance;

    protected function setUp(): void {
        $this->instance = new Xmlsync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Xmlsync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
