<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <main>
    <form action="includes/formhandler.php" method="post">
        <label for="firstname">First name</label>
        <input id="firtname" type="text" name="firstname" placeholder="First name...">

        <label for="lastname">Last name</label>
        <input id="lastname" type="text" name="lastname" placeholder="Last name...">

        <label for="favoritepet">Favorite pet</label>
        <select id="favoritepet" name="favoritepet">
            <option value="none">None</option>
            <option value="cat">Cat</option>
            <option value="dog">Dog</option>
            <option value="bird">Bird</option>
        </select>
        <button type="submit">Submit</button>

    </form>
  </main>

</body>
</html>
<?php
/* abstract class Product
{
    protected $id;
    protected $name;
    protected $price;

    // Constructor
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Getter for ID
    public function getId()
    {
        return $this->id;
    }

    // Getter for name
    public function getName()
    {
        return $this->name;
    }

    // Getter for price
    public function getPrice()
    {
        return $this->price;
    }

    // Setter for ID
    public function setId($id)
    {
        $this->id = $id;
    }

    // Setter for name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Setter for price
    public function setPrice($price)
    {
        $this->price = $price;
    }

    // Other common methods can be added here
} */
?>

