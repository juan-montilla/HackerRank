<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;


include ('QuestionsMarks.php');


final class QuestionsMarksTest extends TestCase {
  
  /** @dataProvider dataProvider **/
  public function testQuestionsMarks($input, $expected) {
    $returned = questionsMarks($input);
    $this->assertSame($returned, $expected);

  }
  public function dataProvider() {
    return [
      'first' => [
        'arrb6???4xxbl5???eee5',
        true
      ],
      'second' => [
        'aa6?9',
        false
      ],
      'third' => [
        '9???1???9??1???9',
        false
      ],
      'fourth' => [
        '9???1???9???1???9',
        true
      ],
      'fifth' => [
        'mbbv???????????4??????ddsdsdcc9?',
        false
      ],
      'sixth' => [
        'acc?7??sss?3rr1??????5',
        true
      ],
      'seventh' => [
        '5??aaaaaaaaaaaaaaaaaaa?5?5',
        false
      ]

    ];
  }
}