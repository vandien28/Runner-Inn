<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
if (isset($_GET["action"]) && isset($_GET["ids"])) {
    $action = $_GET["action"];
    $ids = explode(",", $_GET["ids"]);
    $sql = "UPDATE khachhang SET khoa = :khoa WHERE makhachhang IN (" . implode(",", $ids) . ")";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":khoa", $khoa);
    $khoa = ($action == "lock") ? 1 : 0;
    $stmt->execute();


    $user = $db->prepare("SELECT * from khachhang");
    $user->execute();
    $users = $user->fetchAll(PDO::FETCH_ASSOC);
    foreach ($users as $row) {

        echo '<tr>
            <th style="width: calc(100%/6.41);">' . $row["makhachhang"] . '</th>
            <td style="width: calc(100%/6.41);">' . $row["tenkhachhang"] . '</td>
            <td style="width: calc(100%/6.41);">' . $row["email"] . '</td>
            <td style="width: calc(100%/6.41);">' . $row["tentk"] . '</td>
            <td style="width: calc(100%/6.41);">' . $row["matkhau"] . '</td>
            <td style="width: calc(100%/6.41);">' . $row["sdt"] . '</td>
            <td>';
        if ($row["khoa"] == 0) {
            echo '<i class="fa-solid fa-unlock"></i>';
        } else {
            echo '<i class="fa-solid fa-lock"></i>';
        }
        echo '</td>
            <td>
                <input type="checkbox" id="checkbox-' . $row['makhachhang'] . '" name="checkbo-' . $row['makhachhang'] . '" class="checkbox" data-id="' . $row['makhachhang'] . '">
                <label class="checkboxs" for="checkbox-' . $row['makhachhang'] . '"></label>
            </td>
        </tr>';
    }
}
