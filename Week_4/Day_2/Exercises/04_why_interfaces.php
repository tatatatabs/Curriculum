<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?php
        /**
         * So we want to create a feature that allows you to store your movies in our 'cloud'.
         *
         * We want to make sure that you can find and catalog your movies correctly, so we
         * would like to give users the ability to provide a description of these movies.
         *
         * We want users to also see any products they have ordered on the same page.
         *
         * Create a class called CloudMovieFile that also implements the Describable interface.  Use your imagination on
         * how this should describe itself.  Create an instance of Cloud movie.  Now create a Clothing object and a
         * Television object from the classes you built in the previous exercise.  Put these 3 objects in an array
         * names $customerItems.
         *
         * Create a new class called ItemDescriber.  Item describer should contain a method called
         * outputDescription.  This method should take an object that implements the Describable interface
         * as a parameter.  If the parameter does not implement the Describable interface, throw an exception
         * Otherwise, the outputDescription method should printout the description of the object that is passed in.
         *
         * @see  http://php.net/manual/en/language.operators.type.php
         *
         * For each object in the array, use the ItemDescriber to print out the description of all of your Describable
         * objects.
         *
         * Note that we can treat anything that wants to implment describable exactly the same, whether it is a
         * Product or a CloudMovieFile.  You could even create a Person class that implements Describable and
         * run it through the ItemDescriber method.
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
        
        class CloudMovieFile implements Describable { 
          
          public function provideDescription() { 
            return "This is a cloud movie.";
          }
        }
        
        class ItemDescriber { 
          public function outputDescription($item) { 
            if ($item instanceof Describable) {
              return $item->provideDescription();
            }
            throw new Exception("Not valid :(");
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
      
        $buttonShirt = new Clothing("Button Down Shirt", "J Peterman", "29.88", "red", "Shirt", "Male", "large");
        $headband = new Clothing("Headband", "Nikee", "9.00", "yellow", "Headgear", "Neutral", "one size fits all");
        $giantTV = new Television("Giant TV", "Kramerica", "3900.90", "LED", "100 inches");
        $childTV = new Television("Child Television", "ChildCorp", "299.00", "Plasma", "23x33");
        $newMovie = new CloudMovieFile("Willy Wonka", "Mel Stuart", "Fantasy");
        $newThing = new ItemDescriber();
        
        
        $customerItems = array($buttonShirt, $giantTV, $newMovie);
        foreach($customerItems as $item) { 
          echo $newThing->outputDescription($item);
        } 
        
        try { 
          $newThing->outputDescription($item);
        } 
        catch (Exception $E) { 
          echo $E->getMessage();
        } 
        
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