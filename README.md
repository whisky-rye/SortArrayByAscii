# sortarraybyascii

- Sort the array by one name according to the ascii code
- The source repositorie is my bitbucket url : https://bitbucket.org/mysticzhong/sortarraybyascii/


**Install** 
- composer require mysticzhong/sortarraybyascii

**Usage**
- Some Example

    - $tempPost['UserID'] = 62548;
    - $tempPost['UserToken'] = 'ded038ff4d192b3e1ce9f216403b57dd50f1ff3ec74a54437b58df5405c327f2';
    - $tempPost['startTime'] = 1544371200000;
    - $tempPost['dayLength'] = 7;
    - $tempPost['client'] = 4;
    - $tempPost['Timestamp'] = 1544606827000;
    - $tempPost['Sign'] = 'bb1ad40baff6a7bc28f00acd7b848382';
    - $tempPost['z'] = 1;
    - $tempPost = (new sortarraybyascii())->mainToSort($tempPost); 
    - print_r($tempPost);
     


