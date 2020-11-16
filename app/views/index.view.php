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


<?php require 'partials/footer.php'; ?>