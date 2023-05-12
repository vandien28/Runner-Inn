<?php
$db = new PDO("mysql:host=localhost;dbname=runnerinn", "root", "");
$city = $_GET['location'];
if ($city == "0") {
    $order = $db->prepare("SELECT * from donhang");
    $order->execute();
    $orders = $order->fetchAll(PDO::FETCH_ASSOC);
    foreach ($orders as $o) {
        echo '<tr>
                <td id="id" style="width: calc(100%/6); height: 50px; color:rgb(0 0 0/40%);"> ' . $o["madonhang"] . '</td>
                <td id="customer" style="width: calc(100%/6); height: 50px;"> ' . $o["makhachhang"] . ' </td>
                <td id="status" style="width: calc(100%/6); height: 50px;" class="orderinfo">
                    <select name="selectStt-' . $o["madonhang"] . '" id="selectStt-' . $o["madonhang"] . '" class="selectStt" onchange="updateStatus(' . $o["madonhang"] . ', this.value)">
                        <option value="">Chọn trạng thái</option>
                        <option value="Đang xử lý" ' . ($o["trangthaidonhang"] == "Đang xử lý" ? "selected" : "") . '>Đang xử lý</option>
                        <option value="Đã xử lý" ' . ($o["trangthaidonhang"] == "Đã xử lý" ? "selected" : "") . '>Đã xử lý</option>
                        <option value="Đã giao" ' . ($o["trangthaidonhang"] == "Đã giao" ? "selected" : "") . '>Đã giao</option>
                        <option value="Đã huỷ" ' . ($o["trangthaidonhang"] == "Đã huỷ" ? "selected" : "") . '>Đã huỷ</option>
                    </select>
                </td>
                <td id="date" style="width: calc(100%/6); height: 50px;"> ' . $o["ngaydathang"] . ' </td>
                <td id="address" style="width: calc(100%/6); height: 50px;"> ' . $o["diachi"] . ' </td>
                <td id="total" style="width: calc(100%/6); height: 50px;"> ' . $o["tongtien"] . ' </td>
            </tr>';
    }
} else {
    $order = $db->prepare("SELECT * from donhang where diachi LIKE :city");
    $order->bindValue(":city", '%' . $city . '%', PDO::PARAM_STR);
    $order->execute();
    $orders = $order->fetchAll(PDO::FETCH_ASSOC);
    if (empty($orders)) {
        echo '<p style="display: block;
        text-align: center;
        font-weight: 600;
        font-size: 18px;
        margin-top: 85px;">Không tìm thấy đơn hàng!</p>';
    } else {
        foreach ($orders as $o) {
            echo '<tr>
                <td id="id" style="width: calc(100%/6); height: 50px; color:rgb(0 0 0/40%);"> ' . $o["madonhang"] . '</td>
                <td id="customer" style="width: calc(100%/6); height: 50px;"> ' . $o["makhachhang"] . ' </td>
                <td id="status" style="width: calc(100%/6); height: 50px;" class="orderinfo">
                    <select name="selectStt-' . $o["madonhang"] . '" id="selectStt-' . $o["madonhang"] . '" class="selectStt" onchange="updateStatus(' . $o["madonhang"] . ', this.value)">
                        <option value="">Chọn trạng thái</option>
                        <option value="Đang xử lý" ' . ($o["trangthaidonhang"] == "Đang xử lý" ? "selected" : "") . '>Đang xử lý</option>
                        <option value="Đã xử lý" ' . ($o["trangthaidonhang"] == "Đã xử lý" ? "selected" : "") . '>Đã xử lý</option>
                        <option value="Đã giao" ' . ($o["trangthaidonhang"] == "Đã giao" ? "selected" : "") . '>Đã giao</option>
                        <option value="Đã huỷ" ' . ($o["trangthaidonhang"] == "Đã huỷ" ? "selected" : "") . '>Đã huỷ</option>
                    </select>
                </td>
                <td id="date" style="width: calc(100%/6); height: 50px;"> ' . $o["ngaydathang"] . ' </td>
                <td id="address" style="width: calc(100%/6); height: 50px;"> ' . $o["diachi"] . ' </td>
                <td id="total" style="width: calc(100%/6); height: 50px;"> ' . $o["tongtien"] . ' </td>
            </tr>';
        }
    }
}

$order = $db->prepare("SELECT * from donhang where diachi LIKE :city");
$order->bindValue(":city", '%' . $city . '%', PDO::PARAM_STR);
$order->execute();
$orders = $order->fetchAll(PDO::FETCH_ASSOC);
if (empty($orders)) {
    echo '<p style="display: block;
    text-align: center;
    font-weight: 600;
    font-size: 18px;
    margin-top: 85px;">Không tìm thấy đơn hàng!</p>';
} else {
    foreach ($orders as $o) {
        echo '<tr>
            <td id="id" style="width: calc(100%/6); height: 50px; color:rgb(0 0 0/40%);"> ' . $o["madonhang"] . '</td>
            <td id="customer" style="width: calc(100%/6); height: 50px;"> ' . $o["makhachhang"] . ' </td>
            <td id="status" style="width: calc(100%/6); height: 50px;" class="orderinfo">
                <select name="selectStt-' . $o["madonhang"] . '" id="selectStt-' . $o["madonhang"] . '" class="selectStt" onchange="updateStatus(' . $o["madonhang"] . ', this.value)">
                    <option value="">Chọn trạng thái</option>
                    <option value="Đang xử lý" ' . ($o["trangthaidonhang"] == "Đang xử lý" ? "selected" : "") . '>Đang xử lý</option>
                    <option value="Đã xử lý" ' . ($o["trangthaidonhang"] == "Đã xử lý" ? "selected" : "") . '>Đã xử lý</option>
                    <option value="Đã giao" ' . ($o["trangthaidonhang"] == "Đã giao" ? "selected" : "") . '>Đã giao</option>
                    <option value="Đã huỷ" ' . ($o["trangthaidonhang"] == "Đã huỷ" ? "selected" : "") . '>Đã huỷ</option>
                </select>
            </td>
            <td id="date" style="width: calc(100%/6); height: 50px;"> ' . $o["ngaydathang"] . ' </td>
            <td id="address" style="width: calc(100%/6); height: 50px;"> ' . $o["diachi"] . ' </td>
            <td id="total" style="width: calc(100%/6); height: 50px;"> ' . $o["tongtien"] . ' </td>
        </tr>';
    }
}
