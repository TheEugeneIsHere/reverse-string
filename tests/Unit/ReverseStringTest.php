<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '\..\..\src\testovoe.php';

final class ReverseStringTest extends TestCase {
    public function testReverseEnglishSentence(): void {
        $this->assertSame('olleH namwons ta emoh ni tlas!', TestovoeReverseWords::reverseWords('Hello snowman at home in salt!'));
    }

    public function testReverseRussianSentence(): void {
        $this->assertSame('аволог жатномониш кызя уош чям', TestovoeReverseWords::reverseWords('голова шиномонтаж язык шоу мяч'));
    }

    public function testReverseSpecialCharacters(): void {
        $this->assertSame('%^&*()_+!@#$%^&*', TestovoeReverseWords::reverseWords('*&^%$#@!+_)(*&^%'));
    }
}