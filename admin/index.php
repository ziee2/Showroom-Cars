<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../style/indexstyle.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li class="active">
                    <a href="./index.php">
                        <h4>Dashboard</h4>
                    </a>
                </li>
                <li>
                    <a href="./edit.php">
                        <h4>List Data</h4>
                    </a>
                </li>
                <li>
                    <a href="./insert.php">
                        <h4>Insert Data</h4>
                    </a>
                </li>
                <li class="logout">
                    <a href="../login.php">
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main--content">
            <div class="header--wrapper">
                <div class ="header--title">
                    <span>Primary</span>
                    <h2>Dashboard</h2>
                </div>
                <div class="user--info">
                    <!-- <img src="../assets/background.jpg" alt=""/> -->
                </div>            
            </div>

            <div class="card--container">
                <h3 class="main--title">Daily Data</h3>
                <div class="card--wrapper">
                    <div class="data--card light-red">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">
                                Incoming Data
                                </span>
                                <span class="amount--value">
                                </span>
                            </div>
                            <i class="fas fa-people-roof icon dark-red"></i>  
                        </div>
                        <span class="card-detail">*** *** ***</span>
                    </div>

                    <div class="data--card light-blue">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">
                                Data Out
                                </span>
                                <span class="amount--value">
                                </span>
                            </div>
                            <i class="fas fa-people-line icon dark-blue"></i>  
                        </div>
                        <span class="card-detail">*** *** ***</span>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>