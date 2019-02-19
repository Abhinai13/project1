<?php

$fileName = 'data.csv';
$program = new main($fileName);
main::start();


class main {

    private $html;

    static public function start(){
        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);
    }
}

class csv {
    static public function getRecords() {

        $records = 'test 2 text';

        echo "<html><body><table>\n\n";
        $f = fopen("test.csv", "r");
        while (($line = fgetcsv($f)) !== false) {
            echo "<tr>";
            foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>\n";
        }

        fclose($f);
        echo "\n</table></body></html>";




    /*    $row = 1;
        if (($handle = fopen("test.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                echo "<p> $num fields in line $row: <br /></p>\n";
                $row++;
                for ($c = 0; $c < $num; $c++) {
                    echo $data[$c] . "<br />\n";
                }
            }
            fclose($handle);
       }
*/
        return $records;
    }
}

class html{
    static public function generateTable($records){

        $table = $records;

        return $table;
    }

}

class system {
    static public function printPage($page)
    {

        echo $page;
    }
}

?>