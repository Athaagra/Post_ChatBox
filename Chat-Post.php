<?php include 'database.php'; ?>
    <!DOCTYPE>
    <html>

    <head>
        <title>BROsss</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />

    </head>

    <body>
        <div id=container>
            <header>
                <h1>Post it BROsss</h1>
            </header>
            <div id="com">
                <ul>
                    <li class="com"><span>10:00</span>Malakas: EIsai liogo Malakas</li>
                    <li class="com"><span>10:00</span>Malakas: EIsai liogo Malakas</li>
                    <li class="com"><span>10:00</span>Malakas: EIsai liogo Malakas</li>
                    <li class="com"><span>10:00</span>Malakas: EIsai liogo Malakas</li>
                    <li class="com"><span>10:00</span>Malakas: EIsai liogo Malakas</li>
                    <li class="com"><span>10:00</span>Malakas: EIsai liogo Malakas</li>
                </ul>
            </div>
            <div id="input">
                <form action="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter your Name" />
                    <input type="text" name="message" placeholder="Enter A Message" />
                    <br />
                    <input class="com-btn" type="submit" name="submit" value="Post it" />
                </form>
            </div>
        </div>
    </body>

    </html>