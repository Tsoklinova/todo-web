<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Simona" />
    <title>To-Do App</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <header>To-Do App</header>

    <div class="sidenav" id="sidenav">
        <a href="#" id="newTask">New Task</a>
        <a href="#" id="myTasks">My Tasks</a>
    </div>

    <div class="container">
        <iframe class="window" id="createTask" src="new_task.php" height="500" width="700" title="Iframe Example"></iframe>
    </div>

    <script>
        // document.getElementById("newTask").addEventListener("click", function(e) {
        //     e.preventDefault();
        //     document.getElementById("createTask").style.display = "block"; style="display: none;"
        // });
    </script>
</body>
</html>