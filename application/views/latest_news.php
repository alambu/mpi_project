<div class=" col-md-4">
		 <div class="card">
				<div class="head-title-bar">
					<div class="secs section-title">
						<h2 class="s2"><i class="fa fa-file-text" aria-hidden="true"></i> Latest Notice</h2>
					</div>
				</div>
			<?php 
			$news=$this->db->where('status','1')->order_by('id','DESC')->get('notices')->result();
			?>
				<div class="card-content">
					<div class="notices">
						<ul class="latest-news">
						<?php foreach($news as $row):?>
							<li><strong><?php echo  date('d M Y',strtotime($row->notice_date))?></strong>&nbsp;<a href="academic/latest_news_view/<?php echo $row->id?>"><?php echo $row->title?></a></li>	
						<?php endforeach;?>
						</ul>
					</div>
				</div>
		</div>
  </div>
