<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;


require('superDigit.php');


final class SuperDigitTest extends TestCase {
  
  /** @dataProvider dataProvider **/
  public function testsuperDigit($inputs, $expected) {
    $problem = new Problem();
    $returned = $problem->findDuplicates($inputs);
    $this->assertSame($returned, $expected);

  }
  public function dataProvider() {
    return [
      'first' => [
        [148, 3],
        3
      ]
    ];
  }
}