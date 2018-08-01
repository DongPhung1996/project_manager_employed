<?php 
include 'views/admin/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Thành viên</h1>
        </div>
        <div>
        	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <!-- <div class="col-lg-6">
                                    <form action="admin.php?controller=users&action=list" role="form" method="post">                      
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select name="role" class="form-control">
                                                <option value="1">Admin</option>
                                                <option value="2">Customer</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default" name="list_user">List user</button>
                                    </form>
                                </div> -->
                                <div class="col-lg-12">
							        <table class="table" border="1">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Họ và tên</th>
							              <th>Ngày sinh</th>
							              <th>Số cmnd</th>
							              <th>Ngày cấp</th>
							              <th>Điện thoại</th>
							              <th>Email</th>	
							              <th>Skype</th>
							              <th>Giới tính</th>
							              <th>Địa chỉ</th>
							              <th>Action</th>
							            </tr>
							          </thead>
							          <tbody>
							          <?php
								          $stt = 1;
								          foreach ($data as $list) {
								          	echo "<tr>
								              <td>". $stt++."</td>
								              <td>". $list["name"]."</td>
								              <td>". $list["date_of_birth"]."</td>
								              <td>". $list["id_card"]."</td>
								              <td>". $list["date_range"]."</td>
								              <td>". $list["phone"]."</td>
								              <td>". $list["email"]."</td>
								              <td>". $list["skype"]."</td>
								              <td>". $list["gender"]."</td>
								              <td>". $list["address"]."</td>
								              </tr>";
								          }								          
							          ?>
							          </tbody>
							        </table> 

							        <table class="table" border="1">
							        	<thead>
							        		<tr>
							        		  <th>Quốc tịch</th>
								              <th>Tình trạng hôn nhân</th>	
								              <th>Passport No</th>
								              <th>Passport ngày cấp</th>
								              <th>Passport nơi cấp</th>
								              <th>Số sổ Bảo Hiểm</th>
								              <th>Ngày cấp sổ</th>
								              <th>Nơi cấp sổ</th>
								              <th>Bank Account</th>	
								              <th>Action</th>
							        		</tr>
							        	</thead>
							        	<tbody>
							        	<?php  	
							        		foreach ($data as $list) {
									          	echo "<tr>
									              <td>". $list["nationality"]."</td>
									              <td>". $list["maried"]."</td>
									              <td>". $list["passport_no"]."</td>
									              <td>". $list["passport_date"]."</td>
									              <td>". $list["passport_where"]."</td>
									              <td>". $list["number_of_insurrance"]."</td>
									              <td>". $list["date_range_insurrance"]."</td>
									              <td>". $list["issued_by"]."</td>
									              <td>". $list["bank_account"]."</td>
									              <td>".
								              		"<a href='edit_product.php'>Sửa</a>".	              
									              "</td>
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
<?php include 'views/admin/common/footer.php';?>
