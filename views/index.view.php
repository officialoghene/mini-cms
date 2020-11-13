<?php require 'partials/head.php'; ?>

    <h1>Welcome Home!</h1>
    <form action="/tasks" method="POST">
        <h3>Add new task</h3>
        <input type="text" name="description" placeholder="Task"> <br>

        <input type="number" name="isComplete" placeholder="task complete"> <br>
        <input type="submit" value="Submit">
    </form>
    <h2>Tasks</h2>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <strong>
                    <?= $task->description; ?>:
                </strong>
                <?php if($task->isComplete): ?>
                    <?= 'Done' ?>
                <?php else: ?>
                    <?= 'Incomplete task' ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <hr>
    <form action="/names" method="POST">
        <h3>Add new user</h3>
        <input type="text" name="name" placeholder="name"> <br>

        <input type="text" name="username" placeholder="username"> <br>
        <input type="submit" value="Submit">
    </form>

    <h2>Users</h2>
    <table border="1">
       <tr>
           <th>Users</th>
           <th>Usernames</th>
       </tr>
        <?php foreach ($users as $user): ?>
                <tr>
                    <td>
                        <strong>
                            <?= $user->name; ?>
                        </strong>
                    </td>
                    <td>
                        <?= $user->username; ?>
                    </td>
                </tr>
        <?php endforeach; ?>
    </table>


<?php require 'partials/footer.php'; ?>