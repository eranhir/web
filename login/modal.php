<?php
    // True only if the form was submitted with username and password
    if (isset($_POST['uname']) && isset($_POST['psw'])) {
        $con = mysqli_connect('localhost', 'root', '', 'barak');
        $selectUser = 'SELECT * FROM users WHERE username="' . $_POST['uname'] . '" AND password="' . $_POST['psw'] . '"';
        $resultData = mysqli_query($con, $selectUser);
        
        // True only if username and password are correct: Show link to profile page
        if ($resultData->num_rows) {
            echo '
            <a id = "loginIcon" href="../profile/profile.php">
                <button style="width:auto;"  class=\'fas fa-user-alt\'></button>
            </a>';
        }
        else {
            // Username or password are incorrect, show login modal
            showModal();
        }
    }
    else {
        // Login form wasn't submitted, show login modal
        showModal();
    }
    
    
    function showModal() {
        echo '
        <a id = "loginIcon">
    
    <button onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;"  class=\'fas fa-user-alt\'></button>
    
    <div id="id01" class="modal">
        <form class="modal-content animate" action="' . $_SERVER['PHP_SELF'] .'" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById(\'id01\').style.display=\'none\'" class="close" title="Close Modal">&times;</span>
                <img src="https://cdn2.iconfinder.com/data/icons/royal-crowns/512/royal-alphabet-crown-letter-english-h-512.png" alt="H" class="hAvater">
            </div>
            <div class="modalContainer">
                <label class="textModal"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                
                <label class="textModal"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                
                <button type="submit">Login</button>
                <label class="textModal">
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
        </form>
    </div>
</a>
<script src="login.js"></script>
        ';
        
    }
?>


