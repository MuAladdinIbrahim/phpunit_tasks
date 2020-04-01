<?php

use PHPUnit\Framework\TestCase;

class FormTest extends TestCase
{

    public function setup(): void
    {
        $this->Form = new Form();
    }

    public function test_text_area()
    {
        $this->Form->textarea([
            'labelfor' => 'textarea',
            'label' => 'your message ',
            'required' => true,
            'text' => 'welcome'
        ]);
        $this->assertSame($this->Form->html(), '<form method="" action=""> <label for="textarea">your message </label><textarea required>welcome</textarea><br> </form>');
    }
    public function test_text_box()
    {
        $this->Form->textbox([
            'name' => 'fullName',
            'label' => 'Full name ',
            'required' => true,
            'length' => 100,
            'value' => 'Muhammad'
       ]);
        $this->assertSame($this->Form->html(), '<form method="" action=""> <div><label>Full name </label><input type="text" name="fullName" value="Muhammad" maxlength="100" required>' .
        '</div><br> </form>');
    }
    public function test_select()
    {
        $this->Form->select([
            'name' => 'gender',
            'labelfor' => 'gender',
            'label' => 'gender ',
            'options' => [
                 'm' => 'male',
                 'f' => 'female',
            ]
       ]);
        $this->assertSame($this->Form->html(), '<form method="" action=""> <label for="gender">gender </label><select name="gender "><option value="m">male</option><option value="f">female</option></select><br> </form>');
    }
    public function test_email()
    {
        $this->Form->email([
            'name' => 'email',
            'label' => 'email ',
            'required' => true
       ]);
        $this->assertSame($this->Form->html(), '<form method="" action=""> <div><label>email </label><input type="email" name="email" value="" required></div><br> </form>');
    }
    public function test_button()
    {
        $this->Form->button([
            'type' => 'button',
            'text' => 'Click Here!'
       ]);
        $this->assertSame($this->Form->html(), '<form method="" action=""> <br><button type="button">Click Here!</button><br> </form>');
    }
    
}