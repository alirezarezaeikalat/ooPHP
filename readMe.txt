*1. We can get the type of a object by using
  get_class($user) function.

*2. We can use get_class_vars('User) and
  get_class_methods('User') to see inside the class

3. To make constructor in class:

      public function __construct(){

      }

4. We can use strpos($email, '@') to check the position
  of a character in the string

5. to have inheritance we use:
   AdminUser extends User{
     public function __construct($username, $level){
       $this->level = $level;
       parent::__construct($username);
     }
   }

6. We can override property and methods of parent in child

7. There is protected access modifier that we can use

8. We can use destructor in php, in php when a last reference
  to object removed, php runs the destructor method and 
  also remove the space of the object:

  public function __destruct(){

  }

[ATTENTION]
9. When a php file ends, the reference to objects removed and
   the destructor runs for all the objects and remove all the
   spaces of those objects.

10. we can use clone to copy the space of one object:

    $userTwo = clone $userOne;

11. When we clone the object the __clone() function runs 
  automatically.

12. We can use static properties and static methods in php

class Weather {
  public static $tempCondition = ['cold', 'mild', 'warm'];
}

13. using static methods and properties:
    echo Weather::$tempCondition[0];  // print cold
 

14. if we want to use static properties in class itself
we have to use self::$tempCondition[0]

15. we can use array_key_exists($key, $array); to see if the
  array has that key or not