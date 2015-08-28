<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?php
        /**
         * OVERVIEW:
         * So our boss is now happy that he can see the descriptions in a consistent manner.
         * However, he does not like the idea that the description still prints out even if
         * we don't provide all of the necessary information.  He also wants the color
         * field to consist of only a specific list of colors so that customers can search
         * by color.  He also hates the inconsitent formats of the price.  Sometimes they
         * have numbers only, sometimes they have $, etc.
         *
         * INSTRUCTIONS:
         * 1. Let's do some validation in the provideDescriptionForProductType.  First, Instead
         * of accessing our properties directly, let's create getter functions for them and
         * access our properties in the provideDescriptionForProductType using these getters.
         * If these values are empty, let's throw an exception with the message.
         * 'Empty value found';
         *
         * 2. Now, let's add some additional validation to a few of our accessors.  Let's only
         * red, blue, green, black, white, yellow to be valid colors.  If our color
         * is not one of these colors, let's throw an Exception.
         *
         * 3. In our price getter, let's throw an Exception if it has any non-numeric characters
         * in it (like the word dollars).  PHP has a function is_numeric($value) that
         * determines if the string is a valid number.  If it is not a number, throw
         * an exception with the message 'invalid number';
         *
         * 4. Now create the following objects:
         *
         * Clothing Objects:
         *
         * Name: Button Down Shirt
         * Price: $29.88
         * Brand: J Peterman
         * Color: Eye-piercingly bright red
         * Type: Shirt
         * Gender: Male
         *
         * Name: Headband
         * Price: 9 dollars
         * Brand: Nikee
         * Color: Magenta
         * Type: Headgear
         * Gender: Neutral
         *
         * Television Objects:
         *
         * Name: Giant TV
         * Price: $3900.90
         * Brand: Kramerica
         * DisplayType: LED
         * Size: 100 inches
         *
         * Name: Child Television
         * Price: 299
         * Brand: ChildCorp
         * DisplayType: Plasma
         * Size: 23x33
         *
         * 5. Echo out the descriptions.  If the description is valid display it.  If there
         * is an exception, display 'There was an error determining the description to this
         * product'.  Remember how to handle exceptions with try catch.
         *
         * @see http://php.net/manual/en/language.exceptions.php
         */


        ///////////////////////////
        //  Put your code here!  //
        ///////////////////////////
        interface Describable { 
          public function provideDescription();
        } 
        abstract class Product implements Describable { 
          protected $name;
          protected $brand;
          protected $price;
          
          public function __construct($name, $brand, $price) { 
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
          } 
          
          public function provideDescription() {
            return $this->provideDescriptionForProductType();
          }
          
          abstract public function provideDescriptionForProductType();
          
          public function getName() { 
            if (!empty($this->name)) { 
              return $this->name;
            } 
            else { 
              throw new Exception('Empty value found');
            } 
          } 
          
          public function getBrand() { 
            if (!empty($this->brand)) { 
              return $this->brand;
            } 
            else { 
              throw new Exception('Empty value found');
            } 
          } 
          
          public function getPrice() { 
            if (!empty($this->price)) { 
              
              
              if(is_numeric($this->price)) {
              return $this->price;
            } 
            else { 
              throw new Exception('Not a valid number');
            }
            
            } 
            else { 
              throw new Exception('Empty value found');
            } 
          }
        } 
        
        class Clothing extends Product { 
          protected $color;
          protected $type;
          protected $gender;
          
          public function getColor() { 
            if (!empty($this-color)) { 
              
              if (in_array($this->color, array("red", "blue", "green", "black", "white", "yellow"))) { 
              return $this->color; 
            } 
            else { 
              throw new Exception('Not a valid color');
            }
            } 
            else { 
              throw new Exception('Empty value found');
            } 
          } 
          
          public function getType() { 
            if (!empty($this->type)) {
              return $this->type;
            } 
            else { 
              throw new Exception('Empty value found');
            }
          } 
          
          public function getGender() { 
            if (!empty($this->gender)) { 
              return $this->gender;
            } 
            else {
              throw new Exception('Empty value found');
            } 
          } 
          
          public function getSize() { 
            if (!empty($this->size)) { 
              return $this->size;
            } 
            else { 
              throw new Exception('Empty value found');
            } 
          }
          
          public function __construct($name, $brand, $price, $color, $type, $gender, $size) {
            parent::__construct($name, $brand, $price);
            $this->color = $color;
            $this->type = $type;
            $this->gender = $gender;
            $this->size = $size;
          } 
          
          public function provideDescriptionForProductType() { 
            return "It is a {$this->getName()} {$this->getBrand()} {$this->getColor()} {$this->getGender()} {$this->getType()} of {$this->getSize()} size.  It costs {$this->getPrice()}.";
          } 
        } 
         
        class Television extends Product { 
          protected $displayType; 
          protected $size;
          
          public function getDisplayType() { 
            if(!empty($this->displayType)) { 
              return $this->displayType; 
            } 
            else { 
              throw new Exception('Empty value found');
            }
          } 
          
          public function getSize() { 
            if(!empty($this->size)) { 
              return $this->size;
            } 
            else { 
              throw new Exception('Empty value found');
            }
          } 
          
          public function __construct($name, $brand, $price, $displayType, $size) { 
            parent::__construct($name, $brand, $price);
            $this->displayType = $displayType; 
            $this->size = $size; 
          } 
          
          public function provideDescriptionForProductType() { 
            return "This is a {$this->getSize()} {$this->getBrand()} {$this->getDisplayType()} Television. It costs {$this->getPrice()}.";
          } 
        } 
      
        $buttonShirt = new Clothing("Button Down Shirt", "J Peterman", "29.88", "Eye-piercingly bright red", "Shirt", "Male", "large");
        $headband = new Clothing("Headband", "Nikee", "9 dollars", "Magenta", "Headgear", "Neutral", "one size fits all");
        $giantTV = new Television("Giant TV", "Kramerica", "3900.90", "LED", "100 inches");
        $childTV = new Television("Child Television", "ChildCorp", "$299", "Plasma", "23x33");
        
        try { 
          echo $buttonShirt->provideDescription();
          echo "<br/>"; 
        } 
        catch (Exception $E) { 
          echo $E->getMessage();
        } 
        
        try { 
          echo $headband->provideDescription();
          echo "<br/>"; 
        } 
        catch (Exception $E) { 
          echo $E->getMessage();
        } 
        
        try { 
          echo $giantTV->provideDescription(); 
          echo "<br/>";
        } 
        catch (Exception $E) {
          echo $E->getMessage();
        } 
        
        try { 
          echo $childTV->provideDescription();
        } 
        catch (Exception $E) { 
          echo $E->getMessage();
        }
    ?>
    </p>
  </body>
</html>