<?php
class ProductRepository
{

    // $array_conds: lấy sản phẩm dựa theo cột
    // $array_sort: sắp xếp tăng hay giảm
    // $page: trang thứ mấy
    // $qty_per_page: số lượng sản phẩm mỗi trang
    // function getBy($array_conds = [], $array_sorts = [], $page =  null, $qty_per_page = 1){
    //     if($page){
    //         $page_index = $page - 1;
    //     }

    //     $temp = [];
    //     foreach($array_conds as $column => $cond){
    //         $type = $cond['type'];
    //         $val = $cond['val'];
    //         $str = "$column $type";
    //     }
    // }

    function getBy($array_conds = [], $array_sorts = [], $page = null, $qty_per_page = 10)
    {
        global $conn;
        $sql = "SELECT * FROM product WHERE 1=1";

        // 1. Xử lý điều kiện lọc
        foreach ($array_conds as $column => $cond) {
            $type = strtoupper($cond['type'] ?? '=');
            $val = $cond['val'] ?? null;

            switch ($type) {
                case 'LIKE':
                    $sql .= " AND `$column` LIKE '%" . $conn->real_escape_string($val) . "%'";
                    break;

                case 'IN':
                    if (is_array($val) && count($val) > 0) {
                        $escapedVals = array_map(fn($v) => "'" . $conn->real_escape_string($v) . "'", $val);
                        $sql .= " AND `$column` IN (" . implode(',', $escapedVals) . ")";
                    }
                    break;

                case 'BETWEEN':
                    if (is_array($val) && count($val) === 2) {
                        $v1 = $conn->real_escape_string($val[0]);
                        $v2 = $conn->real_escape_string($val[1]);
                        $sql .= " AND `$column` BETWEEN '$v1' AND '$v2'";
                    }
                    break;

                default:
                    $escapedVal = $conn->real_escape_string($val);
                    $sql .= " AND `$column` $type '$escapedVal'";
                    break;
            }
        }

        // 2️. Xử lý sắp xếp
        if (!empty($array_sorts)) {
            $sortParts = [];
            foreach ($array_sorts as $col => $dir) {
                $dir = strtoupper($dir) === 'DESC' ? 'DESC' : 'ASC';
                $sortParts[] = "`$col` $dir";
            }
            $sql .= " ORDER BY " . implode(', ', $sortParts);
        }

        // 3️. Phân trang
        if ($page && $qty_per_page) {
            $offset = ($page - 1) * $qty_per_page;
            $sql .= " LIMIT $offset, $qty_per_page";
        }

        // 4️. Thực thi truy vấn
        $result = $conn->query($sql);
        $products = [];


        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $product = new Product(
                    $row['id'],
                    $row['name'],
                    $row['price'],
                    $row['sku'],
                    $row['price'],
                    $row['discount_percentage'],
                    $row['discount_from_date'],
                    $row['discount_to_date'],
                    $row['featured_image'],
                    $row['inventory_qty'],
                    $row['created_date'],
                    $row['description'],
                    $row['start'],
                    $row['featured'],
                    $row['category_id'],
                    $row['brand_id'],
                );
                $products[] = $product;
            }
        }

        return $products;
    }
}
