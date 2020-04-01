<?php 
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{
    public function setup(): void
	{
		$this->User = new User(
            [
                'name'=>'Muhammad',
                'email'=>'muhammadalaa27@gmail.com'
            ]
        );
    }
    public function test_retrieving_user_name(){
		$this->assertTrue($this->User->get_user_name() == 'Muhammad');
	}
    public function test_changing_user_name(){
		$this->assertTrue($this->User->set_user_name('Samy') == NULL);
	}
    public function test_retrieving_email(){
		$this->assertTrue($this->User->get_email() == 'muhammadalaa27@gmail.com');
	}
    public function test_changing_email(){
		$this->assertTrue($this->User->set_email('samy@gmail.com') == NULL);
	}

}