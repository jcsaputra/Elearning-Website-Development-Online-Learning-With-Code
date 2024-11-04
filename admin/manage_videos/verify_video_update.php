<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'cerdasbersama');

if (isset($_POST['submitbtn'])) {
    $videoname = $_POST['video_name'];
    $videopath = $_POST['video_path'];
    $coursename = $_POST['course_name'];
    $videoimage = $_POST['video_image'];

    $qy = "INSERT INTO `videos`(`video_name`, `video_path`, `course_name`, `video_image`) VALUES ('$videoname','$videopath','$coursename','$videoimage')";

    mysqli_query($con, $qy);
    echo "inserted";
    header('location:edit_videos.php?course_name=' . $coursename);
    exit;
}

if (isset($_POST['submitupdate'])) {
    $video_id = $_POST['video_id'];
    echo $video_id;
    $videoname = $_POST['video_name'];
    $videopath = $_POST['video_path'];
    $coursename = $_POST['course_name'];
    $videoimage = $_POST['video_image'];

    $q = "UPDATE `videos` SET `video_name`='$videoname',`video_path`='$videopath',`video_image`='$videoimage' WHERE video_id='$video_id'";
    $result = mysqli_query($con, $q);
    if ($result) {
        header("location:update_videos.php?course_name=" . $coursename); // Menggunakan 'course_name' sebagai parameter
        exit;
    } else {
        echo "something went wrong";
    }
} else {
    echo "not set";
}
?>
