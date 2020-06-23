<?php
namespace Kata\Tests;

use Kata\Evaluator;
use PHPUnit\Framework\TestCase;

class EvaluatorTest extends TestCase
{
    private $evaluator;

    protected function setUp(): void
    {
        $this->evaluator = new Evaluator();
    }

    /**
     * @test
     */
    public function givenAnEvaluationItAlwaysReturnsAnString()
    {
        $this->assertIsArray($this->evaluator->evaluate());
    }
}