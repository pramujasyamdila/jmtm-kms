<?php 
$total_harga_hps_penyedia_4 = 0;
$get_total_harga_hps_penyedia_4 = $this->Data_kontrak_model->get_hps_penyedia_4_result_total_harga($id_hps_penyedia_4);
foreach ($get_total_harga_hps_penyedia_4 as $key => $value_hps_penyedia_4) {
    if ($value_hps_penyedia_4['total_harga'] == 0 || $value_hps_penyedia_4['total_harga'] == null) {
        $total_harga_hps_penyedia_4 += 0;
    } else {
        $total_harga_hps_penyedia_4 += $value_hps_penyedia_4['total_harga'];
    }
};
$where_hps_penyedia_4 = [
    'id_hps_penyedia_4' => $id_hps_penyedia_4
];
$data_hps_penyedia_4 = [
    'total_harga' => $total_harga_hps_penyedia_4,
];
$this->Data_kontrak_model->update_tbl_hps_penyedia_4($data_hps_penyedia_4, $where_hps_penyedia_4);
// logika update ke hps_penyedia_kontrak
// hps_penyedia_kontrak_4
// id_hps_penyedia_4
// hps_penyedia_kontrak_4
$total_harga_hps_penyedia_kontrak_4 = 0;
$get_total_harga_hps_penyedia_kontrak_4 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_4_result_total_harga($id_hps_penyedia_4);
foreach ($get_total_harga_hps_penyedia_kontrak_4 as $key => $value_hps_penyedia_kontrak_4) {
    if ($value_hps_penyedia_kontrak_4['total_harga'] == 0 || $value_hps_penyedia_kontrak_4['total_harga'] == null) {
        $total_harga_hps_penyedia_kontrak_4 += 0;
    } else {
        $total_harga_hps_penyedia_kontrak_4 += $value_hps_penyedia_kontrak_4['total_harga'];
    }
};
$where_hps_penyedia_kontrak_4 = [
    'id_refrence_hps' => $id_hps_penyedia_4
];
$data_hps_penyedia_kontrak_4 = [
    'total_harga' => $total_harga_hps_penyedia_kontrak_4,
];
$this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_4($data_hps_penyedia_kontrak_4, $where_hps_penyedia_kontrak_4);

// ini untuk update ke ketiga
$get_row_hps_penyedia_3 = $this->Data_kontrak_model->get_hps_penyedia_4($id_hps_penyedia_4);
$id_hps_penyedia_3 = $get_row_hps_penyedia_3['id_hps_penyedia_3'];
// hps_penyedia_4
// hps_penyedia_3
$total_harga_hps_penyedia_4 = 0;
$get_total_harga_hps_penyedia_4 = $this->Data_kontrak_model->get_hps_penyedia_4_result_total_harga($id_hps_penyedia_3);
foreach ($get_total_harga_hps_penyedia_4 as $key => $value_hps_penyedia_4) {
    if ($value_hps_penyedia_4['total_harga'] == 0 || $value_hps_penyedia_4['total_harga'] == null) {
        $total_harga_hps_penyedia_4 += 0;
    } else {
        $total_harga_hps_penyedia_4 += $value_hps_penyedia_4['total_harga'];
    }
};
$where_hps_penyedia_3 = [
    'id_hps_penyedia_3' => $id_hps_penyedia_3
];
$data_hps_penyedia_3 = [
    'total_harga' => $total_harga_hps_penyedia_4,
];
$this->Data_kontrak_model->update_tbl_hps_penyedia_3($data_hps_penyedia_3, $where_hps_penyedia_3);
// logika update ke hps_penyedia_kontrak
// hps_penyedia_kontrak_4
// id_hps_penyedia_3
// hps_penyedia_kontrak_3
$total_harga_hps_penyedia_kontrak_4 = 0;
$get_total_harga_hps_penyedia_kontrak_4 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_4_result_total_harga($id_hps_penyedia_3);
foreach ($get_total_harga_hps_penyedia_kontrak_4 as $key => $value_hps_penyedia_kontrak_4) {
    if ($value_hps_penyedia_kontrak_4['total_harga'] == 0 || $value_hps_penyedia_kontrak_4['total_harga'] == null) {
        $total_harga_hps_penyedia_kontrak_4 += 0;
    } else {
        $total_harga_hps_penyedia_kontrak_4 += $value_hps_penyedia_kontrak_4['total_harga'];
    }
};
$where_hps_penyedia_kontrak_3 = [
    'id_refrence_hps' => $id_hps_penyedia_3
];
$data_hps_penyedia_kontrak_3 = [
    'total_harga' => $total_harga_hps_penyedia_kontrak_4,
];
$this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_3($data_hps_penyedia_kontrak_3, $where_hps_penyedia_kontrak_3);




