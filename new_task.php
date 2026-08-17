<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Simona" />
    <title>To-Do App</title>
    <link rel="stylesheet" href="styles/new_task.css">
</head>
<body>
    <header>Create New Task</header>

    <div class="container">
        <form action="/action_page.php">
            <input type="text" id="title" name="title" placeholder="Title">
            <br />
            <textarea id="text" name="text" placeholder="Task"></textarea>
            <br />
            <input type="text" id="date" name="date" placeholder="Created At">
            <br />
            <div class="buttons">
                <button type="submit">Save</button>
                <button type="reset">Clear</button>
            </div>
        </form>
    </div>
</body>
</html>