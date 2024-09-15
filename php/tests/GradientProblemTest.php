<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require ('gradingProblem.php');

final class GradientProblemTest extends TestCase {

  /** @dataProvider dataRounding **/
  public function testRounding($received, $expected) {
    for ($i = 0; $i < count($received); $i++) {
      $result = rounding($received[$i]);
      $this->assertSame($result, $expected[$i]);
    }
  }
  public function dataRounding() {
    return [
      'first_round' => [
        'received' => [84,29,57,38,33,95,100,0,10,5,35,64,99,24,37,81],
        'expected' => [85,29,57,40,33,95,100,0,10,5,35,65,100,24,37,81]
      ],
    ];
  }
}