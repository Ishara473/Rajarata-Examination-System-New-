<?php

namespace Tests\Unit;

use App\StudentAccDetail;
use PHPUnit\Framework\TestCase;

class StudentAccDetailTest extends TestCase
{
    public function testActiveStudentStatusIsRecognized(): void
    {
        $enrolled = new StudentAccDetail(['status' => 1]);
        $graduated = new StudentAccDetail(['status' => 2]);
        $dropped = new StudentAccDetail(['status' => -1]);

        $this->assertTrue($enrolled->isActive());
        $this->assertTrue($graduated->isActive());
        $this->assertFalse($dropped->isActive());
    }
}
