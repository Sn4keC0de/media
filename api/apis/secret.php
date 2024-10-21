<?php
include_once('../common/include.php');
$conn=getConnection();

if($conn==null){
    sendResponse(500,$conn,'Server Connection Error');
}else{
    // $words = json_decode( str_replace("=",":",file_get_contents("php://input")));
    if (!isset($_POST['word'])){
        sendResponse(400, [] , 'Word Required !');
    } else {
        $word = $_POST['word'];
        $sql = "SELECT id, word, secret FROM secrets where word = :word";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":word", $word, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if ($result) {
            foreach ($result as $row) {
                $wordy=array(
                    "id" =>  $row["id"],
                    "word" => $row["word"],
                    "secret" => $row["secret"],
                );
                if (str_contains($row["secret"],".webp")) {
                    $img_file = '../../img/'.$row["secret"];

                    $bin = file_get_contents($img_file);

                    $b64 = base64_encode($bin);
                    $wordy['secret'] = 'data:image/webp;base64,'.$b64;
                }else if (str_contains($row["secret"], ".mp4")) {
                    $video_file = './vid/'.$row["secret"];
                    $wordy['secret'] = $video_file;                }
            }

            sendResponse(200,$wordy,'OK');
        } else {
            sendResponse(404,[],'User not available');
        }
    }
}
?>
