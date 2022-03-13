<?php 
$con=mysqli_connect('localhost','pavani','pavani');
mysqli_select_db($con,'connect');
$res=mysqli_query($con,"select email,name,contact,cmail from signup;");
$con_arr=array();
while($row=mysqli_fetch_array($res)){
    array_push($con_arr,array($row['email'],$row['name'],$row['contact'],$row['cmail']));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts App</title>
     <link rel="icon" href="logo.svg" type="image/svg" sizes="16x16">
     <link rel="stylesheet" href="https://wallpaperaccess.com/contact-us">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-image: url(3.jpg);
        }
        h1 {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            color: white;
        }

        hr {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            color: black;
            background-color: black;
        }

        #mid {
            width: 40%;
            margin-left: auto;
            margin-right: auto;
            color: black;
            background-color: black;
        }

        #outer {
            border: 2px solid black;
            border-radius: 5px;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
            background-color: white;
            padding-bottom: 20px;
        }

        #inner {
            width: 60%;
            margin-left: auto;
            margin-right: auto;

        }

        h3 {
            text-align: center;
        }

        .gr {
            color: grey;
        }

        #name,
        #no,
        #email {
            margin-top: 5px;
            margin-bottom: 10px;
            width: 95%;
            height: 30px;
        }

        button {
            color: white;
            background-color: rgb(79, 79, 182);
            border: 1px solid lightgray;
            width: 48%;
            height: 30px;
            border-radius: 4px;
            margin-left: 50%
        }

        button:hover {
            cursor: pointer;
            background-color: blue;
        }

        h2 {
            text-align: center;
            color: white;
        }

        table {
            border: 1px solid black;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            border-collapse: collapse;
        }

        td {
            text-align: center;
            padding: 40px;
            border: 1px solid black;
        }

        th {
            background-color: gray;
            padding: 40px;
            color: white;
            border: 1px solid black;
        }
    </style>
    <script>
        function fun(){
        var um=localStorage.getItem("email");
        document.getElementById("e1").value=um;
        var arr=<?php echo json_encode($con_arr); ?>;
        console.log(arr);
        for(var i=0;i<arr.length;i++){
            if(arr[i][0]==localStorage.getItem("email")){
                var table=document.getElementById("main");
                var c1=arr[i][1].split(",");
                var c2=arr[i][2].split(",");
                var c3=arr[i][3].split(",");
                for(var j=0;j<c1.length;j++){
                    if(c2[j]=="k")
                    break;
                    console.log(c2[j]);
                    var row = document.createElement("tr");
                    var cell1 = document.createElement("td");
                    var cell2 = document.createElement("td");
                    var cell3 = document.createElement("td");
                    cell1.innerHTML=c1[j];
                    cell2.innerHTML=c2[j];
                    cell3.innerHTML=c3[j];
                    row.appendChild(cell1);
                    row.appendChild(cell2);
                    row.appendChild(cell3);
                    table.appendChild(row);
                }
            }
        }
    }
    </script>
</head>

<body onload="fun()">
    <h1>|| Contacts App ||</h1>
    <hr>
    <div id="outer">
        <div id="inner">
            <form action="contact.php" method="post">
                <h3>Add Contacts</h3><br>
                <input style="display:none;" name="umail" type="text" id="e1">
                <label for="name" class="gr">Name</label><br>
                <input type="text" name="name" id="name" autocomplete="off" required><br>
                <label for="no" class="gr">Ph No</label><br>
                <input type="text" name="no" id="no" autocomplete="off" required><br>
                <label for="email" class="gr">Email</label><br>
                <input type="text" name="email" id="email" autocomplete="off" required><br>
                <button>Save</button>
            </form><br>
        </div>
    </div><br>
    <hr>
    <h2>My Contacts</h2>
    <table id="main">
        <tr>
            <th>Name</th>
            <th>Ph No</th>
            <th>Email</th>
        </tr>
    </table>
</body>

</html>