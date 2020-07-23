<a href="index.php?page=add-score&id=<?php echo $student['id'] ?>" class="btn btn-success">ADD SCORE</a>
<h2><?php echo $student['name'] ?></h2>
<table class="table table-bordered text-center" style="width: 120%">
    <thead class="table-dark ">
    <tr>
        <th>STT</th>
        <th>Maths</th>
        <th>Physical</th>
        <th>Chemistry</th>
        <th>English</th>
        <th>Action</th>
    </tr>
    </thead>
    <?php if (empty($scores)) : ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>
        <?php foreach ($scores as $key => $score): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $score->getMaths() ?></a></td>
                <td><?php echo $score->getPhysical() ?></td>
                <td><?php echo $score->getChemistry() ?></td>
                <td><?php echo $score->getEnglish() ?></td>
                <td>
                    <a href="index.php?page=delete-score&id=<?php echo $score->getId() ?>"
                       onclick="return confirm('are you sure?')"
                       class="btn btn-danger <?php if ($_SESSION['userLogin']['username'] === 'admin'): ?>
                       d-inline
                       <?php else: ?>
                        d-none
                       <?php endif; ?>">DELETE</a>
                    <a href="index.php?page=update-score&id=<?php echo $score->getId() ?>" class="btn btn-primary">UPDATE</a>
                </td>
            </tr>

        <?php endforeach; ?>
    <?php endif; ?>
</table>
<button onclick="window.history.go(-1); return false;" class="btn btn-secondary">Back</button>