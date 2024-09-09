<div class="navbar">

    <ul>

           <li>   <a href="index.php"  class="nav-link">Home</a> &nbsp;  </li>
           <li>  <a href="search.php" class="nav-link">Search</a> &nbsp; </li>
           <li>  <a href="login.php"  class="nav-link">Login</a>    </li>

    </ul>
</div>

<style>

body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: #e9ecef;
        margin: 0;
        padding: 0;
    }

    /* Navbar styles */
    .navbar {
        background-color: #4CAF50;
        padding: 10px 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .navbar ul li {
        margin: 0 15px;
    }

    .navbar ul li a {
        text-decoration: none;
        color: white;
        font-size: 16px;
        padding: 8px 16px;
        background-color: #4CAF50;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .navbar ul li a:hover {
        background-color: #45a049;
    }

    .navbar ul li a.active {
        background-color: #333;
    }

    /* Adjusting the hover and active states for buttons */
    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 8px 12px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #45a049;
    }

    .btn.delete {
        background-color: #ff4d4d;
    }

    .btn.delete:hover {
        background-color: #ff1a1a;
    }
</style>