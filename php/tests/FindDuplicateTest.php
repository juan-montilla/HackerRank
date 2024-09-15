<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;


require('findDuplicates.php');

final class FindDuplicatesTest extends TestCase {
  
  /** @dataProvider dataProvider **/
  public function testFindDuplicates($input, $expected) {
    $problem = new Problem();
    $returned = $problem->findDuplicates($input);
    $this->assertSame($returned, $expected);

  }
  public function dataProvider() {
    return [
      'first' => [
        [3, 3, 2, 1, 1, 3],
        [1,3]
      ]
    ];
  }
}