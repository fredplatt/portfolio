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
        $expected = '<form id="editForm" action="admin.php" method="post"><textarea class="paragraph" name="editedText">hello</textarea><input type="hidden" name="editId" value="1"/><input class="button" type="submit" name="editText" value="Submit edit"><input class="button" type="submit" name="delText" value="Delete"></form>';
        $input = [['id'=>'1', 'text'=>"hello"]];
        $case = createTextForm($input);
        $this->assertEquals($expected, $case);
    }

    public function testCreateTextFormFailure()
    {
        $expected = '<form id="editForm" action="admin.php" method="post"><textarea class="paragraph" name="editedText"></textarea><input type="hidden" name="editId" value=""/><input class="button" type="submit" name="editText" value="Submit edit"><input class="button" type="submit" name="delText" value="Delete"></form>';
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