// ini untuk update ke dua
$get_row_hps_penyedia_2 = $this->Data_kontrak_model->get_hps_penyedia_3($id_hps_penyedia_3);
$id_hps_penyedia_2 = $get_row_hps_penyedia_2['id_hps_penyedia_2'];
$total_harga_hps_penyedia_3 = 0;
$get_total_harga_hps_penyedia_3 = $this->Data_kontrak_model->get_hps_penyedia_3_result_total_harga($id_hps_penyedia_2);
foreach ($get_total_harga_hps_penyedia_3 as $key => $value_hps_penyedia_3) {
    if ($value_hps_penyedia_3['total_harga'] == 0 || $value_hps_penyedia_3['total_harga'] == null) {
        $total_harga_hps_penyedia_3 += 0;
    } else {
        $total_harga_hps_penyedia_3 += $value_hps_penyedia_3['total_harga'];
    }
};
$where_hps_penyedia_2 = [
    'id_hps_penyedia_2' => $id_hps_penyedia_2
];
$data_hps_penyedia_2 = [
    'total_harga' => $total_harga_hps_penyedia_3,
];
$this->Data_kontrak_model->update_tbl_hps_penyedia_2($data_hps_penyedia_2, $where_hps_penyedia_2);
// logika update ke hps_penyedia_kontrak
$total_harga_hps_penyedia_kontrak_3 = 0;
$get_total_harga_hps_penyedia_kontrak_3 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_3_result_total_harga($id_hps_penyedia_2);
foreach ($get_total_harga_hps_penyedia_kontrak_3 as $key => $value_hps_penyedia_kontrak_3) {
    if ($value_hps_penyedia_kontrak_3['total_harga'] == 0 || $value_hps_penyedia_kontrak_3['total_harga'] == null) {
        $total_harga_hps_penyedia_kontrak_3 += 0;
    } else {
        $total_harga_hps_penyedia_kontrak_3 += $value_hps_penyedia_kontrak_3['total_harga'];
    }
};
$where_hps_penyedia_kontrak_2 = [
    'id_refrence_hps' => $id_hps_penyedia_2
];
$data_hps_penyedia_kontrak_2 = [
    'total_harga' => $total_harga_hps_penyedia_kontrak_3,
];
$this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_2($data_hps_penyedia_kontrak_2, $where_hps_penyedia_kontrak_2);



// ini untuk update ke satu
$get_row_hps_penyedia_1 = $this->Data_kontrak_model->get_hps_penyedia_2($id_hps_penyedia_2);
$id_hps_penyedia_1 = $get_row_hps_penyedia_1['id_hps_penyedia_1'];
$total_harga_hps_penyedia_2 = 0;
$get_total_harga_hps_penyedia_2 = $this->Data_kontrak_model->get_hps_penyedia_2_result_total_harga($id_hps_penyedia_1);
foreach ($get_total_harga_hps_penyedia_2 as $key => $value_hps_penyedia_2) {
    if ($value_hps_penyedia_2['total_harga'] == 0 || $value_hps_penyedia_2['total_harga'] == null) {
        $total_harga_hps_penyedia_2 += 0;
    } else {
        $total_harga_hps_penyedia_2 += $value_hps_penyedia_2['total_harga'];
    }
};
$where_hps_penyedia_1 = [
    'id_hps_penyedia_1' => $id_hps_penyedia_1
];
$data_hps_penyedia_1 = [
    'total_harga' => $total_harga_hps_penyedia_2,
];
$this->Data_kontrak_model->update_tbl_hps_penyedia_1($data_hps_penyedia_1, $where_hps_penyedia_1);
// logika update ke hps_penyedia_kontrak_1
$total_harga_hps_penyedia_kontrak_2 = 0;
$get_total_harga_hps_penyedia_kontrak_2 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_2_result_total_harga($id_hps_penyedia_1);
foreach ($get_total_harga_hps_penyedia_kontrak_2 as $key => $value_hps_penyedia_kontrak_2) {
    if ($value_hps_penyedia_kontrak_2['total_harga'] == 0 || $value_hps_penyedia_kontrak_2['total_harga'] == null) {
        $total_harga_hps_penyedia_kontrak_2 += 0;
    } else {
        $total_harga_hps_penyedia_kontrak_2 += $value_hps_penyedia_kontrak_2['total_harga'];
    }
};
$where_hps_penyedia_kontrak_1 = [
    'id_refrence_hps' => $id_hps_penyedia_1
];
$data_hps_penyedia_kontrak_1 = [
    'total_harga' => $total_harga_hps_penyedia_kontrak_2,
];
$this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data_hps_penyedia_kontrak_1, $where_hps_penyedia_kontrak_1);