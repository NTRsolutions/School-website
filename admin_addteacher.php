<?php     	
    session_start();
    if(!isset($_SESSION['name']))
	{
		header("refresh:0,url=academylogin.php");
	}
	else
	{
        function succ()
       {
        echo"
          <script type='text/javascript'>
                alert('Data Inserted Succesfully!!');
                </script>"
                ;
               echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin_addteacher.php\">";
       }
		$name=$_SESSION['name'];
        $teachname=$address=$contact=$qual=$des=$username=$password="";
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Interface</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Admin's Web Interface</a>
            </div>
            <?php
                require_once('admin_topmenu.php');
            ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
             <div class="collapse navbar-collapse navbar-ex1-collapse">
                     
			<ul class="nav navbar-nav side-nav">
                    
                <li><a href="admin.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
                 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#dash"><i class="fa fa-fw fa-dashboard fa-fw"></i> Dashboard<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="dash" class="collapse">
                            <li><a href="admin_dash_view.php"><i class="fa fa-fw fa-table fa-fw"></i> View posts</a></li>
                            <li><a href="admin_form_dash.php"><i class="fa fa-fw fa-plus fa-fw"></i> Add Post</a></li>
                            <li><a href="admin_dash_edit.php"><i class="fa fa-fw fa-edit fa-fw"></i> Edit Post</a></li>
                            <li><a href="admin_dash_delete.php"><i class="fa fa-fw fa-minus fa-fw"></i> Delete Post</a></li>
                        </ul>
                    </li>	
                    <li><a href="javascript:;" data-toggle="collapse" data-target="#subject"><i class="fa fa-fw fa-book fa-fw"></i> Subjects<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="subject" class="collapse">
                            <li><a href="admin_listsubject.php"><i class="fa fa-fw fa-table fa-fw"></i> List</a></li>
                            <li><a href="admin_addsubject.php"><i class="fa fa-fw fa-plus fa-fw"></i> Add</a></li>
                            <li><a href="admin_editsubject.php"><i class="fa fa-fw fa-edit fa-fw"></i> Edit</a></li>
                            <li><a href="admin_delsubject.php"><i class="fa fa-fw fa-minus fa-fw"></i> Delete</a></li>
                        </ul>
                    </li>
	            	
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#class"><i class="fa fa-fw fa-university fa-fw"></i> Class<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="class" class="collapse">
                            <li><a href="admin_listclass.php"><i class="fa fa-fw fa-table fa-fw"></i> List</a></li>
                            <li><a href="admin_addclass.php"><i class="fa fa-fw fa-plus fa-fw"></i> Add</a></li>
                            <li><a href="admin_editclass.php"><i class="fa fa-fw fa-edit fa-fw"></i> Edit</a></li>
                            <li><a href="admin_delclass.php"><i class="fa fa-fw fa-minus fa-fw"></i> Delete</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#teacher"><i class="fa fa-fw fa-graduation-cap fa-fw"></i> Teacher<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="teacher" class="collapse">
                            <li><a href="admin_listteacher.php"><i class="fa fa-fw fa-table fa-fw"></i> List</a></li>
                            <li><a href="admin_addteacher.php"><i class="fa fa-fw fa-plus fa-fw"></i> Add</a></li>
                            <li><a href="admin_editteacher.php"><i class="fa fa-fw fa-edit fa-fw"></i> Edit</a></li>
                            <li><a href="admin_delteacher.php"><i class="fa fa-fw fa-minus fa-fw"></i> Delete</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#student"><i class="fa fa-fw fa-child fa-fw"></i> Student<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="student" class="collapse">
                            <li><a href="admin_liststudent.php"><i class="fa fa-fw fa-table fa-fw"></i> List</a></li>
                            <li><a href="admin_addstudent.php"><i class="fa fa-fw fa-plus fa-fw"></i> Add</a></li>
                            <li><a href="admin_editstudent.php"><i class="fa fa-fw fa-edit fa-fw"></i> Edit</a></li>
                            <li><a href="admin_delstudent.php"><i class="fa fa-fw fa-minus fa-fw"></i> Delete</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#timetable"><i class="fa fa-fw fa-table fa-fw"></i> Time Table<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="timetable" class="collapse">
                            <li><a href="admin_listtimetable.php"><i class="fa fa-fw fa-table fa-fw"></i> List</a></li>
                            <li><a href="admin_addtimetable.php"><i class="fa fa-fw fa-plus fa-fw"></i> Add</a></li>
                            <li><a href="admin_edittimetable.php"><i class="fa fa-fw fa-edit fa-fw"></i> Edit</a></li>
                            <li><a href="admin_deltimetable.php"><i class="fa fa-fw fa-minus fa-fw"></i> Delete</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#examschedule"><i class="fa fa-fw fa-calendar fa-fw"></i> Exam Schedule<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="examschedule" class="collapse">
                            <li><a href="admin_listexamschedule.php"><i class="fa fa-fw fa-table fa-fw"></i> List</a></li>
                            <li><a href="admin_addexamschedule.php"><i class="fa fa-fw fa-plus fa-fw"></i> Add</a></li>
                            <li><a href="admin_editexamschedule.php"><i class="fa fa-fw fa-edit fa-fw"></i> Edit</a></li>
                            <li><a href="admin_delexamschedule.php"><i class="fa fa-fw fa-minus fa-fw"></i> Delete</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#fees"><i class="fa fa-fw fa-money fa-fw"></i> Fees<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="fees" class="collapse">
                            <li><a href="admin_listfees.php"><i class="fa fa-fw fa-table fa-fw"></i> List</a></li>
                            <li><a href="admin_addfees.php"><i class="fa fa-fw fa-plus fa-fw"></i> Add</a></li>
                            <li><a href="admin_editfees.php"><i class="fa fa-fw fa-edit fa-fw"></i> Edit</a></li>
                            <li><a href="admin_delfees.php"><i class="fa fa-fw fa-minus fa-fw"></i> Delete</a></li>
                        </ul>
                    </li>
                    <li><a href="admin_string_generate.php"><i class="fa fa-fw fa-certificate"></i> Tokens</a></li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Teacher
                        </h1>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <tbody>
                                    <center><p id="incor1"></p></center>
                                    <form enctype="multipart/form-data"  method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                                    <tr>
                                        <td><strong>Teacher Name</strong></td>
                                        <td><input class="form-control" style="width: 50%;" name="teachname" type="text" required autocomplete="off" value="<?php echo $teachname; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Address</strong></td>
                                        <td><textarea  class="form-control" rows="4" style="width:420px" value="<?php echo $address; ?>" name="address" required autocomplete="off" ></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Contact No.</strong></td>
                                        <td><input  class="form-control" style="width: 50%;" value="<?php echo $contact; ?>" name="contact" type="text" required autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Qualification</strong></td>
                                        <td><input  class="form-control" style="width: 50%;" value="<?php echo $qual; ?>" name="qual" type="text" required autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Designation</strong></td>
                                        <td><input  class="form-control" style="width: 50%;" value="<?php echo $des; ?>" name="des" type="text" required autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Username</strong></td>
                                        <td><input  class="form-control" minlength="6" style="width: 50%;" value="<?php echo $username; ?>" name="username" type="text" required autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Password</strong></td>
                                        <td><input class="form-control"  minlength="6" style="width: 50%;" value="<?php echo $password; ?>" name="password" type="password" required autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Image</strong></td>
                                        <td><input style="width:50%" class="form-control" type="file" id="img" name="img" autocomplete="off"></td>
                                    </tr>
                                    
                                    <?php
                                        for($i=1;$i<=5;$i++)
                                        {
                                            ?>
                                            <tr>
                                            <td><strong>Subject <?php echo $i;?></strong></td>
                                            <td>
                                                <select  class="form-control" name="field_name[]" id="first" style="width: 50%; height: 35px;">
                                                <option disabled selected>select an option</option>
                                                <?php
                                                    require_once('db.php');
                                                    $query="SELECT * from subject";
                                                    $result=mysqli_query($stat,$query); 
                                                    while($rows=mysqli_fetch_array($result))
                                                    {
                                                        ?>  <option value="<?php echo $rows['name']; ?>"><?php echo $rows['name']; ?></option>
                                                        
                                                    <?php    
                                                    }
                                                ?>
                                                </select>
                                            </td>    
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    <tr>
                                    <td colspan="2" >
                                    <button name="submit" type="submit" style="width:10%" class="btn btn-success">Submit</button>
                                    </td>
                                    </tr>
                                        
                            </form>
                            <?php  
                            if(isset($_POST['submit']))
                            {
                                include ('db.php');
                                define('GW_UPLOADPATH','image/');
                                $tname=trim($_POST['teachname']);
                                $add=trim($_POST['address']);
                                $qual=trim($_POST['qual']);
                                $des=trim($_POST['des']);
                                $pass=trim($_POST['password']);
                                $name=$_FILES['img']['name'];
                                $file=substr($name,strrpos($name, '.')+1);
                                $target=GW_UPLOADPATH.time().'.'.$file;
                                $name=time().'.'.$file; 
                                $username =trim($_POST['username']);
                                $contact=trim($_POST['contact']);
                                $query="SELECT * from teacher WHERE username='$username'";
                                $result=mysqli_query($stat,$query); 
                                $blowfish_salt=bin2hex(openssl_random_pseudo_bytes(22));
                                $hash=crypt($pass,"$2a$12$".$blowfish_salt);
                                $sub=$_POST['field_name'];
                                $f=1;
                                $count=count($sub);
                                for($i=0;$i<$count-1;$i++)
                                {
                                    for($j=$i+1;$j<$count;$j++)
                                    {   
                                        if($sub[$i]==$sub[$j])
                                        {
                                            ?>
                                            <script>
                                                document.getElementById("incor1").innerHTML="Enter unique subjects!!!";
                                            </script>
                                            <?php 
                                            $f=0;
                                        }
                                    }
                                }
                                for($i=0;$i<5;$i++)
                                {
                                    if($i<$count)
                                        $as[$i]=$sub[$i];
                                    else
                                        $as[$i]=NULL;
                                }

                                if($f==1)
                                {
                                    if(mysqli_num_rows($result)!=0) 
                                    {
                                            ?>
                                            <script>
                                            document.getElementById("incor1").innerHTML="Username Already Exist!!!";
                                            </script>
                                            <?php 
                                    }
                                    else if($file!="jpg"&&$file!="jpeg"&&$file!="png"&&$file!="bmp")
                                    {
                                        ?>
                                        <script>
                                        document.getElementById("incor1").innerHTML="Incorrect Image format !";
                                        </script>
                                        <?php 
                                    }
                                    else
                                    {
                                       $flag=0;
                                       if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
                                        {
                                                $query="INSERT INTO `teacher` VALUES (NULL, '$tname', '$add' ,'$qual','$des', '$name', '$username','$hash','$as[0]','$as[1]','$as[2]','$as[3]','$as[4]','$contact' )";
                                                mysqli_query($stat,$query);
                                                succ();
                                        }
                                    }
                                }
                            }
                            ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="jquery-1.12.0.min.js"></script>
    <script src="jquery-migrate-1.2.1.min.js"></script>
    <script src="menu.js"></script>
    <script src="subject1.js"></script>
    <script type="text/javascript" src="jQuery.login.js"></script>

</body>
<?php 
    }		
	?>
</html>
