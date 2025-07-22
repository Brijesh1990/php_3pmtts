<?php 
// pseudo variables : pseudo variables is denoted by $this 
// pseudo variables is used to call an variables globally inside of member function or directly called via $this. 

class A 
{
    public $fname="Brijesh";
    public $lname="Pandey";
    public function display()
    {

        echo "The firstName of users is :".$this->fname."<br>"."The lastname of users is :".$this->lname;
    }
}

$obj=new A;
$obj->display();

?>