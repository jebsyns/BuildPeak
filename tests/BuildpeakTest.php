<?php
/**
 * Tests for BuildPeak
 */

use PHPUnit\Framework\TestCase;
use Buildpeak\Buildpeak;

class BuildpeakTest extends TestCase {
    private Buildpeak $instance;

    protected function setUp(): void {
        $this->instance = new Buildpeak(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Buildpeak::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
