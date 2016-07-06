<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person{
          static public function say(){
              return "Here are my thoughts!";
          }
      }
      class Blogger extends Person{
          const cats = 50;
      }
      echo Person::say();
      echo Blogger::cats;
      ?>
    </p>
  </body>
</html>