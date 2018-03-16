<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="form-add">
				<h5>ฟอร์มกรอกข้อมูลเบิกสินค้า</h5>
				<hr>
				<div><!-- <div class="panel panel-default"> -->
					<form id="" action="" method="post">
					<div class="row">
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-8">
									<div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-primary disabled" type="button">เลือกประเภทสินค้า</button>
										</span>
										<div class="widget-inner" style="margin:100px 0 0 100px;">
											<label class="radio-inline">
												<input type="radio" name="products" class="styled" data-option="1" value="บรรจุภัณฑ์/สารเคมี" checked>
												<span class="text-info">บรรจุภัณฑ์/สารเคมี</span>
											</label>
											<label class="disabled radio-inline">
												<input type="radio" name="products" class="styled" data-option="1" value="วัสดุ/อะไหล่เครื่องจัก">
												<span class="text-info">วัสดุ/อะไหล่เครื่องจัก</span>
											</label>
											<label class="disabled radio-inline">
												<input type="radio" name="products" class="styled" data-option="1" value="ชุดฟอร์ม">
												<span class="text-info">ชุดฟอร์ม</span>
											</label>
											<label class="disabled radio-inline">
												<input type="radio" name="products" class="styled" data-option="2" value="อื่นๆ">
												<span class="text-info">อื่นๆ</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row hide optional" style="margin-top:8px;">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-primary disabled" type="button">รายละเอียดอื่นๆ</button>
										</span>
										<input type="text" class="form-control" placeholder="ระบุรายละเอียดอื่นๆ..." name="other" id="other">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top:8px;">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-8">
									<div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-primary disabled" type="button">วันที่เอกสาร</button>
										</span>
										<input type="text" class="form-control datepicker" placeholder="เลือกวันที่..." name="docdate" id="docdate" value="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-offset-4 col-md-8">
									<div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-primary disabled" type="button">แผนก/ฝ่าย</button>
										</span>
										<input type="text" class="form-control text-uppercase" placeholder="แผนก/ฝ่าย..." name="dep_head" id="dep_head" value="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- <div class="panel panel-default"> -->
				<table class="table-bordered table-components">
					<thead>
						<tr>
							<th class="text-center" width="40" rowspan="2">No</th>
							<th class="text-center" rowspan="2">รายการ</th>
							<th class="text-center" width="110" rowspan="2">CODE</th>
							<th class="text-center" width="70" rowspan="2">จำนวน</th>
							<th class="text-center" width="80" rowspan="2">หน่วย</th>
							<th class="text-center" colspan="3">รหัส</th>
							<th class="text-center" rowspan="2">วัตถุประสงค์</th>
							<th class="text-center" width="36" rowspan="2">#</th>
						</tr>
						<tr>
							<th class="text-center" width="80">แผนก</th>
							<th class="text-center" width="80">เครื่อง</th>
							<th class="text-center" width="80">งาน</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td class="text-center td-group"><input type="text" class="form-control tank_no" name="item[]" placeholder="รายการ..."/></td>
							<td class="text-center td-group"><input class="form-control" type="text" name="code[]" placeholder="Code..."></td>
							<td class="text-center td-group"><input class="form-control text-center" type="number" name="qty[]" placeholder="จำนวน..."></td>
							<td class="text-center td-group"><input class="form-control text-center" type="text" name="unit[]" placeholder="หน่วย..."></td>
							<td class="text-center td-group"><input class="form-control text-center text-uppercase" type="text" name="dep[]" placeholder="แผนก..." value=""></td>
							<td class="text-center td-group"><input class="form-control text-center" type="text" name="machine[]" placeholder="เครื่อง..."></td>
							<td class="text-center td-group"><input class="form-control text-center" type="text" name="task[]" placeholder="งาน..."></td>
							<td class="text-center td-group"><input class="form-control" type="text" name="remark[]" placeholder="วัตถุประสงค์..."></td>
							<td class="text-center"><button type="button" class="btn btn-icon btn-default add-elements"><i class="fa fa-plus"></i></button></td>
						</tr>
					</tbody>
				</table>
					<div class="row" style="margin-bottom:8px;">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-primary disabled" type="button">Notes (ถ้ามี)</button>
										</span>
										<input type="text" class="form-control" placeholder="หมายเหตุ..." name="notes" id="notes">
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="input-group" style="margin-bottom:100px;">
					<button type="submit" name="submit" class="btn btn-primary btn-submit" style="margin-right:6px;">บันทึกข้อมูล</button>
					<button type="reset" class="btn btn-danger btn-reset">Reset</button>
				</div>
				</form>
			</div>

<style>
.glyphicon-lg{font-size:3em}
.table-component tr{height:20px !important;}
.pull-right .glyphicons{margin-top:-16px;}
td .glyphicons{font-size:24px;}
td .btn-upload{margin-left:3px;}
.pull-right .glyphicons.glyphicons-circle-ok, td .glyphicons.glyphicons-circle-ok{color:#5CB85C !important}
.pull-right .glyphicons.glyphicons-circle-remove, td .glyphicons.glyphicons-circle-remove{color:#D9534F !important}
.tab-pane{overflow:hidden;}
.table th{text-align:center;}
.input-group-btn .btn, .input-group-btn .btn:hover, .input-group-btn .btn:focus { width:140px;text-align:left;color: #555;background-color: #eee;border: 1px solid #ccc;cursor:default }
.btn-excel{margin-left:3px;}
.datepicker{text-align:center;}
.table-components{width:100%;max-width: 100%;margin:8px 0;padding:4px;}
.table-components > thead > tr > th,
.table-components > tbody > tr > th,
.table-components > tfoot > tr > th{
	padding: 4px;
	line-height: 1.42857143;
	vertical-align: middle;
	border-top: 1px solid #ddd;
}
.table-components > thead > tr > td,
.table-components > tbody > tr > td,
.table-components > tfoot > tr > td {
	padding: 4px;
	line-height: 1.42857143;
	vertical-align: middle;
	border-top: 1px solid #ddd;
}
.table-components td > div{width:100%}
.table-components .form-control{
  width: 100%;
  height: 30px;
  line-height: 30px;
}
.delete-elements, .add-elements{padding:3px 4px;}
.form-control{color:#0066ff !important}
.bg-error{background-color:#fde8c8}
</style>
