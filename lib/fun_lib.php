<?php
  /*建立卡片*/
	function set_cult_mes($date,$title,$mes)
	{
    	return "<div class='card-mes'><span>&nbsp;&nbsp;".$date."</span><h2>".$title."</h2>".$mes."</div>";
  	}
  	function set_work_mes($date,$title,$mes,$h_num)
	{
		return "<div><".$h_num.">".$title."</".$h_num."><p>".$date."</p>".$mes."</div>";
	}
?>