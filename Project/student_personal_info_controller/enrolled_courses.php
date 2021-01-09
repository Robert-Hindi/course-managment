<?php 
include '../view/header.php'; 
session_set_cookie_params(0);
session_start();
?>
<main>
    <h2>Enrolled Courses</h2>
    
    <table>
        <tr>
            <th>Course Code</th>
            <th>Course Name</th>
        </tr>
        
        <?php foreach ($courses as $course) : ?>
        
            <tr>
                <td><?php echo htmlspecialchars($course['courseCode']); ?></td>
                <td><?php echo htmlspecialchars($course['name']); ?></td>
                <td>
                    <form action="." method="post">
                    <input type="hidden" name="action"
                           value="withdraw_course">
                    <input type="hidden" name="course_code"
                           value="<?php echo htmlspecialchars($course['courseCode']); ?>">
                    <input type="submit" value="Withdraw">
                    </form>
                </td>
            </tr>
            
        <?php endforeach; ?>
        
    </table>
    
</main>
<?php include '../view/footer.php'; ?>

