<?php declare(strict_types=1);

final class TestovoeReverseWords {
    /**
     * Разворачивает буквы каждого слова в заданной строке.
     *
     * @param string $input Входная строка для разворота слов.
     * @return string Строка с развернутыми буквами в каждом слове.
     */
    public static function reverseWords(string $input): string {
        $words = preg_split('/([^\p{L}]+)/u', $input, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
        $result = '';
        foreach ($words as $word) {
            $reversedWord = '';
            $letters = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
            $reversedWord .= implode('', array_reverse($letters));
            $result .= $reversedWord;
        }
        return $result;
    }
    
    /**
     * Выводит результат разворота букв в каждом слове заданной строки.
     *
     * @param string $input Входная строка для разворота слов.
     */
    public static function printReversedWords(string $input): void {
        $reversedString = self::reverseWords($input);
        echo $reversedString . PHP_EOL;
    }
}

$test_string = 'This is ,! a test! f..KiNg string!';
TestovoeReverseWords::printReversedWords($test_string); // Вывод: sihT si !, a tset !f..gNiK gnirts!
