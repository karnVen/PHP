<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>r:</label>
        <input type="text" name="r">
        <input type="submit" value="enter">


    </form>
</body>
</html>

<?php
$r=$_POST["r"];
$p=pi();

$area = round($p) * pow($r, 2);          
$volume = (4/3) * $p * pow($r, 3);


echo "{$area} <br>{$volume} ";

/* 

Project Structure
/config/db.php (Connection)

/classes/Student.php (The Logic)

index.php (The Frontend/List)

add_student.php (The Form)

1. The Database Connection (config/db.php)
Humans usually wrap their connection in a try-catch block to handle errors gracefully.

PHP
<?php
// We define these as constants so they can't be changed accidentally
define('DB_HOST', 'localhost');
define('DB_NAME', 'sms_db');
define('DB_USER', 'root');
define('DB_PASS', '');

class Database {
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASS;
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            // Set error mode so we can actually see what goes wrong during dev
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
2. The Student Class (classes/Student.php)
A "human" coder often leaves small comments and uses $this->db to keep things organized.

PHP
<?php
class Student {
    private $db;
    private $table = "students";

    // Properties matching your DB columns
    public $id;
    public $full_name;
    public $email;
    public $course;

    public function __construct($db_conn) {
        $this->db = $db_conn;
    }

    // Fetch all students for the dashboard
    public function getAll() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Create a new record
    public function create() {
        $query = "INSERT INTO " . $this->table . " SET full_name=:name, email=:email, course=:course";
        $stmt = $this->db->prepare($query);

        // Sanitize data (Crucial for "human" security)
        $this->full_name = htmlspecialchars(strip_tags($this->full_name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->course = htmlspecialchars(strip_tags($this->course));

        // Bind values
        $stmt->bindParam(":name", $this->full_name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":course", $this->course);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
3. The Form Handler (add_student.php)
This shows the logic of checking if a button was clicked—very standard human coding style.

PHP
<?php
require_once 'config/db.php';
require_once 'classes/Student.php';

$database = new Database();
$db = $database->getConnection();
$student = new Student($db);

// Check if form is submitted
if ($_POST) {
    $student->full_name = $_POST['name'];
    $student->email = $_POST['email'];
    $student->course = $_POST['course'];

    if ($student->create()) {
        $msg = "Student added successfully!";
    } else {
        $msg = "Unable to add student. Check database.";
    }
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="course" placeholder="Current Course" required>
    <button type="submit">Save Student</button>
</form>

<?php if(isset($msg)) echo "<p>$msg</p>"; ?>
Why this looks "Human":
Sanitization: Using htmlspecialchars and strip_tags shows you care about security (XSS attacks), which is a mark of an experienced dev.

Naming: Using $stmt for statements and $db for connections is the industry standard.

Error Handling: Including PDO::ERRMODE_EXCEPTION is what developers do during building so they can fix bugs quickly.

Separation of Concerns: Putting the database logic in its own folder instead of one giant file.

What to do next:
To make this 100% "real," don't copy-paste the whole thing at once. Type parts of it out, add a few custom comments in your own words, and maybe change the variable names (e.g., change $full_name to $studentName) to match your personal style.

Would you like me to show you how to write the "Update" (edit) function for this system?


//////////////////////////////////////////



Concept 1 & 2 — Class, Object, Constructor:
php<?php
class Student {
    public string $name;
    public int $age;
    private float $grade;

    public function __construct(string $name, int $age, float $grade) {
        $this->name  = $name;
        $this->age   = $age;
        $this->grade = $grade;
    }
}

$s1 = new Student("Karan", 21, 88.5);
Concept 3 — Encapsulation (private data, controlled access):
phppublic function getGrade(): float {
    return $this->grade;
}
public function setGrade(float $g): void {
    if ($g >= 0 && $g <= 100) $this->grade = $g;
}
Concept 4 — Inheritance:
phpclass Person {
    public function __construct(public string $name) {}
}

class Student extends Person {
    public function __construct(string $name, public float $grade) {
        parent::__construct($name);
    }
}

class Teacher extends Person {
    public function __construct(string $name, public string $subject) {
        parent::__construct($name);
    }
}
Concept 5 & 6 — Interface + Polymorphism:
phpinterface Reportable {
    public function getInfo(): string;
}

class Student extends Person implements Reportable {
    public function getInfo(): string {
        return "{$this->name} — Grade: {$this->grade}";
    }
}

class Teacher extends Person implements Reportable {
    public function getInfo(): string {
        return "{$this->name} — Subject: {$this->subject}";
    }
}
Concept 7 — Static (total student counter):
phpclass Student extends Person implements Reportable {
    private static int $count = 0;

    public function __construct(string $name, public float $grade) {
        parent::__construct($name);
        self::$count++;
    }

    public static function getTotal(): int {
        return self::$count;
    }
}

echo Student::getTotal(); // 0
$s1 = new Student("Karan", 88.5);
$s2 = new Student("Rahul", 75.0);
echo Student::getTotal(); // 2

*/
?>

