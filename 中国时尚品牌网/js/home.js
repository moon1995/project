// JavaScript Document
	$(function(){
		var $div_li=$("div.new_menu ul li")					//获取新闻tab菜单里ul里面的li
		$div_li.click(function(){
			$(this).addClass("selected")					//当前元素高亮
				.siblings().removeClass("selected");		//删除其他高亮显示
				
				var index=$div_li.index(this);				//获取当前点击的li元素的索引
					$("div.new_txt > div")					//选取子节点。
							.eq(index).show()				//显示li对应的div元素
							.siblings().hide();	
		});
	});