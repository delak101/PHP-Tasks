<?php

echo round((disk_total_space('C:') + disk_total_space('D:') + disk_total_space('E:') + disk_total_space('F:')) / 1024 / 1024 / 1024 / 1024, 2) . ' Terabyte' . "<br>";

// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"