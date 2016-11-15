<?php
////////////////////////////////////
/* Program 2                      /*
/* @author Julia Garcia           /*
/* Design Patterns Used:          /*
/* Decorator, Singleton, Factory  /*
/* Program Function:              /*
/*Creates a key, changes its      /*
/*security level with a Decorator /*
/* finally a borrower access it   /*
/* with a singleton               /*
/**********************************/
include_once('KeyFactory.php');
include_once('KeySecurityDecorator.php');
include_once('KeySingleton.php');
include_once('KeyBorrower.php');

echo 'Creating my new house key';
$key = new Key();
echo "<br>";
echo $key->description();
echo 'Security Level: ';
echo $key->securityLevel();

echo "<br>";
echo 'Changing security level of my key: ';
$betterkey = new KeyDecorator($key);

echo $betterkey->securityLevel();

echo "<br>";

 $keyBorrower1 = new KeyBorrower();
 $keyBorrower2 = new KeyBorrower();


 $keyBorrower1->borrowKey();
 writeln('Someone wants to borrow my house keys:');
 writeln('KeyBorrower1 Name and Owner: ');
 writeln($keyBorrower1->getNameAndOwner());
 writeln('');


 $keyBorrower2->borrowKey();
 writeln('Someone has just gone to borrow the same keys');
 writeln('keyBorrower2 Name and Owner: ');
 writeln($keyBorrower2->getNameAndOwner());
 writeln('');


 $keyBorrower1->returnKey();
 writeln('KeyBorrower1 returned the key');
 writeln('');


 $keyBorrower2->borrowKey();
 writeln('KeyBorrower2 Name and Owner: ');
 writeln($keyBorrower1->getNameAndOwner());
 writeln('');

 function writeln($line_in) {
   echo $line_in.'<'.'BR'.'>';
 }


?>
