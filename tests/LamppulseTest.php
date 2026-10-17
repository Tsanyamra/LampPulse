<?php
/**
 * Tests for LampPulse
 */

use PHPUnit\Framework\TestCase;
use Lamppulse\Lamppulse;

class LamppulseTest extends TestCase {
    private Lamppulse $instance;

    protected function setUp(): void {
        $this->instance = new Lamppulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Lamppulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
