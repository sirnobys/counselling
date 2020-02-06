    <?php


    session_start(); // Starting Session
    $error = ''; // Variable To Store Error Message
    $conn = mysqli_connect("localhost", "root", "", "oc");
    if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
    }
    else{
    // Define $username and $password
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    // mysqli_connect() function opens a new connection to the MySQL server.
    
    // SQL query to fetch information of registerd users and finds user match.
    $query = "INSERT INTO USERS (username,password,email) values(?,?,?)";
    // To protect MySQL injection for Security purpose
     $stmt = $conn->prepare($query);
     $stmt->bind_param("ss", $username, $password,$email);
     $stmt->execute();
    //  $stmt->bind_result($username, $password,$email);
    //  $stmt->store_result();
    // if($stmt->fetch()) //fetching the contents of the row {
    // $_SESSION['login_user'] = $username; // Initializing Session
    // header("location: login.php"); // Redirecting To Profile Page
    // }
    // mysqli_close($conn); // Closing Connection
    // }
    mysqli_close($conn); // Closing Connection
    ?>