<?php
include 'connect.inc.php';
?>
<!Doctype HTML>
<html>
    
    <head>
        <title>Friends Search Engine</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            
            <input type="text" name="search_result">
            <input type="submit" value="Search">
        </form>
     
    </body>
    
</html>
    
<?php
if(isset($_POST['search_result'])){
    $search_result = $_POST['search_result'];
    if(!empty($search_result)){
  
        $query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".mysql_real_escape_string($search_result)."%'";
        $query_run = mysql_query($query);
        
        if(mysql_num_rows($query_run)>=1){
            echo '<b>Results Found Here: </b>'.'<br>';
            while ($query_row = mysql_fetch_assoc($query_run)){
                // this was a big mistake 
                // we must write mysql_fetch_assoc
              
                echo $query_row['name'].'<br>';
            }
        }else {
            echo 'No Result Found';
        }
        
        
    }else {
        
    }
}

?>
