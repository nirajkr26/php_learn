
    <?php echo "php <br>";
    $cars = array("alto", "nano", "wagon");
    class car
    {
        public $color;
        public $modell;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }

        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . " !";
        }
    }
    $myCar = new car("red", "alto");
    $x = null;
    $y = 5;
    $y = (string) $y;
    var_dump($y);

  