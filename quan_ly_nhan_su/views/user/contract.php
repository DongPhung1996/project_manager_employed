<?php 
include 'views/user/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Hợp đồng lao động</h1>
        </div>
        <div>
        	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <!-- <div class="col-lg-6">
                                    <form action="user.php?controller=users&action=list" role="form" method="post">                      
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select name="role" class="form-control">
                                                <option value="1">user</option>
                                                <option value="2">Customer</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default" name="list_user">List user</button>
                                    </form>
                                </div> -->
                                <div class="col-lg-12">
							        <table class="table">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Tên</th>
							              <th>Bộ phận</th>
							              <th>Loại hợp đồng</th>
							              <th>Role</th>
							              <th>Mã nhân viên</th>
							              <th>Rank</th>
							              <th>Level</th>	
							              <th>Lương</th>
							              <th>Ngày ký hợp đồng</th>
							              <th>Ngày hết hạn hợp đồng</th>
							              <th>Nhận thưởng</th>
							            </tr>
							          </thead>
							          <tbody>
							          	<?php
									          $stt = 1;
									          foreach ($data as $list) {
									          	echo "<tr>
									              <td>". $stt++."</td>
									              <td>". $list["name"]."</td>
									              <td>". $list["part"]."</td>
									              <td>". $list["type_of_contract"]."</td>
									              <td>". $list["role"]."</td>
									              <td>". $list["employed_code"]."</td>
									              <td>". $list["rank"]."</td>
									              <td>". $list["level"]."</td>
									              <td>". $list["salary"]."</td>
									              <td>". $list["date_start_contract"]."</td>
									              <td>". $list["date_end_contract"]."</td>
									              <td>". $list["bonus"]."</td>
									              </tr>";
									          }								          
								          ?>
							          </tbody>
							        </table> 
							   </div>   							 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->
<?php include 'views/user/common/footer.php';?>
