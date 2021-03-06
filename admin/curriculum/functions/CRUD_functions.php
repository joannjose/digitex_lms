<?php
function update_active_year($id){
    require_once "../../../config.php";
    $sql = "UPDATE academic_year SET active=1 WHERE active=0 && id='$id'";
    if($stmt = mysqli_prepare($conn, $sql)){
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            //header("location: academic_year.php");
            $sql = "UPDATE academic_year SET active=0 WHERE active=1 && id!='$id'";
            if($stmt = mysqli_prepare($conn,$sql)){
                if(mysqli_stmt_execute($stmt)){
                    header("location: ../../../layout/admin.php?page=Curriculum&sub=AcademicYear");
                    exit();
                }
            }
    
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}

function create_academic_year($name,$year,$semester){
    require_once "../../../config.php";
            // Prepare an insert statement
            $sql = "INSERT INTO academic_year (name, acad_year, semester) VALUES (?, ?, ?)"; 
            
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_year, $param_semester);
                
                // Set parameters
                $param_name = $name;
                $param_year = $year;
                $param_semester = $semester;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Redirect to Academic Year page
                    header("location: ../../../layout/admin.php?page=Curriculum&sub=AcademicYear");
                    exit();
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            
            // Close statement
            mysqli_stmt_close($stmt);
    
}

function update_academic_year($id,$name,$year,$semester){
    require_once "../../../config.php";
    $sql = "UPDATE academic_year SET name='$name', acad_year='$year', semester='$semester' WHERE id='$id'";

    if($stmt = mysqli_prepare($conn, $sql)){
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            echo "Response.Write('<script language='javascript'>window.alert('Update Successful');window.location='../../../layout/admin.php?page=Curriculum&sub=AcademicYear';</script>');";
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}

function delete_academic_year($id){
    require_once "../../../config.php";
    $sql = "UPDATE academic_year SET archived=1 WHERE archived=0 && id='$id'";
    if($stmt = mysqli_prepare($conn, $sql)){
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            echo "Response.Write('<script language='javascript'>window.alert('Deleted Successfully');window.location='../../../layout/admin.php?page=Curriculum&sub=AcademicYear';</script>');";
            //header("location: ../../../layout/admin.php?page=Curriculum&sub=AcademicYear");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}

if(isset($_POST['activeID'])){
    update_active_year($_POST['activeID']);
}

if(isset($_POST['startYear'],$_POST['endYear'],$_POST['sem'])){
    if($_POST['endYear']-$_POST['startYear']==1){
        $yearsem = $_POST['startYear']."-".$_POST['endYear']." ".$_POST['sem'];
        $year = $_POST['startYear']."-".$_POST['endYear'];
        create_academic_year($yearsem,$year,$_POST['sem']);
    }
    else{
       echo "Response.Write('<script language='javascript'>window.alert('Invalid Academic Year');
       window.location='../../../layout/admin.php?page=Curriculum&sub=AcademicYear';</script>');";
    }
}
else{
    header("location: ../../../layout/admin.php?page=Curriculum&sub=AcademicYear");
}

if(isset($_POST['delID'])){
    delete_academic_year($_POST['delID']);
}

if(isset($_POST['editID'],$_POST['editStartYear'],$_POST['editEndYear'],$_POST['editSem'])){
    if($_POST['editEndYear']-$_POST['editStartYear']==1){
        $yearsem = $_POST['editStartYear']."-".$_POST['editEndYear']." ".$_POST['editSem'];
        $year = $_POST['editStartYear']."-".$_POST['editEndYear'];
        update_academic_year($_POST['editID'],$yearsem,$year,$_POST['editSem']);
    }
    else{
       echo "Response.Write('<script language='javascript'>window.alert('Invalid Academic Year');window.location='../../../layout/admin.php?page=Curriculum&sub=AcademicYear';</script>');";
    }
}
else{
    header("location: ../../../layout/admin.php?page=Curriculum&sub=AcademicYear");
}
?>