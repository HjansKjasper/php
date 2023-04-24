<form method='POST'>
    <h3>Skriv ditt innlegg:</h3><br>
    <textarea name="tekst_innlegg" cols="40" rows="5"></textarea><br>   
    <input type="submit" name='submit_innlegg' value='Legg ut'><br><br>
</form>

<?php 
if(isset($_POST["submit_innlegg"])){
    include "azure.php";
    $tekst = $_POST["tekst_innlegg"];
    $sql = "INSERT INTO innlegg (tekst, idbruker, date) VALUES ('$tekst','$id', now() )";

    if($conn->query($sql)) {
        echo "Innlegg ble lagt til i databasen";
    } else {
        echo "Feilmelding: $conn->error";
    }
}
 
?>