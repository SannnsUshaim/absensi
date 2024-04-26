<div class="py-4 flex justify-between items-center">
    <p class="flex gap-1 items-center text-base font-semibold">
        <?php 
            if (empty($_GET['page'])) {
                echo "Dashboard";
            } else if ($_GET['page'] == "attend") {
                echo "<a href='./' class='text-sm font-medium'>Dashboard</a>/ Attendance";
            } else if ($_GET['page'] == "profile") {
                echo "<a href='./' class='text-sm font-medium'>Dashboard</a>/ Profile";
            } else if ($_GET['page'] == 'recap') {
                echo "<a href='./' class='text-sm font-medium'>Dashboard</a>/ Recap";
            } else if ($_GET['page'] == 'att-class') {
                echo "<a href='./' class='text-sm font-medium'>Dashboard</a>/ Class";
            }
        ?>
    </p>
    <p id="date-time" class="text-sm font-medium"></p>
</div>