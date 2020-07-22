
<a href="index.php?page=add-class">ADD CLASS</a><br>

<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php if(empty($classes)): ?>
        <tr>
            <td>No data</td>
        </tr>
        <?php else: ?>
        <?php foreach ($classes as $key =>$class): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><a href="index.php?page=list-student&class_id=<?php echo $class->getId()?>"><?php echo $class->getName()?></a></td>
        <td><?php echo $class->getStatus() ?></td>
        <td>
            <a href="index.php?page=delete-class&id=<?php echo $class->getId()?>" onclick="return confirm('are you sure')">DELETE</a>
            <a href="index.php?page=update-class&id=<?php echo $class->getId()?>">UPDATE</a>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>