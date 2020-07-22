
<a href="index.php?page=add-score&id=<?php echo $student['id']?>" >ADD SCORE</a>

<table>

<tr>
    <th>STT</th>
    <th>Maths</th>
    <th>Physical</th>
    <th>Chemistry</th>
    <th>English</th>
    <th style="text-align: center"> Action</th>
</tr>

<?php if(empty($scores)) :?>
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
            <td style="text-align: center">
                <a href="index.php?page=delete-score&id=<?php echo $score->getId() ?>" onclick="return confirm('are you sure?')"  >DELETE</a>
                <a href="index.php?page=update-score&id=<?php echo $score->getId() ?>" >UPDATE</a>
            </td>
        </tr>
    <?php endforeach; ?>
<?php endif; ?>
</table>