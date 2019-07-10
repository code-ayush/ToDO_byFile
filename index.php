<!DOCTYPE html>
<html>
  <body>
    <form action="/save.php" method="POST">
      <div>
        Text :<input type="text" name="text"/>
      </div>
      <div>
        <input type="submit" value="Submit" />
      </div>
    </form>

    <ul>
    <?php
        $collection=[];
        $file =file_get_contents("data.txt");
        $collection = unserialize($file);

        for($i=0;$i<sizeof($collection);$i++){
          echo "<li> ";
          echo $collection[$i]['caption'];
          echo "<input type='button' value='Remove' onclick=' location.href = `/remove.php?index=".$i."`'>";
          echo "</li>";
        }
    ?>
  </ul>

  </body>
</html>
