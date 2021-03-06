<?php
  /*
   * Paging
   */

  //var_dump($_POST["selected"]);


  $iTotalRecords = 243;
  $iDisplayLength = intval($_REQUEST['length']);
  $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
  $iDisplayStart = intval($_REQUEST['start']);
  $sEcho = intval($_REQUEST['draw']);

  $records = array();
  $records["data"] = array();

  $end = $iDisplayStart + $iDisplayLength;
  $end = $end > $iTotalRecords ? $iTotalRecords : $end;

  $status_list = array(
    array("success" => "Publushed"),
    array("info" => "Not Published"),
    array("danger" => "Deleted")
  );

  for($i = $iDisplayStart; $i < $end; $i++) {
    $status = $status_list[rand(0, 2)];
    $id = ($i + 1);
    $records["data"][] = array(
      '<input type="checkbox" name="id[]" value="'.$id.'">',
      $id,
      'Temple Run 2',
      'Games/Fun',
      '185.50$',
      rand(5,4000),
      '05/01/2021',
      '<span class="label label-sm label-'.(key($status)).'">'.(current($status)).'</span>',
      '<a href="add_product.php" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i> Edit</a>',
    );
  }

  if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
    $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
    $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
  }

  $records["draw"] = $sEcho;
  $records["recordsTotal"] = $iTotalRecords;
  $records["recordsFiltered"] = $iTotalRecords;

  echo json_encode($records);
?>
