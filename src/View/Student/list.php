
<a href="index.php?page=add-student&id=<?php echo $class['id'] ?>">ADD STUDENT</a>
<table>
<tr>
    <th>STT</th>
    <th>Image</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Email</th>
    <th style="text-align: center">Action</th>
</tr>
<?php if (empty($students)) : ?>
    <tr>
        <td>No data</td>
    </tr>
<?php else: ?>
    <?php foreach ($students as $key => $student): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td>
                <a href="index.php?page=list-score&student_id=<?php echo $student->getId() ?>"><?php echo $student->getName() ?></a>
            </td>
            <td><?php echo $student->getAge() ?></td>
            <td><?php echo $student->getGender() ?></td>
            <td><?php echo $student->getAddress() ?></td>
            <td><?php echo $student->getEmail() ?></td>
            <td style="text-align: center">
                <a href="index.php?page=delete-student&id=<?php echo $student->getId() ?>" onclick="return confirm('are you sure?')" >DELETE</a>
                <a href="index.php?page=update-student&id=<?php echo $student->getId() ?>" >UPDATE</a>
            </td>
        </tr>
    <?php endforeach; ?>
<?php endif; ?>
</table>