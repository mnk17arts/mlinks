<?php
require 'bits/_connectdb.php' ;

$delete = false;
$add = false;
$edit = false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $operation = $_POST['operation'] ;
  
    if ( $operation == "delete") {
      $did = $_POST['dellinksno'] ;
      $sql =  "DELETE FROM  `links` WHERE `sno` = $did";
      $result = mysqli_query($conn, $sql);
      if($result){
        $delete = true ;
      }
    }
}
?>

<!doctype html>
<html lang="en">

<?php include 'bits/_head.php' ?>

<body>
    <!-- class="bg-dark text-light" -->
    
    <?php require 'bits/_navbar.php' ?>

<style>
.tooltipbox, .edittooltipbox, .deltooltipbox {
position: relative;
display: inline-block;
}

.tooltipbox .tooltiptext, .edittooltipbox .edittooltiptext, .deltooltipbox .deltooltiptext{
visibility: hidden;
width: 140px;
background-color: #555;
color: #fff;
text-align: center;
border-radius: 6px;
padding: 5px;
position: absolute;
z-index: 1;
bottom: 150%;
left: 50%;
margin-left: -75px;
opacity: 0;
transition: opacity 0.3s;
}

.tooltipbox .tooltiptext::after, .edittooltipbox .edittooltiptext::after, .deltooltipbox .deltooltiptext::after {
content: "";
position: absolute;
top: 100%;
left: 50%;
margin-left: -5px;
border-width: 5px;
border-style: solid;
border-color: #555 transparent transparent transparent;
}

.tooltipbox:hover .tooltiptext, .edittooltipbox:hover .edittooltiptext, .deltooltipbox:hover .deltooltiptext {
visibility: visible;
opacity: 1;
}

.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
    color: #00ff77 !important;
}

.dataTables_wrapper .dataTables_length select {
    color: #ff5555;
}

.dataTables_wrapper .dataTables_filter input {
    border: 1px solid #aaa;
    border-radius: 3px;
    padding: 5px;
    background-color: #ddd;
    margin-left: 3px;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
color: #ccc !important;
}

</style>


    <?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $uname = explode(' ',trim($_SESSION['name']))[0] ;
echo '   
<!-- Category Container -->
<div class="container">
<div class="alert alert-dark text-success" role="alert">
    <h1 class="text-center alert-heading mb-0 mt-4 pt-4" style="font-family: \'Orbitron\', sans-serif;"> '. $uname .'\'s links </h1>
    <h5 class="text-center"><span class="addlink btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addLinkModal">Add a link</span></h5>
</div>';

// insertion status
if($add){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Link has been added successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
// deletion status
if($delete){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Link has been deleted successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
// insertion status
if($edit){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Link has been updated successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
} 

echo '
<div class="container" style="overflow-x:auto;">
    <table id="myTable" class="table table-dark table-hover">
        <thead >
            <tr> <th> </th> </tr>
        </thead>
        <tbody>';
$uid = $_SESSION['sno'];
$sql = "SELECT * FROM `links` WHERE `link_id`='$uid'";
    $result = mysqli_query($conn, $sql);

    // fond number of records returned
    $num = mysqli_num_rows($result);

    // display the rows returned by the sql query
    if($num > 0){
        while($row = mysqli_fetch_assoc($result)){
            $lid = $row['sno'];
            // $ttid = "myTooltip". $row['sno'];
            echo '
            <tr>
                <td> 
                    <div class="linkbox" style="padding:10px;">
            
                        <h3 id="linktitleid'.$lid.'" value="'. $row["link_title"] .'" class="linkname" style="text-transform: uppercase;font-family: \'Rampart One\', cursive;"> '. $row["link_title"] .' </h3>
            
                        <div class="linkurlbox" style="display:flex;background-color:rgb(51, 71, 86);border-radius:5px;border:2px solid #aaa;">
            
                            <div id="p'.$lid.'" value="'. $row["link_url"] .'" class="linkurl" style="padding:10px;min-width:200px;width:70%;overflow-x:auto;font-size:20px;color:orange;font-family: \'Courgette\',Cambria, Cochin, Georgia, Times, Times New Roman, serif ;"> '. $row["link_url"] .' <a href='. $row["link_url"] .' target="_blank"><i class="fa fa-external-link"></i></a> </div>
            
                            <div class="tooltipbox" style="padding:10px;border-left:2px solid #aaa;float:left;">
            
                                <span class="tooltiptext" id="myTooltip'.$lid.'">Copy url</span>
            
                                <span onclick="copyToClipboard(\'#p'.$lid.' \','.$lid.')" style="cursor:pointer;font-size:20px;color:orange;"> <i class="fa fa-copy"></i> </span>
                            </div>
                            <div class="edittooltipbox" style="padding:10px;border-left:2px solid #aaa;">
            
                                <span class="edittooltiptext" id="myedittooltip'.$lid.'">Edit url</span>
        
                                <span  onclick="editFunction('.$lid.')" data-bs-toggle="modal" data-bs-target="#editLinkModal" style="cursor:pointer;font-size:20px;color:#fff;"> <i class="fa fa-edit"></i> 
                                </span>
                            </div>
                            <div class="deltooltipbox" style="padding:10px;border-left:2px solid #aaa;">
            
                                <span class="deltooltiptext" id="mydeltooltip'.$lid.'">Delete url</span>
        
                                <span style="cursor:pointer;font-size:20px;">
                            <form action="/mlinks/mylinks.php" method="POST">
                                <input type="hidden" name="dellinksno" id="dellinksno'.$lid.'" value="'.$lid.'" />
                                <input type="hidden" name="operation" id="operation" value="delete" />
                                <button type="submit" name="delsubmitbtn" id="delsubmitbtn'.$lid.'" style="border:none;color:tomato;background-color:transparent;"><i class="fa fa-trash-o"></i></button>
                            </form>  
                            </span>
                            
                        </div>
                        
                        </div>
                    </div> 
                </td>
            </tr>'  ;
        }
    }

echo '
        </tbody>
    </table>



</div>
</div>
';

}
else{  
    header('location: /mlinks/index.php');
    exit();
}
        ?>


    <?php require 'bits/_footer.php'?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>

document.getElementById("nb-links").classList.add("active");

function copyToClipboard(element,id) {
var $temp = $("<input>");
$("body").append($temp);
$temp.val($(element).text()).select();
document.execCommand("copy");
$temp.remove();
var reqid = "myTooltip" + id;
var tooltip = document.getElementById(reqid);
tooltip.innerHTML = "Link copied" ;
setTimeout(() => {
    tooltip.innerHTML = "Copy url" ;
}, 1000);

}

function editFunction(id){

    

    var linktitle = "#linktitleid" + id;
    var linkurl = "#p"+id;

    linktitle = document.querySelector(linktitle).getAttribute('value');
    linkurl = document.querySelector(linkurl).getAttribute('value');

    console.log(linktitle,linkurl,id);

    $("#editlinktitle").attr('value',linktitle);
    $("#editlinkurl").attr('value',linkurl);
    $("#editlinksno").attr('value',id);
}



$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>

</html>
