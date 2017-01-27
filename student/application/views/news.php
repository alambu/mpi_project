<?php 
$news=$this->db->where('status','1')->order_by('id','DESC')->limit(5)->get('news')->result();
?>
<style>
ul {
  list-style-type: circle;
}
ul.columns>li {
  display: inline-block;
  padding-right: 1cm;
  margin-left: 10px;
}
ul.columns>li:before {
  content: '◦';
  position: relative;
  font-size: 1.3em;
  font-weight: bold;
  top: 1px;
  left: -3px;
}
</style>
<div class="panel panel-info">
				<div class="panel-heading">News
				<marquee align="top" behavior="scroll" direction="left" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="1" scrolldelay="20" truespeed="truespeed"> 
				<ul class="columns">
				<?php foreach($news as $row):?>
				<li>
                  <a href='academic/news_details/<?php echo $row->id?>'><?php echo $row->title?></a>
				  </li>
				<?php endforeach;?>
				</ul>
				</marquee>
				</div>                           
              </div>