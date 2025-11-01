<?php
class CategoryRepository
{
    public function getAll() {
        return $this->getBy();
    }

    public function getBy($array_conds = [], $array_sorts = [], $page = null, $qty_per_page = 10)
    {
        global $conn;
        $sql = "SELECT * FROM category WHERE 1=1";

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
        $categories = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $category = new Category(
                    $row['id'],
                    $row['name']
                );
                $categories[] = $category;
            }
        }

        return $categories;
    }

    public function find($id)
{
    global $conn;

    $sql = "SELECT * FROM category WHERE id = " . intval($id) . " LIMIT 1";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $category  = new Category(
            $row['id'],
            $row['name']
        );
        return $category;
    }

    return null;
}

}
