<?php
session_start();
require_once 'connection.php';
require_once 'User.php';

class UserRegistration extends UserMain {
    private $conn;

    public function __construct($username, $email, $password) {
        parent::__construct(null);
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->conn = (new Database())->connect();
    }

    public function registration() {
        $errors = array();
        if (isset($_POST['reg'])) {
           

            if (empty($this->username)) {
                array_push($errors, "Username is required");
            } elseif (strlen($this->username) > 20) {
                array_push($errors, "Username should be up to 20 characters");
            } elseif (strlen($this->username) < 3) {
                array_push($errors, "Username should be at least 3 characters");
            }

            if (empty($this->email)) {
                array_push($errors, "Email is required");
            } elseif (strlen($this->email) > 40) {
                array_push($errors, "Email should be up to 40 characters");
            } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Invalid email format");
            }

            if (empty($this->password)) {
                array_push($errors, "Password is required");
            } elseif (strlen($this->password) > 30) {
                array_push($errors, "Password should be up to 30 characters");
            } elseif (strlen($this->password) < 6) {
                array_push($errors, "Password should be at least 6 characters");
            }

            if (empty($_POST['password_confirm'])) { array_push($errors, "Verify your password");}

            if ($this->password !== $_POST['password_confirm']) {
                array_push($errors, "Passwords do not match");
            }

            $result = $this->conn->prepare("SELECT * FROM user WHERE username=:username OR email=:email LIMIT 1");

            $result->execute(array(':username' => $this->username, ':email' => $this->email));
            $user = $result->fetch();

            if ($user) { 
                if ($user['username'] === $this->username) {
                    array_push($errors, "Username already exists!");

                }

                if ($user['email'] === $this->email) {
                    array_push($errors, "Email already exists!");

                }
            }

            if (count($errors) == 0) {
                $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);
            
                 $result = $this->conn->prepare("INSERT INTO user (username, email, password, roleID) VALUES(:username, :email, :password, :roleID)");
                if(!$result->execute(array(':username' => $this->username, ':email' => $this->email, ':password' => $passwordHash, ':roleID' => 0))) {
                    $result = null;
                    $_SESSION['error'] = 'Failed to register';
                }
                else {
                    $_SESSION['success'] = 'Registration successful';
                }
                
                $result = null;
                
                $result = $this->conn->prepare("SELECT userID, roleID FROM user WHERE email=:email");
                $result->execute(array(':email' => $this->email));
                $user = $result->fetch();
                $_SESSION['userID'] = $user['userID'];
                $_SESSION['roleID'] = $user['roleID'];

                if ($_SESSION['success']) {
                    $defaultAvatarURL = 'img/avatar/default.png';
                    $userID = $user['userID'];
                    $user = new UserMain($userID);
                    $user->addDefaultNotificationTopics();
                    
                    $user->updatePicture($defaultAvatarURL);

                    $topicName = 'Profile';
                    $topicID = $user->getNotificationTopicIDByName($topicName);
                    
                    $notificationText = "You have successfully registered! If you need <a href='infoPage.php'>Help</a>, please visit the Help section.";
                    $user->addNotification($topicID, $notificationText);
                }

            
                header('location: index.php');
            }
            else {
                $_SESSION['error'] = implode("<br>", $errors);
                header('location: registrationPage.php');
            }
        }
        else {
            $_SESSION['error'] = 'Invalid request';
            header('location: registrationPage.php');
        }
    }
}


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];   

$user = new UserRegistration($_POST['username'], $_POST['email'], $_POST['password']);
$user->registration();

?>
