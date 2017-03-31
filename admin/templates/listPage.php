<table class="table">
    <tr>
        <th>ID</th>
        <th>Menu Title</th>
        <th class='text-center'>Active</th>
        <th class='text-center'>Created</th>
        <th class='text-center'>Updated</th>
        <th class='text-center'>Edit</th>
        <th class='text-center'>Delete</th>
    </tr>
    <?php
        // Select everything from page table
        $query = "SELECT * FROM page";

        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>" . $row['menu'] . "</td>";
                echo "<td class='text-center'>{$row['is_active']}</td>";
                echo "<td class='text-center'>" . formatDate($row['created_at']) . "</td>";
                echo "<td class='text-center'>" . formatDate($row['updated_at']) . "</td>";
                echo "<td class='text-center'><a href='?action=editPage&ID={$row['id']}'><i class='fa fa-pencil'></i></a></td>";
                echo "<td class='text-center'><a href='?action=deletePage&ID={$row['id']}' onClick='return confirm(\"Are you sure?\")'><i class='fa fa-remove'></i></a></td>";
            echo "</tr>";
        }

        mysqli_close($db);
    ?>
</table>