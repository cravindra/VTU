<?php
    $val=$_POST["click"];
    if($val == "search")    
        search_data();
    else
        insert_data();
    function insert_data()
    {
        $self=$_SERVER['PHP_SERVER'];
        $dbh=mysql_connect('localhost','root') or die(mysql_error());
        mysql_select_db('test') or die (mysql_error());
        if(isset($_POST['name']))
        {
            $name=$_POST['name'];
            $ad1=$_POST['add1'];
            $ad2=$_POST['add2'];
            $email=$_POST['email'];
            if($name!=" " && $ad1!= " ")
            {
                $query = "Insert into contact val-ues('$name','$ad1','$ad2','$email')";
                $result=mysql_query($query) or die(mysql_error());
            }
            else
                echo "one or more fields must be empty";
            mysql_close($dbh);
        }
        echo "data updated: "." values('$name','$ad1','$ad2','$email')";        
    }
    function search_data()
    {
        $link=mysql_connect("localhost","root");
        mysql_select_db("test");
        $n=$_POST["search_name"];
        print "entered name is $n\n";
        $var=mysql_query("Select * from contact where name like '%$n%'");
        echo "<table border=1>";
        echo "<tr><th>Name</th><th>Address 1</th><th>Address 2</th><th>Email</th></tr>";
        while($arr=mysql_fetch_row($var))
        {
            echo "<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td></tr>";
        }
        echo "</table>";
        mysql_free_result($var);
        mysl_close($link);
        echo "<a href='#test'>back</a>";
    }
?>

