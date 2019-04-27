<?PHP
include "../core/blogc.php";
$blog1C=new blogc();
$listeblog=$blog1C->afficherblog1();

//var_dump($listeEmployes->fetchAll());
?>

<html>
 <head>
  <style>
  textarea {
  width: 50%;
  height: 50px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}
</style>
  <title>blog</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">Tableau des blogs</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">
       <h3 class="panel-title">Enregistrement</h3>
      </div>
      <div class="col-md-6" align="right">
 <form method="POST" action="ajouterblog.php">
  <textarea placeholder="commentaire" name="commentaire"></textarea>
  <input type="submit" name="ajouter" value="ajouter" class="btn btn-success btn-xs ">  
  </form>
      </div>
     </div>
    </div>
       <div>
   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="chercher surnom.." align="right">
   <i class="fa fa-sort-alpha-desc" onclick="sortTable()" ></i>
 </div>

    <div class="panel-body">
     <div class="table-responsive">
     
      <table class="table table-bordered table-striped" id="myTable">
       <thead>
        <tr>
          <td>id</td>
         <td>surnom</td>
         <td>commentaire</td>
         <td>date</td>
         <td>Edit</td>
         <td>Delete</td>
        </tr>
       </thead>
       <?PHP
foreach($listeblog as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['surnom']; ?></td>
  <td><?PHP echo $row['commentaire']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
    <td><form method="GET" action="modifierblog.php">
  <input type="submit" name="modifier" value="modifier" class="btn btn-warning btn-xs update">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  
  </form>
  </td>
  <td><form method="POST" action="supprimerblog.php">
  <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger btn-xs delete">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">

  </form>
  </td>
  </tr>
  <?PHP
}
?>
      </table>      
     </div>
    </div>
   </div>
  </div>
</body>
</html>
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>