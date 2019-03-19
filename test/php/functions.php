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

    public function testCreateTextFormSuccess()
    {
        $expected = '<form action="admin.php" method="post"><textarea class="paragraph" name="">hello</textarea><input class="button" type="submit" name="editText" value="Submit edit"><input class="button" type="submit" name="delete" value="Delete"></form>';
        $input = [['text'=>'hello']];
        $case = createTextForm($input);
        $this->assertEquals($expected, $case);
    }

    public function testCreateTextFormFailure()
    {
        $expected = '<form action="admin.php" method="post"><textarea class="paragraph" name=""></textarea><input class="button" type="submit" name="editText" value="Submit edit"><input class="button" type="submit" name="delete" value="Delete"></form>';
        $input = [['text'=>'']];
        $case = createTextForm($input);
        $this->assertEquals($expected, $case);
    }

    public function testCreateTextFormMalformed()
    {
        $input = 69;
        $this->expectException(TypeError::class);
        createTextForm($input);
    }
}