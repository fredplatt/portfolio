<?php

require '../../php/functions.php';

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testCreateParagraphsSuccess()
    {
        $expected = '<div class="textRight"><p>hello</p></div>';
        $input = [['text'=>'hello']];
        $case = createParagraphs($input);
        $this->assertEquals($expected, $case);
    }

    public function testCreateParagraphsFailure()
    {
        $expected = '<div class="textRight"><p></p></div>';
        $input = [['text'=>'']];
        $case = createParagraphs($input);
        $this->assertEquals($expected, $case);
    }

    public function testCreateParagraphsMalformed()
    {
        $input = 69;
        $this->expectException(TypeError::class);
        createParagraphs($input);
    }
}