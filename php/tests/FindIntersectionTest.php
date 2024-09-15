<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;


require('FindIntersection.php');

final class FindIntersectionTest extends TestCase {

  /** @dataProvider dataProvider **/
  public function testFindIntersection($input, $expected) {
    $returned = FindIntersection($input);
    $this->assertSame($returned, $expected);

  }
  public function dataProvider() {
    return [
      'first' => [
        ["1, 5, 6, 7, 10, 11, 12", "5, 6, 8, 11, 17"],
        '5,6,11',
      ],
      'second' => [
        ["2, 3, 4", "3"],
        "3",
      ],
      'third' => [
        ["1, 2, 3, 4, 5", "6, 7, 8, 9, 10"],
        'false',
      ],
      'fourth' => [
        ["1, 2, 4, 5, 6, 9", "2, 3, 4, 8, 10"],
        '2,4',
      ]
    ];
  }
}